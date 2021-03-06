@extends('layouts.app')
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Edit category</h1>
        </div>
        <div class="list-card__body">
            <form action="{{ route('cat_update', $cat) }}" method="POST">
                @method('PUT')
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__full-title">
                        <label class="custom-field one">
                            <input type="text" name="cat_title" value="{{$cat->title}}" required placeholder=" " />
                            <span class="placeholder">Enter category name</span>
                        </label>
                    </div>
                    <button type="submit" class="custom-btn custom-btn-dark-blue my-3">Save
                    </button>
                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
