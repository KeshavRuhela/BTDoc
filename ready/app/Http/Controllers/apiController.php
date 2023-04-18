<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlogin;

use Illuminate\Support\Facades\DB;

class apiController extends Controller
{
    //

    function check_Login_Id_Pass(Request $request){
        // $arr = ["message"=>"true"];

        // print_r($request->all());
        // print_r($request->collect());
        $input_value = $request->input();
        $user = userlogin::all();
        foreach ($user as $value) {
            if ($input_value['email'] == $value['user_email'])
                if ($input_value['password'] == $value['user_pass']) 
                    return response()->json(["data"=>$input_value,"message"=>"login Success","login"=>"true"]);
                else 
                    return response()->json(["message"=>"Password is incorrect", "login"=>"false"]);
            else 
                return response()->json(["message"=>"Email-ID is incorrect", "login"=>"false"]);
        }


    }

    function check_registration_Data(Request $request){
        $user = userlogin::all();
        
        $user_id = 1000 + count($user)+1;
        // $name = $request->input('user_name');
        // $branch = $request->input('user_branch');
        // $user_eamil = $request->input('user_eamil');
        // $user_pass = $request->input('user_pass');
        // $user_mobile = $request->input('user_mobile');
        // $year = $request->input('year');
        // $college_id = $request->input('college_id');
        // $dob = $request->input('dob');
        // $gender = $request->input('gender');
        // $skills = $request->input('skills');
        // $hobby = $request->input('hobby');
        // $social_links = $request->input('social_links');
        // $created_time = time();

        $data = $request->input();

        $data['user_id']=$user_id;
        $data += ['created_at'=>date("Y/m/d h:i:s")];
        if (DB::table('userlogins')->insert($data)){
            return response()->json(["message"=>"inserted Sucessful"]);
        }
        else{
            return response()->json(["message"=>"Some Error"]);
        }
    }

}





// insert into `userlogins` (`branch`, `college_id`, `created_time`, `dob`, `gender`, `hobby`, `name`, `skills`, `social_links`, `user_email`, `user_id`, `user_mobile`, `user_pass`, `year`) values (AIML, 2220801, 1681762111, 2003-03-12, M, Singing, Adity Nautiyal, JavaScript, '', adity@gmail.com, 10003, 0123456789, adity1234, 2))
// {
//     "user_id":"",
//     "user_name":"Adity nautiyal",
//     "user_branch":"AIML",
//     "user_email" :"adity@gmail.com",
//     "user_pass" :"1234",
//     "user_mobile" :"1234",
//     "year" :"2",
//     "college_id" :"2220801",
//     "dob" :"2231-03-10",
//     "gender" :"M",
//     "skills" :"js",
//     "hobby" :"Singing",
//     "social_links" :""
//     }