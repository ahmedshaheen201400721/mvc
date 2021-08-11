<?php
namespace App\Controller;

use App\Models\Task;
use Illuminate\Route\Request;

class TaskController{
    
    public function index()
    {
        $tasks=Task::all();
        return  view('index',compact('tasks'));
    }

    public function create()
    {
        return  view('create');
    }

    public function store()
    {
        $request=new Request;
        $tasks=Task::create(['description'=>$request->description,'iscompleted'=>0]);
        redirect("/");
    }

    public function contact()
    {
        return  view('contact');
    }

    public function about()
    {
        return  view('about');
    }
}