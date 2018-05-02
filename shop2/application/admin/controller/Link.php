<?php
	namespace app\admin\controller;

	use think\Controller;


	class Link extends Controller
	{
		public function lst(){

			$linkslist = db('links')->order('links_id desc')->paginate(5);
			$this -> assign('linkslist',$linkslist);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['links_url']  && stripos($data['links_url'],'http://') === false){
					$data['links_url'] = 'http://'.$data['links_url'];
				} 
				// else if (stripos($data['links_url'],'https://') === false){
				// 	$data['links_url'] = 'https://'.$data['links_url'];
				// } else{
				// 	return $data['links_url'];
				// }

				if ($_FILES['links_logo']['tmp_name']){
					$data['links_logo']=$this -> upload();
				}

				// $validate = validate('links');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('links')->insert($data);
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
				
				if ($data['links_url']  && stripos($data['links_url'],'http://') === false){
					$data['links_url'] = 'http://'.$data['links_url'];
				}
				if ($_FILES['links_logo']['tmp_name']){
					$oldimg=db('links')->field('links_logo')->find($data['links_id']);
					$oldimgs=imgupload.$oldimg['links_logo'];
						if (file_exists($oldimgs)){
							@unlink($oldimgs);
						}

					$data['links_logo']=$this -> upload();
				}
				

				// $validate = validate('links');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('links')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$links_id=input('links_id');
			$links = db('links')->find($links_id);
			$this->assign('links',$links);
			return view();

		}


		public function del($links_id){
			$ardb = db('links');
			$oldimg= $ardb ->field('links_logo')->find($links_id);
			$oldimgs=imgupload.$oldimg['links_logo'];
			if (file_exists($oldimgs)){
				@unlink($oldimgs);
			}

			$del=db('links')->delete($links_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('links_logo');
		    
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