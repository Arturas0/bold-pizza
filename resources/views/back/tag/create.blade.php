@extends('layouts.app')
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Create tag</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('tag_store')}}" method="POST">
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__full-title">
                        <label class="custom-field one">
                            <input type="text" name="tag_title" value="{{old('tag_title')}}" required placeholder=" " />
                            <span class="placeholder">Enter tag name</span>
                        </label>
                    </div>

                    <button type="submit" class="custom-btn custom-btn-light-black my-3">New
                        tag</button>
                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
