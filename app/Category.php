<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Category extends Model {

    public function products() {
        return $this->hasMany('App\Product');
    }

    static public function save_new($request) {
        $image = 'defualt.png';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image);
        }
        $category = new self();
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->image = $image;
        $category->url = $request['url'];
        $category->save();
        Session::flash('sm', 'A new category was successfuly added to the site');
    }

    static public function update_item($request, $id) {
        $image = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image);
        }
        $category = self::find($id);
        $category->title = $request['title'];
        $category->article = $request['article'];
        if ($image) {
            $category->image = $image;
        }
        $category->url = $request['url'];
        $category->save();
        Session::flash('sm', 'The category was successfuly updated');
    }

}
