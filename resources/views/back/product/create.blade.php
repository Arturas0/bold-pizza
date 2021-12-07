@extends('layouts.app', ['title' => 'Create product'])
@section('content')
<div class="list-container">
    <div class="list-card">
        <div class="list-card__header">
            <h1>Create product</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('product_store')}}" method="POST" enctype="multipart/form-data">
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__title3">
                        <label class="custom-field one">
                            <input type="text" name="product_title" value="{{old('product_title')}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter title</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="product_amount" value="{{old('product_amount')}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter amount </span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="product_price" value="{{old('product_price')}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter price</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label for="cat_id">Select category</label>
                        <select class="form-select" name="cat_id" id="cat_id">
                            <option value="0" disabled>Select Category</option>
                            @foreach ($cats as $cat)
                            <option value="{{$cat->id}}" @if(old('cat_id')==$cat->id) selected @endif
                                >{{$cat->title}}</option>
                            @endforeach
                        </select>
                    </div>

                <div class="list-card__body__flex__full-title mb1">
                    <label class="custom-field one">
                        <input type="text" name="product_description" value="{{ old('product_description')}}" required
                            placeholder=" " />
                        <span class="placeholder">Enter description</span>
                    </label>
                </div>

                <div class="list-card__body__flex__full-title "><label>Product info:</label>
                    <textarea id="summernote" name="product_info">{{old('product_info')}}</textarea>
                </div>

                <div class="list-card__body__flex__photo">
                    Photo: <input type="file" class="form-control" name="product_photo">
                </div>
                <div class="list-card__body__flex__full-title">
                    <button type="submit" class="custom-btn custom-btn-light-black my-3">New
                        product</button>
                </div>
        </div>
    </div>
    @csrf
    </form>
</div>
</div>
<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });

</script>
@endsection
