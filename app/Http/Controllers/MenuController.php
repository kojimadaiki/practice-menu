<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
  public function top() {

    return view('menu.top');
  }

  public function post() {

    return view('post');
  }

  public function menuPost(MenuRequest $request) {

    $inputs = new Menu;
    $inputs->user_id = $request->user()->id;
    $inputs->title = $request->title;
    $inputs->style = $request->style;
    $inputs->times = $request->times;
    $inputs->time = $request->time;
    $inputs->strength = $request->strength;
    $inputs->long = $request->long;
    $inputs->total = $request->total;
    $inputs->date = $request->date;
    $inputs->impression = $request->impression;


    \DB::beginTransaction();
    try {
      $inputs->save();
      \DB::commit();
    } catch(\Throwable $e) {
      dd($e);
      \DB::rollback();
      abort(500);
    }
    \Session::flash('err_msg', 'ブログを登録しました');
      return redirect(route('user'));
  }

  public function watch() {

    $menus = Menu::all();

    return view('watch', ['menus' => $menus]);
  }

  public function edit($id) {
    $menu = Menu::find($id);

    if (is_null($menu)) {
      \Session::flash('err_msg', 'データがありません');
      return redirect(route('menu'));
    }

    return view('edit', ['menu' => $menu]);
  }

  public function show($id) {

    $menu = Menu::find($id);

    if (is_null($menu)) {
      \Session::flash('err_msg', 'データがありません');
      return redirect(route('watch'));
    }

    return view('show', ['menu' => $menu]);
  }

  public function update(MenuRequest $request) {
    $inputs = $request->all();

    \DB::beginTransaction();
    try {
      $menu = Menu::find($inputs['id']);
      $menu->fill([
        'title' => $inputs['title'],
        'style' => $inputs['style'],
        'times' => $inputs['times'],
        'time' => $inputs['time'],
        'long' => $inputs['long'],
        'strength' => $inputs['strength'],
        'total' => $inputs['total'],
        'impression' => $inputs['impression'],
        'date' => $inputs['date'],
      ]);
      $menu->save();
      \DB::commit();
    } catch(\Throwable $e) {
      dd($e);
      \DB::rollback();
      abort(500);
    }
    \Session::flash('err_msg', 'ブログを更新しました');
      return redirect(route('watch'));
  }
}
