<header>
    <div class="collapse bg-dark" id="miniCart">
        @include('front.cart.mini')
    </div>
    <div class="collapse bg-light" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 py-2">
                    <h4 class="text-dark">Menu</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{route('front_index')}}" class="text-black">Home</a></li>
                        <li><a href="{{route('cart_view')}}" class="text-black">View Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-light shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="{{route('front_index')}}" class="navbar-brand d-flex align-items-center">
                <svg class="top-logo">
                    <use xlink:href="#logo"></use>
                </svg>
            </a>
            <div>
                <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if(!isset($pageData->hideMiniCart))
                <button class="cart navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target="#miniCart" aria-controls="miniCart" aria-expanded="false" aria-label="Toggle navigation">
                    <svg>
                        <use xlink:href="#cart"></use>
                    </svg>
                    <i><strong>{{$pageData->cartCount}}</strong></i>
                </button>
                @endif
            </div>
        </div>
    </div>
</header>
