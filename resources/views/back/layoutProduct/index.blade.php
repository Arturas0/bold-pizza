@extends('layouts.app')
@section('content')
<div class="list-container">

    <div>
        <ul class="list-group m-3">
           
            @foreach ($cats as $cat)
            <li class="list-group-item">
                <a class="links-list" href="{{route('layoutProduct_index', $cat->id)}}"> {{$cat->title}}</a>
            </li>
            @endforeach
        </ul>

        <div class="list-card">
            <div>
                <span>{{$header}}</span>
            </div>
            <div class="list-card__header">
                <h1>Products list</h1>
                
            </div>
            <div class="list-card__body">
                @forelse ($layoutProducts as $layoutProduct)
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__title">
                        <span>{{$layoutProduct->getProduct->title}} </span>
                    </div>

                    <div class="list__photo">
                        @if ($layoutProduct->getProduct->photo)
                        <img style="width:250px;" src="{{$layoutProduct->getProduct->photo}}">
                        @else
                        <img src="{{asset('img/no-image.png')}}">
                        @endif
                    </div>

                    <div class="list-card__body__flex__element">
                        <div>
                            <div class="index-list__buttons">
                                <form method="POST" action="{{route('layoutProduct_up', [$layoutProduct, $catNow])}}">
                                    @csrf
                                    <button type="submit">
                                        <svg>
                                            <use xlink:href="#arrow"></use>
                                        </svg>
                                    </button>
                                </form>

                                <form method="POST" action="{{route('layoutProduct_down', [$layoutProduct, $catNow])}}">
                                    @csrf
                                    <button>
                                        <svg class="rotate">
                                            <use xlink:href="#arrow"></use>
                                        </svg>
                                    </button type="submit">
                                </form>
                            </div>
                        </div>
                        <div>
                            <form action="{{route('layoutProduct_delete', $layoutProduct)}}" method="POST">
                                @method('delete')
                                <button class="custom-btn custom-btn-deepRed" type="submit">Remove</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
              
                @empty
                <div>
                    <span>{{$message}}</span>
                </div>
                @endforelse
            </div>
            
        </div>
    </div>
</div>
@include('layouts.svg')
@endsection
