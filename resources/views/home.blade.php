<!-- resources/views/home.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Home" -->
@section('title', 'Home')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1600x900/?vegetable')">
    <div class="container">
			<h1 class="display-3">Good food from good people</h1>
			<p class="lead">Find fresh produce from local growers.</p>
			<a href="/login" class="btn btn-success btn-lg my-2">Sign Up for Access Today</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Convenient</h5>
                    <p class="card-text">Instantly connect to hundreds of farmers</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Best prices</h5>
                    <p class="card-text">Quality food at prices lower than the chain grocery stores.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy to use</h5>
                    <p class="card-text">Buy and find what you want with the click of a button</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection