<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlogin;

class loginController extends Controller
{
    //
    function login(Request $req){
        
        $loged_In = false;
        var_dump($req->input('user_id'));

        $login_table = userlogin::all();
        foreach ($login_table as $user) {
            if ($user['user_pass'] == $req->input('user_pass'))
            {   
                $loged_In = true;
                return var_dump($loged_In);
            }
        }
        return var_dump($loged_In);
    }
}
