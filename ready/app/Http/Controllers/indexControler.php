<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class indexControler extends Controller
{
    
    
    function show_view(){
        $branch_data = Http::get("http://localhost/BTDoc/APIs/branches.php");
        return view("index",['list'=>$branch_data]);
    }
}
