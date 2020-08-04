@extends('index')
@section('title', 'Cart')
@section('content')
 
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
 
        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)    
                <?php $total += $details['price'] * $details['quantity'] ?>         
                <tr>
                    <form action="{{ route('product.AddToCart') }}" method="GET">
                        <input type="hidden" name="user_id" value="{{ $details['user_id'] }}" />
                        <input type="hidden" name="product_id" value="{{ $details['product_id'] }}" />
                        <input type="hidden" name="event_id" value="{{ $details['event_id'] }}" />
                        <input type="hidden" name="price" value="{{ $details['price'] }}" />
                        <input type="hidden" name="image" value="{{ $details['image'] }}" />
                        <input type="hidden" name="name" value="{{ $details['name'] }}" />
                        <input type="hidden" name="state" value="update" />
                            <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ number_format($details['price'], 2) }}</td>
                        <td data-th="Quantity">
                            <input class="form-control" type="number" name="quantity" value="{{ $details['quantity'] }}">
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                        <td class="actions" data-th="">
                            <button type="submit" class="btn btn-lg btn-primary">Update Cart Item</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        @endif
 
        </tbody>
        <tfoot>
        <tr>
            <td><a href="/markets" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td><a href="/submitOrder" class="btn btn-warning"><i class="fa fa-angle-left"></i> Submit Order</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ number_format($total, 2)     }}</strong></td>
        </tr>
        </tfoot>
@endsection
