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
				
				// if ($data['brand_url']  && stripos($data['brand_url'],'http://') === false){
				// 	$data['brand_url'] = 'http://'.$data['brand_url'];
				// } 

				// if ($_FILES['brand_img']['tmp_name']){
				// 	$data['brand_img']=$this -> upload();
				// }

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


		public function del($brand_id){
			$del=db('brand')->delete($brand_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('brand_img');
		    
		    // 移动到框架应用根目录/public/uploads/ 目录下
		    if($file){
		        $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploadss');
		        if($info){
		            // 成功上传后 获取上传信息
		            // 输出 jpg
		            // echo $info->getExtension();
		            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		            return $info->getSaveName();
		            // 输出 42a79759f284b767dfcb2a0197904287.jpg
		            // echo $info->getFilename(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }
		}
	}