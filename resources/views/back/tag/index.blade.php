@extends('layouts.app')
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Tags list</h1>
        </div>
        <div class="list-card__body">
            @foreach ($tags as $tag)
            <div class="list-card__body__flex">
                <div class="list-card__body__flex__title">
                    <span>{{$tag->title}} </span>
                </div>
                <div class="list-card__body__flex__element">
                    <div>
                        <a class="custom-btn custom-btn-light-black" href="{{route('tag_edit', $tag)}}">Edit</a>
                    </div>
                    <div>
                        <form action="{{route('tag_delete', $tag)}}" method="POST">
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