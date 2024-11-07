<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }

    public function index(){

        $projects = Project::all();
        return view("admin.index" , compact("projects"));
    }

    public function show(string $id){
        $project = Project::findOrFail($id);
        return view("admin.show" , compact("project"));
    }

    public function store(Request $request){
        $formData = $request->all();

        $project = Project::create($formData);

        return redirect()->route("admin.index");
    }

    public function create(){
        $project = new Project();
        $types = Type::create();

        return view("admin.create" , compact("types" , "project"));
    }

}
