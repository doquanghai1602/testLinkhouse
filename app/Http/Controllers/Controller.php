<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\MenuHorizontal;
use App\MenuVertical;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){
		$this->middleware(function ($request, $next) {
			$css_web = 'public/';
			view()->share('css_web',$css_web);
			$shareMenuHorizontal = MenuHorizontal::where('display',1)->orderByRaw('id DESC')->get();
			view()->share('shareMenuHorizontal',$shareMenuHorizontal);
			$shareMenuVertical = MenuVertical::where('display',1)->orderByRaw('id DESC')->get();
			view()->share('shareMenuVertical',$shareMenuVertical);
			
			return $next($request);
		});
	}
}
