@extends('admin.dashboard')
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-md-8 ms-5">
            <h2 class="pt-3 text-dark">Food Menu</h2>
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>Price</label>
                    <input type="num" name="price" class="form-control  @error('price') is-invalid @enderror">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-12">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror">
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <button type="submit" value="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection