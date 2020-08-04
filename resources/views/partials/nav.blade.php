<nav class="navbar navbar-expand navbar-dark bg-primary">     
    <div class="navbar-nav w-100">
        <a class="navbar-brand text-color" href="/">Farmers Markets App</a>
        <a class="nav-item nav-link" href="/markets">Buy Produce</a>
    </div>

    <div class="navbar-nav mr-auto" w-100>
        @if(session('cart'))
            <?php $total = 0 ?>
            <?php $quantity = 0 ?>
            @foreach((array) session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <?php $quantity += $details['quantity'] ?>
            @endforeach
            <a class="nav-item nav-link" href="/cart">View Cart (Items: {{ $quantity }} Total: ${{ number_format($total, 2) }})</a>
        @endif
    </div>
</nav>