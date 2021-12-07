@extends('layouts.app', ['title' => 'Create category'])
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Create category</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('cat_store')}}" method="POST">
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__full-title">
                        <label class="custom-field one">
                            <input type="text" name="cat_title" value="{{old('cat_title')}}" required placeholder=" " />
                            <span class="placeholder">Enter category name</span>
                        </label>
                    </div>

                    <button type="submit" class="custom-btn custom-btn-light-black my-3">New
                        category</button>
                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
