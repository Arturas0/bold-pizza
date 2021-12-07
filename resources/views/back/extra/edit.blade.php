@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Edit extra</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('extra_update', $extra) }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-4 form-group">
                                title:<input type="text" class="form-control" name="extra_title" value="{{$extra->title}}">
                            </div>

                            <div class="col-4 form-group">
                                Price for small:<input type="text" class="form-control" name="extra_price_s" value="{{$extra->price_s}}">
                            </div>
                            <div class="col-4 form-group">
                                Price for medium:<input type="text" class="form-control" name="extra_price_m" value="{{$extra->price_m}}">
                            </div>
                            <div class="col-4 form-group">
                                Price for large:<input type="text" class="form-control" name="extra_price_l" value="{{$extra->price_l}}">
                            </div>
                            
                            <div class="col-3 enter-image">
                                @if ($extra->photo)
                                <img src="{{$extra->photo}}">
                                @else
                                <img src="{{asset('img/no-image.png')}}">
                                @endif
                            </div>
                            <div class="col-8 form-group">
                                photo: <input type="file" class="form-control" name="extra_photo">
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" name="delete_photo">
                                    <label class="form-check-label">
                                        delete photo
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">Edit Extra</button>
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
            <h1>Create extra</h1>
        </div>
        <div class="list-card__body">
            <form action="{{route('extra_update', $extra)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
                <div class="list-card__body__flex">
                    <div class="list-card__body__flex__title3">
                        <label class="custom-field one">
                            <input type="text" name="extra_title" value="{{$extra->title}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter title</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="extra_price_s" value="{{$extra->price_s}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter small price </span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="extra_price_m" value="{{$extra->price_m}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter medium price</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__title2">
                        <label class="custom-field one">
                            <input type="text" name="extra_price_l" value="{{$extra->price_l}}" required
                                placeholder=" " />
                            <span class="placeholder">Enter large price</span>
                        </label>
                    </div>

                    <div class="list-card__body__flex__photo">
                        @if ($extra->photo)
                        <img src="{{$extra->photo}}">
                        @else
                        <img src="{{asset('img/no-image.png')}}">
                        @endif

                        <div class="">
                            <input type="checkbox" class="" name="delete_photo">
                            <label class="">
                                delete photo
                            </label>
                        </div>
                    </div>

                    <div class="list-card__body__flex__photo">
                        Select new photo: <input type="file" class="form-control" name="extra_photo">
                    </div>

                    <div class="list-card__body__flex__full-title">
                        <button type="submit" class="custom-btn custom-btn-light-black my-3">Save</button>
                    </div>

                </div>
        </div>
        @csrf
        </form>
    </div>
</div>
@endsection
