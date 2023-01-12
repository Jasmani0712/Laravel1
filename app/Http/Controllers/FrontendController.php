<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class FrontendController extends Controller
{
    //
    public function index(){
       $projects= Project::all();
        return view ('blog',['projects'=>$projects]);
    }
}
