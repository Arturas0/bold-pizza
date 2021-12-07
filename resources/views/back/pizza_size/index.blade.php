@extends('layouts.app')
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Pizza sizes</h1>
        </div>
        <div class="list-card__body">
            @foreach ($pizzaSizes as $pizzaSize)
            <div class="list-card__body__flex">
                <div class="list-card__body__flex__title">
                    <p> <b>Size title:</b> {{$pizzaSize->title}}</p>
                    <span><b>Size:</b> {{$pizzaSize->size}}</span>
                </div>
                <div class="list-card__body__flex__element">
                    <div>
                        <a class="custom-btn custom-btn-light-black"
                            href="{{route('pizza_size_edit', $pizzaSize)}}">Edit</a>
                    </div>
                    <div>
                        <form action="{{route('pizza_size_delete', $pizzaSize)}}" method="POST">
                            <button class="custom-btn custom-btn-deepRed" type="submit">Delete</button>
                            @method('delete')
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
