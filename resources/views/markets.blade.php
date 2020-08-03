<!-- resources/views/hotels.blade.php -->
@extends('index')
@section('title', 'Markets')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through markets returned from controller -->
        @foreach ($markets as $market)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('{{ $market->image }}');height:300px;background-size:cover;" class="img-fluid" alt="Farmers Market Picture"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $market->name }}</h5>
                    <small class="text-muted">{{ $market->address }}</small>
                    <p class="card-text">{{ $market->comments }}</p>
                    <a href="{{ $market->website }}" target="_blank" class="card-link">Visit Market Webpage</a>
					<br>
					<a href="/markets/view/{{ $market->id }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection