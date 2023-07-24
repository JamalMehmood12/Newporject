@extends('admin.dashboard')
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-md-8 ms-5">
            <h2 class="pt-3 text-dark">About</h2>
            <form action="{{url('/uploadaboutfood')}}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-12">
                    <label>Description</label>
                    <textarea name="description" id="" cols="100%" rows="10"></textarea> 
                </div>
                <div class="col-12">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
               
                <div class="col-12">
                    <button type="submit" value="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection