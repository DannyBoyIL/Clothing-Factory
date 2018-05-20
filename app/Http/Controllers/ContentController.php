<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Content;
use Session;

class ContentController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index() {
        self::$data['content'] = Content::all()->toArray();
        return view('cms.content.content', self::$data);
    }

    public function create() {
        self::$data['summernote'] = TRUE;
        return view('cms.forms.add_content', self::$data);
    }

    public function store(ContentRequest $request) {
        Content::save_new($request);
        Session::flash('ms', 'A new content was successfuly added to site');
        return redirect('cms/content');
    }

    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.forms.delete_content', self::$data);
    }

    public function edit($id) {
        self::$data['summernote'] = TRUE;
        self::$data['content'] = Content::find($id)->toArray();
        return view('cms.forms.edit_content', self::$data);
    }
    
    public function update(ContentRequest $request, $id) {
        Content::update_item($request, $id);
        Session::flash('ms', 'The content was successfuly updated');
        return redirect('cms/content'); 
    }

    public function destroy($id) {
        Content::destroy($id);
        Session::flash('ms', 'The article content was successfuly removed');
        return redirect('cms/content'); 
    }

}
