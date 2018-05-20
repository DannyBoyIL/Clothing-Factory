<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model {
    
    public function contents(){
        return $this->hasMany('App\Content');
    }

    static public function save_new($request) {
        $menu = new self();
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm', 'A new menu link was successfuly added to the site');
    }

    static public function update_item($request, $id){
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm', 'The menu link was successfuly updated');
    }
}
