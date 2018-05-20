<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Menu;
use Session;

class MenuController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index() {
        return view('cms.content.menu', self::$data);
    }

    public function create() {
        return view('cms.forms.add_menu', self::$data);
    }

    public function store(MenuRequest $request) {
        Menu::save_new($request);
        Session::flash('ms', 'A new menu link was successfuly added to site');
        return redirect('cms/menu');
    }

    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.forms.delete_menu', self::$data);
    }

    public function edit($id) {
        self::$data['menu'] = Menu::find($id)->toArray();
        return view('cms.forms.edit_menu', self::$data);
    }
    
    public function update(MenuRequest $request, $id) {
        Menu::update_item($request, $id);
        Session::flash('ms', 'The menu link was successfuly updated');
        return redirect('cms/menu'); 
    }

    public function destroy($id) {
        Menu::destroy($id);
        Session::flash('ms', 'The menu link was successfuly removed');
        return redirect('cms/menu'); 
    }

}
