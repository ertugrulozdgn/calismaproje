<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Http\Request;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;
class TaskController extends Controller
{
    public function index(){

        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }

    public function create(){

        return view('tasks.create');
    }

    public function store(Request $request){

        $validator = $request->validate([
           'baslik'=>'required',
           'icerik'=>'required'
        ]);

        Task::create($request->all());
//        $tasks = new Task();
//        $tasks->baslik = $request->input('baslik');
//        $tasks->icerik = $request->input('icerik');
//        $tasks->save();
        return redirect()->route('task.index');

    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show',compact('task'));
    }


    public function edit($id)
    {
//      return view('düzenlenecek-sayfa-burada')
        $task = Task::find($id);

        return view('tasks.edit',compact('task'));

    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
           'baslik' => 'required',
           'icerik' => 'required'
        ]);

        $task = Task::find($id);

        $task->update($request->all());
//        Task::find($id)->update($request->all());
        return redirect()->route('task.index');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
