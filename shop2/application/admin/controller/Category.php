<?php
	namespace app\admin\controller;

	use think\Controller;
	use categorytree\Categorytree;

	class Category extends Controller
	{
		public function lst(){
			$cates =db('category');
			$category = new categorytree();
			if (request()->isPost()) {
				$data=input('post.');
				$category->sortss($data['cate_sort'],$cates);
				$this->success('排序成功',url('lst'));
			}
			$catelist = $cates->order('cate_sort asc')->select();
			$catelist = $category ->categorytree($catelist);
			$this -> assign('catelist',$catelist);

			return view('list');

		}


		public function add(){
			$cates =db('category');
			$category = new categorytree();
			$catelist = $cates -> select();
			$catelist = $category ->categorytree($catelist);
			$this -> assign('catelist',$catelist);
			if (request()->isPost()){
				$data=input('post.');
				
				if(in_array($data['cate_pid'], ['1','3'])){
					$this->error("系统分类不能作为上级分类！");
				}
				
				if($data['cate_pid'] ==2){
					$data['cate_type'] =3;
				} 

				 $cateID = $cates->field('cate_pid')->find($data['cate_pid']);
				 $cateID = $cateID['cate_pid'];
				 if ($cateID == 2 ){
				 	$this->error("此分类不能作为上级分类！");
				 }
				 


				$validate = validate('category');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}


				$add=db('category')->insert($data);
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}
				$catelist = $cates->order('cate_sort desc')->select();
				$catelist = $category ->categorytree($catelist);

				return;
			}
			$category_id=input('cate_id');
			$categorys = $cates ->find($category_id);
			$this->assign('categorys',$categorys);


			return view();

		}


		public function edit(){
			$cates =db('category');
			$category = new categorytree();
			$catelist = $cates -> select();
			$catelist = $category ->categorytree($catelist);
			$this -> assign('catelist',$catelist);


			if (request()->isPost()){
				$data=input('post.');
				$validate = validate('category');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}

				$save=$cates->update($data);
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$category_id=input('cate_id');
			$categorys = $cates ->find($category_id);
			$this->assign('categorys',$categorys);
			return view();

		}



		public function del($cate_id){

			$cates =db('category');
			$categorydel = new categorytree();
			$al = $categorydel -> childrenids($cate_id,$cates);  //获取子栏目ID:4,5
			$al[] = intval($cate_id);  //获取栏目ID：2
			$arrays = [1,2,3];
			$arrayss = array_intersect($arrays,$al);
			if($arrayss){
				$this->error('交集不允许被删掉');
			}

			$artid = db('article');
			foreach ($al as $k => $v) {
				$art = db('article') -> field('ar_id,ar_thumbnail') ->where(array('ar_cateid'=>$v)) ->select();
				foreach ($art as $k1 => $v1) {
					$oldimgs=imgupload.$v1['ar_thumbnail'];
					if (file_exists($oldimgs)){
						@unlink($oldimgs);
					}
					$artid -> delete($v1['ar_id']);
				}
			}

			$del=$cates->delete($al);

			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}