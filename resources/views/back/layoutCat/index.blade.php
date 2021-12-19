@extends('layouts.app', ['title' => 'Category layout'])
@section('content')

<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Category list layout</h1>
        </div>
        <div class="list-card__body">
            @foreach ($layoutCats as $layoutCat)
            <div class="list-card__body__flex">
                <div class="list-card__body__flex__title">
                    <span>{{$layoutCat->getCatName->title}} </span>
                </div>
                <div class="list-card__body__flex__element">
                    <div class="list-card__body__flex__element__arrows">
                            <form method="POST" action="{{route('layoutCat_up', $layoutCat)}}">
                                @csrf
                                <button type="submit">
                                    <svg>
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button>
                            </form>

                            <form method="POST" action="{{route('layoutCat_down', $layoutCat)}}">
                                @csrf
                                <button>
                                    <svg class="rotate">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button type="submit">
                            </form>
                    </div>
                    <div>
                        <form action="{{route('layoutCat_delete', $layoutCat)}}" method="POST">
                            @method('delete')
                            <button class="custom-btn custom-btn-deepRed" type="submit">Remove</button>
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
@include('layouts.svg')
@endsection
