<?php
	namespace app\admin\controller;

	use think\Controller;

	class Type extends Controller
	{
		public function lst(){

			$typelist = db('type')->order('type_id desc')->paginate(5);
			$this -> assign('typelist',$typelist);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');
				
				// $validate = validate('type');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('type')->insert($data);
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

			if (request()->isPost()){
				$data=input('post.');
				
				

				// $validate = validate('type');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('type')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$type_id=input('type_id');
			$type = db('type')->find($type_id);
			$this->assign('type',$type);
			return view();

		}


		public function del($type_id){

			$del=db('type')->delete($type_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}