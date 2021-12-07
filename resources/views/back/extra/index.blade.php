@extends('layouts.app')
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Extras list</h1>
        </div>
        <div class="list-card__body">
            @foreach ($extras as $extra)
            <div class="grid-container">

                <div class="list__title">
                    <p> <b>Extra:</b> {{$extra->title}}</p>
                </div>

                <div class="list__photo">
                    @if ($extra->photo)
                    <img src="{{$extra->photo}}">
                    @else
                    <img src="{{asset('img/no-image.png')}}">
                    @endif
                </div>

                <div class="list__group">
                    <span><b>Price small:</b> {{$extra->price_s}} EUR</span>

                    <div class="list__amount">
                        <span><b>Price medium:</b> {{$extra->price_m}} EUR</span>
                    </div>

                    <div class="list__description">
                        <span><b>Price large:</b> {{$extra->price_l}} EUR</span>
                    </div>
                </div>

                <div class="list-card__body__flex__element">
                    <div>
                        <a class="custom-btn custom-btn-light-black" href="{{route('extra_edit', $extra)}}">Edit</a>
                    </div>
                    <div>
                        <form action="{{route('extra_delete', $extra)}}" method="POST">
                            <button class="custom-btn custom-btn-deepRed" type="submit">Delete</button>
                            @method('delete')
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m0">
        @endforeach
    </div>
</div>
@endsection