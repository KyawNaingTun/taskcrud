<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Events
use App\Events\TaskAssignedEvent;
//models
use App\User;
use App\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::paginate(10);
        $tasks->load('creator', 'assignee');
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignee = User::all();
        return view('task.create', compact('assignee'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'company' => 'required|max:255',
            'type' => 'required',
            'subject' => 'required',
            'priority' => 'required',
            'contact' => 'required',
            'assigned_id' => 'required',
            'due_date' => 'required',
            'due_time' => 'required',
            'reminder_date' => 'required',
            'reminder_time' => 'required',
        ]);
        $input = $request->all();

        $input['created_id'] = auth()->user()->id;
        $input['due_at'] = date('Y-m-d H:i:s', strtotime("$request->due_date $request->due_time"));
        $input['reminder_at'] = date('Y-m-d H:i:s', strtotime("$request->reminder_date $request->reminder_time"));

        // Task create
        $task = Task::create($input);
        if($task){
              session()->flash('success-message', 'Task was created!');
        }else{
              session()->flash('error-message', 'Something wrong!');
        }

        //Dispacting event
        event(new TaskAssignedEvent($task));

        //return view
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        $task->load('creator','assignee');
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $assignee = User::all();
        return view('task.edit', compact('task', 'assignee'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $request->validate([
            'company' => 'required|max:255',
            'type' => 'required',
            'subject' => 'required',
            'priority' => 'required',
            'contact' => 'required',
            'assigned_id' => 'required',
            'due_date' => 'required',
            'due_time' => 'required',
            'reminder_date' => 'required',
            'reminder_time' => 'required',
        ]);

        $input = $request->all();

        $input['created_id'] = auth()->user()->id;
        $input['due_at'] = date('Y-m-d H:i:s', strtotime("$request->due_date $request->due_time"));
        $input['reminder_at'] = date('Y-m-d H:i:s', strtotime("$request->reminder_date $request->reminder_time"));

        // Task create
        $task = Task::find($id);
        $task->update($input);

        if($task){
             session()->flash('success-message', 'Task was updated!');
        }else{
              session()->flash('error-message', 'Something wrong!');
        }

        //Dispacting event
        event(new TaskAssignedEvent($task));

        //return view
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Task::destroy($id);
        if($deleted){
            session()->flash('success-message', 'Task was deleted!');
        }else{
            session()->flash('error-message', 'Something wrong!');
        }
        
        return redirect()->route('task.index');
    }
}
