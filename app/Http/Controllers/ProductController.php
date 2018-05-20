<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Category;
use App\Product;
use Session;

class ProductController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index() {
        self::$data['cards'] = TRUE;
        self::$data['product'] = Product::all()->toArray(); // LIMIT || OR unique || category_id - לחפש דוקומנטציה
        return view('cms.content.product', self::$data);
    }

    public function create() {
        self::$data['summernote'] = TRUE;
        self::$data['category'] = Category::all()->toArray();
        return view('cms.forms.add_product', self::$data);
    }

    public function store(ProductRequest $request) {
        Product::save_new($request);
        Session::flash('ms', 'A new product was successfuly added to site');
        return redirect('cms/product');
    }

    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.forms.delete_product', self::$data);
    }

    public function edit($id) {
        self::$data['summernote'] = TRUE;
        self::$data['category'] = Category::all()->toArray();
        self::$data['product'] = Product::find($id)->toArray();
        return view('cms.forms.edit_product', self::$data);
    }

    public function update(ProductRequest $request, $id) {
        Product::update_item($request, $id);
        Session::flash('ms', 'The product was successfuly updated');
        return redirect('cms/product');
    }

    public function destroy($id) {
        Product::destroy($id);
        Session::flash('ms', 'The product was successfuly removed');
        return redirect('cms/content');
    }

}
