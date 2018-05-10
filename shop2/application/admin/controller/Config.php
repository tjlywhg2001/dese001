<?php
	namespace app\admin\controller;

	use think\Controller;


	class Config extends Controller
	{


		public function configlst(){

			$confs = db('config');

			if(request()->isPost()){
				$data = input('post.');
				$checkid2D = $confs -> field('config_ename') -> where(array('config_formtype' => 'checked')) -> select();

				// dump($checkid2D);die;

				$checkids = array();
				if ($checkid2D){
					foreach ($checkid2D as $k => $v) {
						$checkids[] = $v['config_ename'];
					}
				}

				// dump($checkids);die;

				$checkadd = array();
				foreach ($data as $k => $v) {
					$checkadd[]=$k;
					if (is_array($v)) {
						$values = implode(',' , $v);
						$confs -> where(array('config_ename' => $k)) -> update(['config_default' => $values]);
					}
					else{
						$confs -> where(array('config_ename' => $k)) -> update(['config_default' => $v]);
					}
				}


				// dump($data);die;


				foreach ($checkids as $k => $v) {
					if(!in_array($v,$checkadd)){
						$confs -> where(array('config_ename' => $v)) -> update(['config_default' =>'']);
					}
				}


				if($_FILES){
					foreach ($_FILES as $k => $v) {
						if($v['tmp_name']){
							$pics = $confs -> field('config_default') -> where(array('config_ename' => $k)) -> find();
							if ($pics['config_default']) {
								$oldpic = imgupload.$pics['config_default'];
								if(file_exists($oldpic)){
									@unlink($oldpic);
								}
							}
							$picscr = $this -> upload($k);
							$confs -> where(array('config_ename' => $k )) -> update(['config_default'=>$picscr]);
						}
					}
				}




				// dump($_FILES);die;

				$this ->success('配置成功!');
			}

			$shopconflist = $confs -> where(array('config_type' => 1)) ->order('config_sort desc') ->select();
			$commconflist = $confs -> where(array('config_type' => 0)) ->order('config_sort desc') ->select();
			$this -> assign(['shopconflist'=>$shopconflist,'commconflist'=>$commconflist]);

			return view('configlist');

		}


		public function lst(){


			$confs =db('config');
			if (request()->isPost()) {
				$data=input('post.');
				foreach ($data['config_sort'] as $k => $v) {
					$confs -> where('config_id','=',$k) -> update(['config_sort'=>$v]);
				}
				$this->success('排序成功',url('lst'));
			}


			$configlist = $confs->order('config_sort desc')->paginate(10);
			$this -> assign('configlist',$configlist);



			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');

				if ($data['config_formtype'] =='radio' || $data['config_formtype'] =='select' || $data['config_formtype'] =='checked' ) {

					$data['config_values'] = str_replace('，', ',', $data['config_values']);
					$data['config_default'] = str_replace('，', ',', $data['config_default']);

				}
				
				

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


		
		public function upload($picscr){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file($picscr);
		    
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