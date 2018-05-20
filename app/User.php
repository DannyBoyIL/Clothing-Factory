<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Hash, Session;

class User extends Model {
# try and catch
    static public function verifyUser($request) {
        $valid = FALSE;
        $sql = "SELECT * FROM users u "
                . " JOIN user_roles r ON u.id = r.uid "
                . " WHERE u.email = ?";
        $user = DB::select($sql, [$request['email']]);
        
        if ($user) {

            $user = $user[0];

            if (Hash::check($request['password'], $user->password)) {

                $valid = TRUE;
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->firstName . " $user->lastName");

                if ($user->role == 3) {
                    Session::put('is_admin', TRUE);
                }

                Session::flash('ms', 'Welcome back ' . '<b>' . $user->firstName . " $user->lastName" . '</b>');
            }
        }

        return $valid;
    }
    
    static public function save_new($request) {
        $user = new self();
        $user->firstName = $request['first_name'];
        $user->email = $request['email'];
        $user->lastName = $request['last_name'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $uid = $user->id;
        $sql = "INSERT INTO user_roles VALUES($uid, 4)";
        DB::insert($sql);
        Session::flash('ms', 'Hey '. $request['first_name'] . ' ' . $request['last_name'] . '! now you have an account with us');
    }
    
}
