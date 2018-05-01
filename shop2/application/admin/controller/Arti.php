<?php
	namespace app\admin\controller;

	use think\Controller;
	use categorytree\Categorytree;


	class Arti extends Controller
	{

		public function lst(){
		$ardb = db('article');
			$artilist = $ardb -> field ('a.*,b.cate_name') -> alias('a')->join('category b','a.ar_cateid = b.cate_id')->order('ar_id desc')->paginate(5);
			$this -> assign('artilist',$artilist);

			return view('list');

		}


		public function add(){
	
			$ardb = db('article');
			$category = new categorytree();
			if (request()->isPost()){
				$data=input('post.');
				$data['ar_addtime']=time();
				if ($data['ar_linkurl']  && stripos($data['ar_linkurl'],'http://') === false){
					$data['ar_linkurl'] = 'http://'.$data['ar_linkurl'];
				} 


				if ($_FILES['ar_thumbnail']['tmp_name']){
					$data['ar_thumbnail']=$this -> upload();
				}

				$validate = validate('arti');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}


				$add=$ardb->insert($data);
				// dump($_FILES);
				// dump($data);die;
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}

				return;
			}

			$artilist = db('category') ->select();
			$artilist = $category -> categorytree($artilist);
			$this -> assign('artilist',$artilist);

			
			$category_id=input('cate_id');
			$categorys = db('category') ->find($category_id);
			$this->assign('categorys',$categorys);

			return view();

		}


		public function edit(){
			$ardb = db('article');
			$category = new categorytree();
			


			if (request()->isPost()){

				$data=input('post.');	
				if ($data['ar_linkurl']  && stripos($data['ar_linkurl'],'http://') === false){
					$data['ar_linkurl'] = 'http://'.$data['ar_linkurl'];
				}
				if ($_FILES['ar_thumbnail']['tmp_name']){
					$oldimg=db('article')->field('ar_thumbnail')->find($data['ar_id']);
					$oldimgs=imgupload.$oldimg['ar_thumbnail'];
						if (file_exists($oldimgs)){
							@unlink($oldimgs);
						}

					$data['ar_thumbnail']=$this -> upload();
				}
				

				$validate = validate('arti');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}


				// dump($data);

				$save= $ardb ->update($data);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}

			$category_id=input('ar_id');
			$categorys = $ardb ->find($category_id);
			$this->assign('categorys',$categorys);
	
			$artilist = db('category') ->select();
			$artilist = $category -> categorytree($artilist);
			$this -> assign('artilist',$artilist);




			return view();

		}



		public function del($ar_id){

			$ardb = db('article');
			$oldimg= $ardb ->field('ar_thumbnail')->find($ar_id);
			$oldimgs=imgupload.$oldimg['ar_thumbnail'];
			if (file_exists($oldimgs)){
				@unlink($oldimgs);
			}
			// var_dump($oldimgs);die;
			$del= $ardb ->delete($ar_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('ar_thumbnail');
		    
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


		public function imglist(){
			// $_files = 
			$_files=viewdir();
			$files = array();
			foreach ($_files as $k => $v) {
				if (is_array($v)){
					foreach ($v as $k1 => $v1) {
						$v1 = str_replace(ueditor,http_ueditor,$v1);
						$files[] = $v1;
					}
				}else{
					$v = str_replace(ueditor,http_ueditor,$v);
					$files[] = $v;
				}
			}
			$this -> assign(['imglist' => $files,]);
			// dump($files);die;
			return view();

		}


		public function delimg(){
			$imgscr = input('imgscr');
			// var_dump($imgscr);
			$imgscr = delueditor.$imgscr;
			// var_dump($imgscr);die;
			if (file_exists($imgscr)) {
				if (@unlink($imgscr)) {
					echo 1;
				}else {
					echo 2;
				}
			}else{
				echo 3;
			}

		}

		
		
	}




