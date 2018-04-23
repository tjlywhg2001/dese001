<?php
	namespace categorytree;
	
	class Categorytree{

		public function categorytree($catelist){

			return $this->sort($catelist);
		}

		public function sort($catelist,$catepid=0,$lever=0){
			static $arr=array();
			foreach ($catelist as $k => $v) {
				if ($v['cate_pid'] == $catepid ) {
					$v['lever'] = $lever;
					$arr[] = $v;
					$this -> sort($catelist,$v['cate_id'],$lever+1);

				}
			}
		return $arr;
		}


		public function childrenids($dataid){
			$data = $this->field('cate_id','cate_pid')->select();

			return $this -> _childrenids($data,$dataid);
		}

		private function _childrenids($data,$dataid){

			static $arr = array();
			foreach ($data as $k => $v) {
				if($v['cate_pid'] == $dataid){
					$arr[] = $v['cate_id'];
					$this -> _childrenids($data,$dataid['cate_id']);
				}
			}
			return $arr;
		}

	}