@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Create extra</h1>
                </div>
                <div class="card-body">

                    <form action="{{route('extra_store')}}" method="POST" enctype="multipart/form-data">
<div class="row justify-content-center">
    <div class="col-6 form-group">
        <label for="extra_title">Extra title</label>
        <input type="text" name="extra_title" id="extra_title" value="{{old('extra_title')}}">
    </div>
    <div class="col-6 form-group">
        <label for="extra_price_s">Extra price for small</label>
        <input type="text" name="extra_price_s" id="extra_price_s" value="{{old('extra_price_s')}}">
    </div>
    <div class="col-6 form-group">
        <label for="extra_price_m">Extra price for medium</label>
        <input type="text" name="extra_price_m" id="extra_price_m" value="{{old('extra_price_m')}}">
    </div>
    <div class="col-6 form-group">
        <label for="extra_price_l">Extra price for large</label>
        <input type="text" name="extra_price_l" id="extra_price_l" value="{{old('extra_price_l')}}">
    </div>

    <div class="col-12 form-group">
        Photo: <input type="file" class="form-control" name="extra_photo">
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-success mt-2">New extra</button>
    @csrf
</div>
</form>
</div>
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
            <h1>Create extra</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('extra_store')}}" method="POST" enctype="multipart/form-data">
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__title3">
                        <label class="custom-field one">
                            <input type="text" name="extra_title" value="{{old('extra_title')}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter title</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="extra_price_s" value="{{old('extra_price_s')}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter small price</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="extra_price_m" value="{{old('extra_price_m')}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter medium price</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="extra_price_l" value="{{old('extra_price_l')}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter large price</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__full-title">
                        Photo: <input type="file" class="form-control" name="extra_photo">
                    </div>

                    <div class="list-card__body__flex__full-title">
                        <button type="submit" class="custom-btn custom-btn-light-black my-3">New
                            extra</button>
                    </div>
                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
