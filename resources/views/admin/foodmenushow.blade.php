@extends('admin.dashboard')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-dark p-3">Show Menu List</h2>
      <table class="table">
        <thead>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">edit</th>
                <th scope="col">Delete</th>
                <!-- <th scope="col">Handle</th> -->
              </tr>
            </thead>
            @foreach($data as $data)
            <tr>
              <th scope="col">{{$data->id}}</th>
              <th scope="col">{{$data->title}}</th>
              <th scope="col">{{$data->description}}</th>
              <th scope="col">${{$data->price}}</th>
              <th scope="col"><img src="/foodimage/{{$data->image}}"></th>
              <th scope="col"><a href="{{url('/updatemenu',$data->id)}}">edit</a></th>
              <th scope="col"><a href="{{url('/deletemenu',$data->id)}}">Delete</a></th>
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
    width: 50%;
}
</style>