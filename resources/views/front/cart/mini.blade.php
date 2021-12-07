@if(!isset($pageData->hideMiniCart))
<ul class="list-group-mini-cart">
    @forelse ($pageData->cart as $cartProduct)
    <li>
        <div class="mini-cart-product">
            <img src="{{$cartProduct->photo}}" alt="">
            <h5>{{$cartProduct->title}}</h5>

            <form action="{{route('cart_remove', $cartProduct)}}" method="POST">
                <h6>{{$cartProduct->price}} EUR X {{$cartProduct->count}}</h6>
                <button type="submit">
                    <svg class="rotate">
                        <use xlink:href="#removeProduct"></use>
                    </svg>
                </button>
                @csrf
            </form>
        </div>
    </li>
    
    @empty
    <li class="mini-cart-product">
        <h5>Cart is empty</h5>
       
    </li>
    @endforelse
    <div class="mini-cart-total">Total: {{$pageData->cartTotal}} EUR</div>
    <div class="mini-cart-total"><h6><a href="{{route('cart_view')}}">View cart</a></h6></div>
    <div><hr></div>
</ul>
@endif
