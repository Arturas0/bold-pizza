@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Cats list</h1>
                </div>
                <div class="card-body">
                    <div class="list-container">
                        @foreach ($layoutCats->chunk(3) as $chunk)
                        <div class="list-container__content">
                            @foreach ($chunk as $layoutCat)
                            <div class="col-12">
                                <div class="index-list">
                                    <div class="index-list__extra">
                                        {{$layoutCat->getCatName->title}}
</div>

<div class="index-list__buttons">

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

    <form action="{{route('cat_delete', $layoutCat)}}" class="m-2" method="post">
        <button type="submit" class="btn btn-danger">DELETE</button>
        @method('DELETE')
        @csrf
    </form>

</div>
</div>
</div>
@endforeach
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
</div> --}}

<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Cats list</h1>
        </div>
        <div class="list-card__body">
            @foreach ($layoutCats as $layoutCat)
            <div class="list-card__body__flex">
                <div class="list-card__body__flex__title">
                    <span>{{$layoutCat->getCatName->title}} </span>
                </div>
                <div class="list-card__body__flex__element">
                    <div>
                        <div class="index-list__buttons">

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
