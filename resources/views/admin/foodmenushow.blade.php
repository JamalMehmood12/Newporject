@extends('admin.dashboard')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-dark p-3">Show Menu List</h2>
      <div class="input-group">
        <a href="{{url('/foodmenu')}}"><i class="fa-solid fa-circle-plus"></i>Add FoodMenu</a>
        <form action="{{url('/search')}}" method="get" class="ms-auto">
          @csrf
          <input type="text" name="search" />
          <input type="submit" value="search" class="btn btn-primary" />
        </form>

      </div>
      <table class="table" id="myTable" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true" data-click-to-select="true">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>

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
          <th scope="col"><a href="{{url('/updatemenu',$data->id)}}"><i class="fa-sharp fa-regular fa-pen-to-square"></i>Edit</a></th>
          <th scope="col"><a href="{{url('/deletemenu',$data->id)}}"><i class="fa-solid fa-trash"></i>Delete</a></th>
          <!-- <th scope="col">Handle</th> -->
        </tr>
        @endforeach
        </thead>
      </table>
      {{$data2->links()}}
     
    </div>
  </div>
</div>
@endsection

<style>
  img {
    width: 50%;
  }
</style>