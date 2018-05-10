<?php
	namespace attrtree;
	
	class attrtree{

		public function attrtree($attrtreelist){

			return $this->sort($attrtreelist);
		}

		public function sort($attrtreelist,$attrtreepid=0,$lever=0){
			static $arr=array();
			foreach ($attrtreelist as $k => $v) {
				if ($v['attrtree_pid'] == $attrtreepid ) {
					$v['lever'] = $lever;
					$arr[] = $v;
					$this -> sort($attrtreelist,$v['attrtree_id'],$lever+1);

				}
			}
			return $arr;
		}





		public function childrenids($dataid,$attrtreec){
			$data = $attrtreec->field('attrtree_id,attrtree_pid')->select();

			return $this -> _childrenids($data,$dataid);
		}

		private function _childrenids($data,$dataid){

			static $arr = array();
			foreach ($data as $k => $v) {
				if($v['attrtree_pid'] == $dataid){
					$arr[] =$v['attrtree_id'];
					$this -> _childrenids($data,$v['attrtree_id']);
				}
			}
			return $arr;
		}


		public function sortss($data,$attrtreec){
			foreach ($data as $k => $v) {
				$attrtreec ->update(['attrtree_id'=>$k,'attrtree_sort'=>$v]);
			}
		}



	}