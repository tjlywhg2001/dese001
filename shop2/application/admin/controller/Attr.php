<?php
	namespace app\admin\controller;

	use think\Controller;

	class Attr extends Controller
	{
		public function lst(){
			$attr =db('attr');
			$attrlist = $attr -> field('c.*,d.type_name') -> alias('c') -> join('type d','c.type_id = d.type_id')->order('attr_id desc') -> paginate(10);

			$this -> assign(['attrlist'=>$attrlist]);

			return view('list');

		}


		public function add(){
			$attr =db('attr');
			$attrlist = $attr -> select();
			$attrlist = db('type') -> field('type_id,type_name') -> select();
			$this -> assign(['attrlist' => $attrlist]);


			if (request()->isPost()){
				$data=input('post.');
				
				$data['attr_values'] = str_replace('，', ',', $data['attr_values']);

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
			$attr =db('attr');
			$attrlist = $attr -> select();
			$attrlist = db('type') -> field('type_id,type_name') -> select();
			$this -> assign(['attrlist' => $attrlist]);

			if (request()->isPost()){
				$data=input('post.');

				$data['attr_values'] = str_replace('，', ',', $data['attr_values']);

				// $validate = validate('attr');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$save=$attr->update($data);
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$attr_id=input('attr_id');
			$attr = $attr ->find($attr_id);
			$this->assign('attr',$attr);
			return view();

		}



		public function del($attr_id){
			$attr =db('attr');

			$del=$attr->delete($attr_id);

			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}