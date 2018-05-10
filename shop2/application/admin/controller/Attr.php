<?php
	namespace app\admin\controller;

	use think\Controller;

	class Attr extends Controller
	{
		public function lst(){
			$attr =db('attr');
			// dump($attr);die;

			$attrlist = $attr ->order('attr_id asc') -> paginate();

			$attrs = db('type') -> field('type_id,type_name') -> select();

			// $attrlist = $attr -> field('c.*,d.type_name') -> alias('c') -> join('type d','c.type_id = d.type_id') -> order('attr_id desc') ->paginate(5);

			// dump($attrlist);die;
			// dump($attrs);die;

			$this -> assign(['attrlist'=>$attrlist,'attrs'=>$attrs]);

			return view('list');

		}


		public function add(){
			$attr =db('attr');
			$attrlist = $attr -> select();

			$attrlist = db('type') -> field('type_id,type_name') -> select();
			$this -> assign(['attrlist' => $attrlist]);


			if (request()->isPost()){
				$data=input('post.');
				

				// $validate = validate('attr');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=$attr->insert($data);

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
			$attrs =db('attr');
			$attr = new attrtree();
			$attrlist = $attrs -> select();
			$attrlist = $attr ->attrtree($attrlist);
			$this -> assign('attrlist',$attrlist);


			if (request()->isPost()){
				$data=input('post.');
				$validate = validate('attr');
				if (!$validate -> check($data)){
					$this -> error( $validate -> getError());
				}

				$save=$attrs->update($data);
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$attr_id=input('attr_id');
			$attrs = $attrs ->find($attr_id);
			$this->assign('attrs',$attrs);
			return view();

		}



		public function del($attr_id){

			$attrs =db('attr');
			$attrdel = new attrtree();
			$al = $attrdel -> childrenids($attr_id,$attrs);  //获取子栏目ID:4,5
			$al[] = intval($attr_id);  //获取栏目ID：2
			$arrays = [1,2,3];
			$arrayss = array_intersect($arrays,$al);
			if($arrayss){
				$this->error('交集不允许被删掉');
			}

			$artid = db('article');
			foreach ($al as $k => $v) {
				$art = db('article') -> field('ar_id,ar_thumbnail') ->where(array('ar_attrid'=>$v)) ->select();
				foreach ($art as $k1 => $v1) {
					$oldimgs=imgupload.$v1['ar_thumbnail'];
					if (file_exists($oldimgs)){
						@unlink($oldimgs);
					}
					$artid -> delete($v1['ar_id']);
				}
			}

			$del=$attrs->delete($al);

			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}