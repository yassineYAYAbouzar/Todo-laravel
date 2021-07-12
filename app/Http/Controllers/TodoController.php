<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function show()
    {
        return view('todolist')->with('TodoArr', todo::all());
    }


    public function delete($id)
    {
        todo::destroy(array('id',$id));
        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function todo_submit(Request $req)
    {
        $todo = new todo;
        $todo->name = $req->input('name');
        $todo->discription = $req->input('discription');
        $todo->save();
        return redirect('/');
    }

    public function edit($id)
    {
        return view('edit')->with('TodoArr_name', todo::find($id));
    }

    public function edit_submit(Request $req, $id)
    {
        $todo = todo::find($id);
        $todo->name = $req->input('name');
        $todo->discription = $req->input('discription');
        $todo->save();
        return redirect('/');
    }
}
