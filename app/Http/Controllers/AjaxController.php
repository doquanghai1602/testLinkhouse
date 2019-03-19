<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\MenuHorizontal;
use App\MenuVertical;
use Input;

class AjaxController extends Controller
{
	
	public function post_by_display(Request $request){
		$Table = $request->com;
		if($Table == "MenuHorizontal"){
			$items = MenuHorizontal::find($request->id);
		}
		elseif($Table == "MenuVertical"){
			$items = MenuVertical::find($request->id);
		}
		else{
			$items = '';
		}

		if ($items == "") {
			echo 'err'; return;
		}
		//thực thi
		if ($items->display == 1) {
			$items->display = 0;
		}
		else{
			$items->display = 1;
		}
		$items->save();
		echo 'oke'; return;
	}
	
}
