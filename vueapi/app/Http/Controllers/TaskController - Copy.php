<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
namespace App\Http\Requests;

class TaskController extends Controller
{
    
	
    public function create(Request $request)
    {
        echo "<pre>";
		print_r($request)
		die;
		
		/*
		$task = new Task;

		$task->title = $request->title;
		$task->priority = $request->priority;
		$task->due_date = $request->due_date;
		$task->save();
		
		return response()->json([
		
			'message' =>'New Task created.',
			'task' =>$task
		
		], 200);
		
		*/
    }	
	
	
}
