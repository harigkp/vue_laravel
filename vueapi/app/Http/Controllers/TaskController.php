<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
//
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
	 
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

	/*  	
				
		    $validatedData = $request->validate([
				'title' => 'required',
				'priority' => 'required',
				'due_date' => 'required',
			]);
			
			echo "<pre>";
			print_r($validatedData);
			die;
			
			*/
		
		$task = new Task;

		$task->title = $request[0];
		$task->priority = $request[1];
		$task->due_date = $request[2];
		$task->save();
		
		return response()->json([
		
			'message' =>'New Task created.',
			'task' =>$task
		
		], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
