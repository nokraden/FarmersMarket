<!-- resources/views/dashboard/orderCreate.blade.php -->
@extends('index')
@section('title', 'Create Order')
@section('content')

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2>{{ $marketInfo->name }} - <small class="text-muted">{{ $marketInfo->address }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Order quality produce!</p>

                @foreach($marketInfo->products as $option)
                
                <form action="{{ route('product.AddToCart') }}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-xs-18 col-sm-6 col-md-3">
                            <div class="thumbnail">
                            <img src="{{ $option->image }}" width="250" height="150">
                                <div class="caption">
                                    <p>{{ $option->name }}</p>
                                    <p>Available: {{ $option->quantity }}</p>
                                    <p>Amount to buy: <input class="form-control" name="quantity" value="{{ $option->quantity }}"></p>
                                    <p><strong>Price: </strong>${{ $option->price }}</p>
                                    <input type="hidden" name="user_id" value="{{ $option->user_id }}" />
                                    <input type="hidden" name="event_id" value="{{ $marketInfo->id }}" />
                                    <input type="hidden" name="product_id" value="{{ $option->id }}" />
                                    <input type="hidden" name="price" value="{{ $option->price }}" />
                                    <input type="hidden" name="image" value="{{ $option->image }}" />
                                    <input type="hidden" name="name" value="{{ $option->name }}" />
                                    <button type="submit" class="btn btn-lg btn-primary">Add to Cart</button>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                @endforeach
                
        </div>
    </div>
</div>
@endsection