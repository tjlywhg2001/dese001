<?php
	namespace app\admin\controller;

	use think\Controller;
	use categorytree\Categorytree;

	class Category extends Controller
	{
		public function lst(){

			$catelist = db('category')->select();
			$category = new categorytree();
			$catelist = $category ->categorytree($catelist);
			$this -> assign('catelist',$catelist);

			return view('list');

		}


		public function add(){
			$catelist = db('category') -> select();
			$categoryd = new categorytree();
			$catelist = $categoryd ->categorytree($catelist);
			$this -> assign('catelist',$catelist);
			if (request()->isPost()){
				$data=input('post.');
				
				if(in_array($data['cate_pid'], ['1','3'],false)){
					$this->error("系统分类不能作为上级分类！");
				}
				
				if($data['cate_pid'] ==2){
					$data['cate_type'] =3;
				} 

				 $cateID = db('category')->field('cate_pid')->find($data['cate_pid']);
				 $cateID = $cateID['cate_pid'];
				 if ($cateID == 2 ){
				 	$this->error("此分类不能作为上级分类！");
				 }
				 


				$validate = validate('category');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}


				$add=db('category')->insert($data);
				// dump($_FILES);
				// dump($data);die;
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}

				return;
			}

			return view();

		}


		public function edit(){
			$catelist = db('category') -> select();
			$categoryd = new categorytree();
			$catelist = $categoryd ->categorytree($catelist);
			$this -> assign('catelist',$catelist);

			if (request()->isPost()){
				$data=input('post.');
				
				// if ($data['brand_url']  && stripos($data['brand_url'],'http://') === false){
				// 	$data['brand_url'] = 'http://'.$data['brand_url'];
				// }
				// if ($_FILES['brand_img']['tmp_name']){
				// 	$oldimg=db('brand')->field('brand_img')->find($data['brand_id']);
				// 	$oldimgs=imgupload.$oldimg['brand_img'];
				// 		if (file_exists($oldimgs)){
				// 			@unlink($oldimgs);
				// 		}

				// 	$data['brand_img']=$this -> upload();
				// }
				

				$validate = validate('category');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}



				$save=db('category')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$category_id=input('cate_id');
			$categorys = db('category')->find($category_id);
			$this->assign('categorys',$categorys);
			return view();

		}


		public function del($cate_id){
			$del=db('category')->delete($cate_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}