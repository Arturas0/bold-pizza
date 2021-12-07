@extends('layouts.front_app')
@section('content')

@include('front.header')

<main role="main">
    {{-- @include('front.call_to_action') --}}
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @forelse ($pageData->layout as $catWithProducts)
                {{-- Cat start --}}
                <div class="col-md-12">
                    <h2><span class="badge bg-secondary">{{$catWithProducts->cat->title}}</span></h2>
                </div>
                {{-- Cat end --}}

                {{-- Product start --}}
                @forelse ($catWithProducts->products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div>
                            <img class="card-img-top" src="{{$product->photo}}" alt="{{$product->title}}">
                        </div>

                        <div class="card-body">
                            <h3>{{$product->title}}</h3>
                            <p class="card-text">{{$product->description}}.</p>
                          
                                <div class="d-flex justify-content-between align-items-center">
                                   
                                        <i class="">{{$product->price}} EUR</i>
                                   
                                    
                                        <form action="{{route('cart_add', $product)}}" method="POST">
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Add to
                                                cart</button>
                                            @csrf
                                        </form>
                                    
                                </div>
                           
                        </div>
                    </div>
                </div>

                @empty
                <h4 class="m-5">This categoty has no products</h4>
                @endforelse


                @empty
                <h4 class="m-5">Products layout is empty</h4>
                @endforelse
                {{-- Product end --}}
            </div>
        </div>
    </div>

</main>

@include('front.footer')
@endsection
