<?php
class GraphController extends BaseController{

//logic to load catrgory and record infomation
	public function getGraph(){

		$recordControl = new Record;
		$category[0] = $recordControl->countCategory('Food');
		$category[1] = $recordControl->countCategory('Travel');
		$category[2] = $recordControl->countCategory('Sport');
		$category[3] = $recordControl->countCategory('Transport');
		$category[4] = $recordControl->countCategory('Fashion');
		$category[5] = $recordControl->countCategory('It');
		$category[6] = $recordControl->countCategory('etc');

//set default value of array
		$outPerDay[0] = 0;
		$outPerDay[1] = 0;
		$outPerDay[2] = 0;
		$outPerDay[3] = 0;
		$outPerDay[4] = 0;
		$outPerDay[5] = 0;
		$outPerDay[6] = 0;

//load tatal amount in a day
		for ($i=0; $i < 7; $i++) { 
			$dateMidnight = date('Y-m-d H:i:s', strtotime($i.' day ago midnight'));
			$dateNextday = date('Y-m-d H:i:s', strtotime(($i-1).' day ago midnight'));
			$temp = RecordDB::where('ownerId','=',Auth::user()->id)->where('type','=',2)->where('created_at','>=',$dateMidnight)->where('created_at','<',$dateNextday)->get();
			for ($j=0; $j <count($temp) ; $j++) { 
				$outPerDay[$i] = $outPerDay[$i] + $temp[$j]->amount;
			}
		}

//set default value of array
		$inPerDay[0] = 0;
		$inPerDay[1] = 0;
		$inPerDay[2] = 0;
		$inPerDay[3] = 0;
		$inPerDay[4] = 0;
		$inPerDay[5] = 0;
		$inPerDay[6] = 0;

//load tatal amount in a day
		for ($i=0; $i < 7; $i++) { 
			$dateMidnight = date('Y-m-d H:i:s', strtotime($i.' day ago midnight'));
			$dateNextday = date('Y-m-d H:i:s', strtotime(($i-1).' day ago midnight'));
			$temp = RecordDB::where('ownerId','=',Auth::user()->id)->where('type','=',1)->where('created_at','>=',$dateMidnight)->where('created_at','<',$dateNextday)->get();
			for ($j=0; $j <count($temp) ; $j++) { 
				$inPerDay[$i] = $inPerDay[$i] + $temp[$j]->amount;
			}
		}
		return View::make('graph')->with(array('category'=>$category,'outPerDay'=>$outPerDay,'inPerDay'=>$inPerDay));
	}

}
