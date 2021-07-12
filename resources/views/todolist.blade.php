@extends('header')

@section('contant')
    <h2 class="text-center my-5 text-black">Our Todo</h2>
            <table class="table table-dark table-striped w-75 m-auto">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>discripton</td>
                    <td>Created At</td>
                    <td>-----Actions-----</td>
                </tr>

                @foreach($TodoArr as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->name}}</td>
                    <td>{{$todo->discription}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td><a href="delete/{{$todo->id}} " class="btn btn-danger"><i class="fas fas-add"></i>Delete</a>  <a href="edit/{{$todo->id}}" class="btn btn-success">Edit</a> </td>
                </tr>


                @endforeach

            </table>

            @endsection
