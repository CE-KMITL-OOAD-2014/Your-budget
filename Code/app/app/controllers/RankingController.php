<?php

class RankingController extends BaseController{

	//logic to control load sorted of point
	public function showRank(){
		$rank = User::where('point','!=',0)->orderBy('point','desc')->get();
		return View::make('ranking')->with('rank',$rank);
	}
}
