@extends('layouts.app')
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Edit pizza size</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('pizza_size_update', $pizzaSize) }}" method="POST">
                @method('PUT')
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__title">
                        <label class="custom-field one">
                            <input type="text" name="pizza_size_title" value="{{$pizzaSize->title}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter title</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title3">
                        <label class="custom-field one">
                            <input type="text" name="pizza_size_size" value="{{$pizzaSize->size}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter size </span>
                        </label>
                    </div>
                    <div class="list-card__body__flex__title">
                        <button type="submit" class="custom-btn custom-btn-light-black my-3">Save</button>
                    </div>
                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
