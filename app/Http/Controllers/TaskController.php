<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $datas = Task::get();
        return view('welcome',compact('datas'));
    }

    public function edit(Task $task)
    {
        return view('edit',compact('task'));
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|min:2|max:200']);

        Task::create(['name'=>$request['name']]);

        return redirect()->back()->with('message','success created');
    }

    public function delete(Task $id)
    {
        $id->delete();
        return redirect()->back()->with('message','success deleted');
    }

    public function update(Task $task,Request $request)
    {
        $validated = $request->validate(['name'=>'required|string|min:2|max:200']);
        $task['name'] = $validated['name'];
        $task->save();
        return redirect()->back()->with('message','success updated');
    }

    
}
