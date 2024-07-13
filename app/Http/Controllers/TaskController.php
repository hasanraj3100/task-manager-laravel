<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    //

    public function index() {
        $tasks = task::all() 
        ->sort(function ($task1, $task2) {
            return $task1->finished <=> $task2->finished;
        });
        
        
        return view('welcome', ['tasks'=>$tasks]);
    }

    public function addTask() { 
        return view('addtask');
    }


    public function saveTask(Request $request) {
        
        $task = new Task([
            'title' => $request->title,
            'desc' => $request->desc,
            'priority' => $request->priority,
            'tag' => $request->tag,
            'date' => $request->date,
        ]);
        
        $task->save(); 

        return  redirect(route('task.index'));
    }

    public function complete(Request $request) {
        $task = task::find($request->id); 
        $task->finished = 1; 
        $task->save();

        return redirect(route('task.index')); 
    }

    public function delete(task $task) {
        $task->delete(); 

        return redirect(route('task.index')); 
    }
}
