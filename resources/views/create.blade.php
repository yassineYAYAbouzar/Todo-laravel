@extends('header')

@section('contant')
   <div class="container my-5">
   <div class="w-50 mx-auto mt-5">
    <div class="container text-center">



    <form action="todo_submit ">
            <input type="text" name="name" placeholder="Enter Note Title" class='form-control mb-2'>
            <input type="text" name="discription" placeholder="Enter Note discription" class='form-control'>
            <button type="submit" class="btn btn-primary mt-3">Send Note<i class="fa fa-send"></i></button>
    </form>
    </div>
   </div>
   </div>


    @endsection
