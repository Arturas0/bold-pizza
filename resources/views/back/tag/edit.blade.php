@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Edit tag</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('tag_update', $tag) }}" method="POST">
                        <div class="row">
                            <div class="col-4 form-group">
                                title:<input type="text" class="form-control" name="tag_title" value="{{$tag->title}}">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">Edit Tag</button>
                            </div>
                        </div>
                        @method('PUT')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Edit tag</h1>
        </div>
        <div class="list-card__body">
            <form action="{{ route('tag_update', $tag) }}" method="POST">
                @method('PUT')
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__full-title">
                        <label class="custom-field one">
                            <input type="text" name="tag_title" value="{{$tag->title}}" required placeholder=" " />
                            <span class="placeholder">Enter tag name</span>
                        </label>
                    </div>
                    <button type="submit" class="custom-btn custom-btn-light-black my-3">Save
                    </button>
                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
