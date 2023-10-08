@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 mt-5 rounded-3 text-light">
    <div class="container py-5 px-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center justify-content-center gap-4">
                <h1 class="display-5 fw-bold">
                    Welcome to my Portfolio
                </h1>
        
                <p class="fs-5 text-center lh-base">Hello, I am Simone Filograna, a passionate web developer who has been immersed in the world of IT since the age of 15. Thanks to my curiosity, I have had the opportunity to delve into various programming languages, always striving to learn and preferring logic over memorization. There is no memory that can surpass a well-structured reasoning.</p>
                <a href="{{route("admin.projects.index")}}" class="btn btn-primary btn-lg" type="button">My projects</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img src="/img/right-side.svg" class="welcome-svg " alt="">             
            </div>
        </div>

    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection