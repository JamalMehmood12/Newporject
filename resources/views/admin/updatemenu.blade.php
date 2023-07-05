@extends('admin.dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 ms-5">
            <h2 class="pt-3 text-dark">Food Menu</h2>
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Price</label>
                    <input type="num" name="price" value="{{$data->price}}" class="form-control">
                </div>
                <div class="col-12">
                    <label>Old Image</label>
                    <img src="/foodimage/{{$data->image}}">
                </div>
                <div class="col-12">
                    <label>Image</label>
                    <input type="file" name="image" value="{{$data->image}}" class="form-control">
                </div>
                <div class="col-12">
                    <label>Description</label>
                    <input type="text" name="description" value="{{$data->description}}" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" value="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection