<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'task_name' => 'required|max:100',
        ];
        $messages = ['required' => '必須項目です', 'max' => '100文字以下にしてください。'];
        Validator::make($request->all(), $rules, $messages)->validate();
        $task = new Task;
        $task->name = $request->input('task_name');
        $task->save();
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $inputs=$request->validate ([
            'name'=>'request|max:100'
        ]);
        $messages = ['required' => '必須項目です', 'max' => '100文字以下にしてください。'];
        Validator::make($request->all(),$inputs,$messages)->validate();

        $task =Task::find($id);
        $task->name = $request->input('task_name');
        $task->save();
        return redirect('/tasks');
        // return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect('/tasks');
    }
}
