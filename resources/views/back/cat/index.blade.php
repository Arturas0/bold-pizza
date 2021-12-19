@extends('layouts.app', ['title' => 'Categories list'])
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Category list</h1>
        </div>
        <div class="list-card__body">
            @foreach ($cats as $cat)
            <div class="list-card__body__flex">
                <div class="list-card__body__flex__title">
                    <span>{{$cat->title}} </span>
                </div>
                <div class="list-card__body__flex__element">
                    <div>
                        <a class="custom-btn custom-btn-dark-blue" href="{{route('cat_edit', [$cat])}}">Edit</a>
                    </div>
                    <div>
                        <form action="{{route('cat_delete', $cat)}}" method="POST">
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
