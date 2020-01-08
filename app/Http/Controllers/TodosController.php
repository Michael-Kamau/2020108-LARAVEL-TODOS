<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TodosController extends Controller
{
    public function index(){
        $tasks = Task::all();
        $title='Welcome To Laravel';
        $data=array(
            'title'=>'My todos',
            'tasks'=>$tasks
        );
        return view('pages.index')->with($data);
    }

    public function todo(){
        return view('pages.todo');
    }
}
