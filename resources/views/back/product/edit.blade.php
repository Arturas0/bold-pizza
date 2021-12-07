@extends('layouts.app', ['title' => 'Edit product'])
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Edit product</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('product_update', $product)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__title3">
                        <label class="custom-field one">
                            <input type="text" name="product_title" value="{{$product->title}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter title</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="product_amount" value="{{$product->amount}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter amount </span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="product_price" value="{{$product->price}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter price</span>
                        </label>
                    </div>
                    <div class="list-card__body__flex__full-title mb1">
                        <label class="custom-field one">
                            <input type="text" name="product_description" value="{{$product->description}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter description</span>
                        </label>
                    </div>
                    <div class="list-card__body__flex__full-title ">
                        <label>Product info:</label>
                        <textarea id="summernote" name="product_info" >{{$product->info}}</textarea>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label for="cat_id">Select category</label>
                        <select class="form-select" name="cat_id" id="cat_id">
                            <option value="0">Without category</option>
                            @foreach ($cats as $cat)
                            <option value="{{$cat->id}}" @if($catId == $cat->id) selected @endif
                                >{{$cat->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="list-card__body__flex__photo">
                        @if ($product->photo)
                        <img src="{{$product->photo}}">
                        @else
                        <img src="{{asset('img/no-image.png')}}">
                        @endif
                        <div>
                            <input type="checkbox" name="delete_photo">
                            <label class="">
                                delete photo
                            </label>
                        </div>
                    </div>
                    <div class="list-card__body__flex__photo">
                        Select new photo: <input type="file" class="form-control" name="product_photo">
                    </div>

                    <div class="list-card__body__flex__full-title">
                        <button type="submit" class="custom-btn custom-btn-light-black my-3">Save</button>
                    </div>

                </div>
                @csrf
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#summernote').summernote();
  });
  </script>
@endsection
