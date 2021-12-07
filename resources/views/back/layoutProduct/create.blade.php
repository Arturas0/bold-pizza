@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Add product to layout</h1>
                </div>
                <div class="card-body">

                    <form action="{{route('layoutProduct_store')}}" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">

                                <select class="form-select" name="layout_product_id">
                                    <option value="0" disabled>Select Product</option>
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}" 
                                        @if(in_array($product->id, $usedProducts)) disabled @endif
                                        @if(old('layout_product_id') == $product->id) selected @endif
                                        >{{$product->title}}</option>
                                    @endforeach
                                  </select>
                            </div>

                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success mt-2">Add product</button>
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
</div>
@endsection
