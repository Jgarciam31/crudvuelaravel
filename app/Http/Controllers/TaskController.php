<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;



class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::get();
        return $tasks;
    }

    public function create()
    {
        //mostrar formuario
    }
    public function edit($id)
    {
        $task = Task::find0rFail($id);
        //formulation
        return $task;
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $task = Task::find0rFail($id);
        stask->delete();
    }
}
