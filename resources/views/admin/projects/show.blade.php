@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>{{$project->title}}</h1>


                <a href="{{route("admin.projects.edit", $project->id)}}" class="btn btn-primary btn-lg mt-2" type="button"" >Edit</a>
            </div>
        </div>
    </div>
@endsection