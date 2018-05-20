<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Session;

class CategoryController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index() {
        self::$data['cards'] = TRUE;
        self::$data['category'] = Category::all()->toArray();
        return view('cms.content.category', self::$data);
    }

    public function create() {
        self::$data['summernote'] = TRUE;
        self::$data['dropzone'] = TRUE;
        return view('cms.forms.add_category', self::$data);
    }

    public function store(CategoryRequest $request) {
        Category::save_new($request);
        Session::flash('ms', 'A new category link was successfuly added to site');
        return redirect('cms/category');
    }

    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.forms.delete_category', self::$data);
    }

    public function edit($id) {
        self::$data['summernote'] = TRUE;
        self::$data['dropzone'] = TRUE;
        self::$data['category'] = Category::find($id)->toArray();
        return view('cms.forms.edit_category', self::$data);
    }

    public function update(CategoryRequest $request, $id) {
        Category::update_item($request, $id);
        Session::flash('ms', 'The category link was successfuly updated');
        return redirect('cms/category');
    }

    public function destroy($id) {
        Category::destroy($id);
        Session::flash('ms', 'The category link was successfuly removed');
        return redirect('cms/category');
    }

}
