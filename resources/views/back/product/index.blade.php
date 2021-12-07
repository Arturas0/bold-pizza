@extends('layouts.app', ['title' =>'Products'])
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Products list</h1>
        </div>
        <div class="list-card__body">
            @foreach ($products as $product)
            <div class="grid-container">

                <div class="list__title">
                    <p> <b>Product:</b> {{$product->title}}</p>
                </div>

                <div class="list__photo">
                    @if ($product->photo)
                    <img src="{{$product->photo}}">
                    @else
                    <img src="{{asset('img/no-image.png')}}">
                    @endif
                </div>

                <div class="list__group">
                    <span><b>Price:</b> {{$product->price}} EUR</span>

                    <div class="list__amount">
                        <span><b>Amount:</b> {{$product->amount}}</span>
                    </div>

                    <div class="list__description">
                        <span><b>Description:</b> {{$product->description}}</span>
                    </div>

                    <div class="list__info">
                        <span><b>Info:</b> {!!$product->info!!}</span>
                    </div>
                    @if ($product->cats->first())
                    <div>
                        <span>{{$product->cats->first()->title}}</span>
                    </div>
                    @endif
                </div>

                <div class="list-card__body__flex__element">
                    <div>
                        <a class="custom-btn custom-btn-light-black" href="{{route('product_edit', $product)}}">Edit</a>
                    </div>
                    <div>
                        <form action="{{route('product_delete', $product)}}" method="POST">
                            <button class="custom-btn custom-btn-deepRed" type="submit">Delete</button>
                            @method('delete')
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <hr class="m0">
            @endforeach
        </div>
    </div>
</div>
@endsection
