<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\MenuHorizontal;
use App\MenuVertical;
use Input;

class WebsiteController extends Controller
{
	
	public function get_home(){
		return Redirect::Route('menu_horizontal');
		// return view('website.home');
	}

	public function get_menu_horizontal(){
		$data = MenuHorizontal::orderByRaw('display DESC, id DESC');
		$display = Input::get('display');
		if ($display == '' || $display == 'all') {
			$display = 'all';
		}
		else $data = $data->where('display',$display);
		$time = Input::get('time');
		if ($time != '') {
			$data = $data->whereDate('created_at','=',$time);
		}
		$data = $data->get();
		return view('website.menu.menu_horizontal',['data'=>$data,'display'=>$display,'time'=>$time]);
	}
	public function get_menu_horizontal_create(){
		$item = array(
			'name' => '',
			'display' => 1,
		);
		return view('website.menu.menu_horizontal_form',['item'=>$item]);
	}	
	public function post_menu_horizontal_create(Request $request){
		$this->validate($request,
		[
			'name'=>'required',
			'display'=>'required',
		],
		[
			'name.required'=>'Vui lòng nhập tên',
			'display.required'=>'Vui lòng chọn hiển thị',
		]);
		$item = new MenuHorizontal;
		$item->name = $request->name;
		$item->display = $request->display;
		$item->save();
		return Redirect::Route('menu_horizontal')->with('report','Cập nhật thành công !');
	}
	public function get_menu_horizontal_update(){
		$id = Input::get('id');
		if(is_numeric($id) && MenuHorizontal::find($id) <> '')
		{
			$item = MenuHorizontal::find($id);
			return view('website.menu.menu_horizontal_form',['item'=>$item]);
		}
		else{
			return Redirect::Route('menu_horizontal')->withErrors([
				'approve' => 'Định dạng url không đúng Vui lòng kiểm tra lại',
			]);
		}
	}	
	public function post_menu_horizontal_update(Request $request){
		$id = Input::get('id');
		if(is_numeric($id) && MenuHorizontal::find($id) <> '')
		{
			$this->validate($request,
			[
				'name'=>'required',
				'display'=>'required',
			],
			[
				'name.required'=>'Vui lòng nhập tên',
				'display.required'=>'Vui lòng chọn hiển thị',
			]);
			$item = MenuHorizontal::find($id);
			$item->name = $request->name;
			$item->display = $request->display;
			$item->save();
			return Redirect::Route('menu_horizontal')->with('report','Cập nhật thành công !');
		}
		else{
			return Redirect::Route('menu_horizontal')->withErrors([
				'approve' => 'Định dạng url không đúng Vui lòng kiểm tra lại',
			]);
		}
	}
	public function get_menu_horizontal_delete(){
		$id = Input::get('id');
		if(is_numeric($id) && MenuHorizontal::find($id) <> '')
		{
			$item = MenuHorizontal::find($id);
			$item->delete();
			return Redirect::Route('menu_horizontal')->with('report','Cập nhật thành công !');
		}
		else{
			return Redirect::Route('menu_horizontal')->withErrors([
				'approve' => 'Định dạng url không đúng Vui lòng kiểm tra lại',
			]);
		}
	}

	public function get_menu_vertical(){
		$data = MenuVertical::orderByRaw('display DESC, id DESC');
		$display = Input::get('display');
		if ($display == '' || $display == 'all') {
			$display = 'all';
		}
		else $data = $data->where('display',$display);
		$time = Input::get('time');
		if ($time != '') {
			$data = $data->whereDate('created_at','=',$time);
		}
		$data = $data->get();
		return view('website.menu.menu_vertical',['data'=>$data,'display'=>$display,'time'=>$time]);
	}
	public function get_menu_vertical_create(){
		$item = array(
			'name' => '',
			'display' => 1,
		);
		return view('website.menu.menu_vertical_form',['item'=>$item]);
	}	
	public function post_menu_vertical_create(Request $request){
		$this->validate($request,
		[
			'name'=>'required',
			'display'=>'required',
		],
		[
			'name.required'=>'Vui lòng nhập tên',
			'display.required'=>'Vui lòng chọn hiển thị',
		]);
		$item = new MenuVertical;
		$item->name = $request->name;
		$item->display = $request->display;
		$item->save();
		return Redirect::Route('menu_vertical')->with('report','Cập nhật thành công !');
	}
	public function get_menu_vertical_update(){
		$id = Input::get('id');
		if(is_numeric($id) && MenuVertical::find($id) <> '')
		{
			$item = MenuVertical::find($id);
			return view('website.menu.menu_vertical_form',['item'=>$item]);
		}
		else{
			return Redirect::Route('menu_vertical')->withErrors([
				'approve' => 'Định dạng url không đúng Vui lòng kiểm tra lại',
			]);
		}
	}	
	public function post_menu_vertical_update(Request $request){
		$id = Input::get('id');
		if(is_numeric($id) && MenuVertical::find($id) <> '')
		{
			$this->validate($request,
			[
				'name'=>'required',
				'display'=>'required',
			],
			[
				'name.required'=>'Vui lòng nhập tên',
				'display.required'=>'Vui lòng chọn hiển thị',
			]);
			$item = MenuVertical::find($id);
			$item->name = $request->name;
			$item->display = $request->display;
			$item->save();
			return Redirect::Route('menu_vertical')->with('report','Cập nhật thành công !');
		}
		else{
			return Redirect::Route('menu_vertical')->withErrors([
				'approve' => 'Định dạng url không đúng Vui lòng kiểm tra lại',
			]);
		}
	}
	public function get_menu_vertical_delete(){
		$id = Input::get('id');
		if(is_numeric($id) && MenuVertical::find($id) <> '')
		{
			$item = MenuVertical::find($id);
			$item->delete();
			return Redirect::Route('menu_vertical')->with('report','Cập nhật thành công !');
		}
		else{
			return Redirect::Route('menu_vertical')->withErrors([
				'approve' => 'Định dạng url không đúng Vui lòng kiểm tra lại',
			]);
		}
	}
	
}
