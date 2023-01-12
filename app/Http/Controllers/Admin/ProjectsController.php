<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; //aumentar esto
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation;
// use Validator;
// use Ramsey\Uuid\Rfc4122\Validator;
use Illuminate\Support\Facades\Validator;

class ProjectsController extends Controller
{
    //
    public function index(){
        $projects=Project::all();
        return view('admin.portfolio.index',['projects'=>$projects]); 
    }
    public function store(Request $request){
        // dd($request->all());
        $new_project=new Project();

        $file =$request->file('featured');
        $random_name= time(); 
        $destinationPath ='images/portfolio/';
        $extension=$file->getClientOriginalExtension(); 
        $filename =$random_name.'-'.$file->getClientOriginalName(); 
        $uploadSuccess=$request->file('featured')->move($destinationPath,$filename);

        $new_project->title=$request->title;
        $new_project->description=$request->description;
        $new_project->featured=$filename;
        $new_project->save();
        return redirect()->route('admin.portfolio.index');
    }
    public function edit($projectId){
        $project=Project::find($projectId);
        return view('admin.portfolio.edit',['project'=>$project]); 
    }
    public function update(Request $request,$projectId){
        // dd($request->all());
        $project=Project::find($projectId);
        $rules=[
            'title'=> 'required',
            'description'=>'required',
        ];
        $validator = Validator::make($request->all(), $rules);
       
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // $new_project=new Project();
        if($request->hasFile('featured'))
        {
            $file =$request->file('featured');
            $random_name= time(); 
            $destinationPath ='images/portfolio/';
            $extension=$file->getClientOriginalExtension(); 
            $filename =$random_name.'-'.$file->getClientOriginalName(); 
            $uploadSuccess=$request->file('featured')->move($destinationPath,$filename);
            $project->featured=$filename;
        }
        $project->title=$request->title;
        $project->description=$request->description;
      
        $project->save();
        return redirect()->route('admin.portfolio.index');
    }
    public function delete(Request $request,$projectId){
        // dd("estamos en delete");
        $project=Project::find($projectId);
        $project->delete();
        return redirect()->back();
    }
    public function post($projectId){
        // dd("estamos en delete");
        $post=Project::find($projectId);
        return view('post',['post'=>$post]);
    }
}
