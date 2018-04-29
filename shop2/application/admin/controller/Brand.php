<?php
	namespace app\admin\controller;

	use think\Controller;


	class Brand extends Controller
	{
		public function lst(){

			$brandlist = db('brand')->order('brand_id desc')->paginate(5);
			$this -> assign('brandlist',$brandlist);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['brand_url']  && stripos($data['brand_url'],'http://') === false){
					$data['brand_url'] = 'http://'.$data['brand_url'];
				} 
				// else if (stripos($data['brand_url'],'https://') === false){
				// 	$data['brand_url'] = 'https://'.$data['brand_url'];
				// } else{
				// 	return $data['brand_url'];
				// }

				if ($_FILES['brand_img']['tmp_name']){
					$data['brand_img']=$this -> upload();
				}

				$validate = validate('brand');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}


				$add=db('brand')->insert($data);
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
				
				if ($data['brand_url']  && stripos($data['brand_url'],'http://') === false){
					$data['brand_url'] = 'http://'.$data['brand_url'];
				}
				if ($_FILES['brand_img']['tmp_name']){
					$oldimg=db('brand')->field('brand_img')->find($data['brand_id']);
					$oldimgs=imgupload.$oldimg['brand_img'];
						if (file_exists($oldimgs)){
							@unlink($oldimgs);
						}

					$data['brand_img']=$this -> upload();
				}
				

				$validate = validate('brand');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}



				$save=db('brand')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$brand_id=input('brand_id');
			$brands = db('brand')->find($brand_id);
			$this->assign('brands',$brands);
			return view();

		}


		public function del($brand_id){
			$ardb = db('brand');
			$oldimg= $ardb ->field('brand_img')->find($brand_id);
			$oldimgs=imgupload.$oldimg['brand_img'];
			if (file_exists($oldimgs)){
				@unlink($oldimgs);
			}

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