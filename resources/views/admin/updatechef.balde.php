@extends('admin.dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 ms-5">
            <h2 class="pt-3 text-dark">Update chef</h2>
            <form class="{{url('/updatefoodchef',$data2->id)}}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$data2->name}}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Speciality</label>
                    <input type="text" name="speciality" value="{{$data2->speciality}}" class="form-control">
                </div>
                <div class="col-12">
                    <label>Old Image</label>
                    <img src="/chefimage/{{$data2->image}}">
                </div>
                <div class="col-12">
                    <label>Image</label>
                    <input type="file" name="image" value="{{$data2->image}}" class="form-control">
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