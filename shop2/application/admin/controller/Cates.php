<?php
	namespace app\admin\controller;

	use think\Controller;
	use catestree\Catestree;

	class cates extends Controller
	{
		public function lst(){
			$cates =db('cates');
			$catest = new catestree();
			if (request()->isPost()) {
				$data=input('post.');
				$catest->sortss($data['cates_sort'],$cates);
				$this->success('排序成功',url('lst'));
			}
			$cateslist = $cates->order('cates_sort asc')->select();
			$cateslist = $catest ->catestree($cateslist);
			$this -> assign('cateslist',$cateslist);

			return view('list');

		}


		public function add(){
			$cates =db('cates');
			$catest = new catestree();
			$cateslist = $cates -> select();
			$cateslist = $catest ->catestree($cateslist);
			$this -> assign('cateslist',$cateslist);
			if (request()->isPost()){
				$data=input('post.');
				
				// if(in_array($data['cates_pid'], ['1','3'])){
				// 	$this->error("系统分类不能作为上级分类！");
				// }
				
				// if($data['cates_pid'] ==2){
				// 	$data['cate_type'] =3;
				// } 

				//  $catesID = $cates->field('cates_pid')->find($data['cates_pid']);
				//  $catesID = $catesID['cates_pid'];
				//  if ($catesID == 2 ){
				//  	$this->error("此分类不能作为上级分类！");
				//  }
				 


				// $validate = validate('cates');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('cates')->insert($data);
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}
				$cateslist = $cates->order('cates_sort desc')->select();
				$cateslist = $catest ->catestree($cateslist);

				return;
			}
			$cates_id=input('cates_id');
			$catess = $cates ->find($cates_id);
			$this->assign('catess',$catess);


			return view();

		}


		public function edit(){
			$cates =db('cates');
			$catest = new catestree();
			$cateslist = $cates -> select();
			$cateslist = $catest ->catestree($cateslist);
			$this -> assign('cateslist',$cateslist);


			if (request()->isPost()){
				$data=input('post.');

				// $validate = validate('cates');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }

				$save=$cates->update($data);
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$cates_id=input('cates_id');
			$catess = $cates ->find($cates_id);
			$this->assign('catess',$catess);
			return view();

		}



		public function del($cates_id){

			$cates =db('cates');
			$catesdel = new catestree();
			$al = $catesdel -> childrenids($cates_id,$cates);  //获取子栏目ID:4,5
			$al[] = intval($cates_id);  //获取栏目ID：2
			$arrays = [1,2,3];
			$arrayss = array_intersect($arrays,$al);
			if($arrayss){
				$this->error('交集不允许被删掉');
			}

			// $artid = db('article');
			// foreach ($al as $k => $v) {
			// 	$art = db('article') -> field('ar_id,ar_thumbnail') ->where(array('ar_catesID'=>$v)) ->select();
			// 	foreach ($art as $k1 => $v1) {
			// 		$oldimgs=imgupload.$v1['ar_thumbnail'];
			// 		if (file_exists($oldimgs)){
			// 			@unlink($oldimgs);
			// 		}
			// 		$artid -> delete($v1['ar_id']);
			// 	}
			// }

			$del=$cates->delete($al);

			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}