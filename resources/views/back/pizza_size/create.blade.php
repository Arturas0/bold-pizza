@extends('layouts.app')
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Create pizza size</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('pizza_size_store')}}" method="POST">
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__title">
                        <label class="custom-field one">
                            <input type="text" name="pizza_size_title" value="{{old('pizza_size_title')}}" required placeholder=" " />
                            <span class="placeholder">Enter title</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title3">
                        <label class="custom-field one">
                            <input type="text" name="pizza_size_size" value="{{old('pizza_size_size')}}" required placeholder=" " />
                            <span class="placeholder">Enter size </span>
                        </label>
                    </div>

                    <button type="submit" class="custom-btn custom-btn-light-black my-3">New
                        pizza size</button>
                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
