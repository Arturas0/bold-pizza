@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Add cat to layout</h1>
                </div>
                <div class="card-body">

                    <form action="{{route('layoutCat_store')}}" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">

                                <select class="form-select" name="layout_cat_id">
                                    <option value="0" disabled>Select Cat</option>
                                    @foreach ($cats as $cat)
                                    <option value="{{$cat->id}}" 
                                        @if(in_array($cat->id, $usedCats)) disabled @endif
                                        @if(old('layout_cat_id') == $cat->id) selected @endif
                                        >{{$cat->title}}</option>
                                    @endforeach
                                  </select>
                            </div>

                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success mt-2">Add cat</button>
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
