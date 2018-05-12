<?php
	namespace catestree;
	
	class Catestree{

		public function catestree($cateslist){

			return $this->sort($cateslist);
		}

		public function sort($cateslist,$catepid=0,$lever=0){
			static $arr=array();
			foreach ($cateslist as $k => $v) {
				if ($v['cates_pid'] == $catepid ) {
					$v['lever'] = $lever;
					$arr[] = $v;
					$this -> sort($cateslist,$v['cates_id'],$lever+1);

				}
			}
			return $arr;
		}





		public function childrenids($dataid,$catec){
			$data = $catec->field('cates_id,cates_pid')->select();

			return $this -> _childrenids($data,$dataid);
		}

		private function _childrenids($data,$dataid){

			static $arr = array();
			foreach ($data as $k => $v) {
				if($v['cates_pid'] == $dataid){
					$arr[] =$v['cates_id'];
					$this -> _childrenids($data,$v['cates_id']);
				}
			}
			return $arr;
		}


		public function sortss($data,$catec){
			foreach ($data as $k => $v) {
				$catec ->update(['cates_id'=>$k,'cates_sort'=>$v]);
			}
		}



	}