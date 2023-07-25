@extends('admin.dashboard')
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-md-8 ms-5">
            <h2 class="pt-3 text-dark">All Chefs</h2>
            <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Speciality</label>
                    <input type="text" name="speciality" class="form-control">
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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-dark p-3">Chefs List</h2>
            <table class="table">
                <thead>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Speciality</th>
                                <th scope="col">Image</th>
                                <th scope="col">edit</th>
                                <th scope="col">Delete</th>
                                <!-- <th scope="col">Handle</th> -->
                            </tr>
                        </thead>
                        @foreach($data2 as $data2)
                        <tr>
                            <th scope="col">{{$data2->id}}</th>
                            <th scope="col">{{$data2->name}}</th>
                            <th scope="col">{{$data2->speciality}}</th>
                            <th scope="col"><img src="/chefimage/{{$data2->image}}"></th>
                            <th scope="col"><a href="{{url('/updatechef',$data2->id)}}"><i class="fa-sharp fa-regular fa-pen-to-square"></i></a></th>
                            <th scope="col"><a href="{{url('/deletechef',$data2->id)}}"><i class="fa-solid fa-trash"></i></a></th>
                            <!-- <th scope="col">Handle</th> -->
                        </tr>
                        @endforeach
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

<style>
    img {
        width: 10%;
    }
</style>