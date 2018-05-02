<?php
	namespace app\admin\controller;

	use think\Controller;


	class Config extends Controller
	{
		public function lst(){

			$configlist = db('config')->order('config_id desc')->paginate(5);
			$this -> assign('configlist',$configlist);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');

				if ($data['config_formtype'] =='radio' || $data['config_formtype'] =='select' || $data['config_formtype'] =='checked' ) {
				 	# code...
				 } {
					$data['config_values'] = str_replace('，', ',', $data['config_values']);
					$data['config_default'] = str_replace('，', ',', $data['config_default']);
				}
				
				
				// else if (stripos($data['config_url'],'https://') === false){
				// 	$data['config_url'] = 'https://'.$data['config_url'];
				// } else{
				// 	return $data['config_url'];
				// }

				

				// $validate = validate('config');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('config')->insert($data);
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
				

				if ($data['config_formtype'] =='radio' || $data['config_formtype'] =='select' || $data['config_formtype'] =='checked' ) {
				 	# code...
				 } {
					$data['config_values'] = str_replace('，', ',', $data['config_values']);
					$data['config_default'] = str_replace('，', ',', $data['config_default']);
				}
			
				

				// $validate = validate('config');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('config')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$config_id=input('config_id');
			$config = db('config')->find($config_id);
			$this->assign('config',$config);
			return view();

		}


		public function del($config_id){


			$del=db('config')->delete($config_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		
	}