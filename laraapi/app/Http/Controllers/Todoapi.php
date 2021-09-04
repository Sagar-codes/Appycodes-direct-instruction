<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;

class Todoapi extends Controller
{
    //
    function todoList()
    {
        $todos = Todo::all();
        return $todos;
    }

    function todoDetails($id)
    {
        $todo = Todo::findOrFail($id);
        if ($todo)
        {
            return $todo;
        }
        else
        {
            return json_encode(['result'=>'Todo Not present or You have entered wrong id ','status'=>false]);
        }
        
    }

    function addTodo(Request $req)
    {
        $todos = new Todo(); // create a new todo instance in db
        $todos->title=$req->title; // todo->title equal to the title which is comming from the request
        $todos->desc=$req->desc; // todo->desc equal to the desc which is comming from the request
        $result = $todos->save(); // save the data which is in $todo
        if($result) // if $result is true or the data is inserted
        {
            return json_encode(['result'=>'The data has been saved ',$todos,'status'=>true]);
        }
        else
        {
            return json_encode(['result'=>'Server Error','status'=>false]);
        }

    }

    function update(Request $req)
    {
        $prevTodo = Todo::findOrFail($req->id); //This is to store the data of the id comming from the request
        $todos = Todo::findOrFail($req->id); // find the data of id is present in the database or not
        $todos->title=$req->title; // set the title which is comming from request
        $todos->desc=$req->desc; // set the desc which is comming from request
        $result = $todos->save(); // save the title and desc in db of same id

        if($result) // if the result is true
        {
            return ['result'=>$prevTodo,'The Data has been Updated',$todos];
        }
        else
        {
            return json_encode(['result'=>'Server Error','status'=>false]);
        }

    }

    function destroy($id)
    {
        $todos = Todo::findOrFail($id)->delete();
        return ['result'=>'The Data has been Deleted',$todos]; 
    }

    function todoByName($title)
    {
        return Todo::where('title','like','%'.$title.'%')->get();
        // return Todo::where('title',$title)->get();
    }

}
