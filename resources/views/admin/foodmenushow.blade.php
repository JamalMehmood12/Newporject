@extends('admin.dashboard')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-dark p-3">Food List</h2>
      <div class="input-group">
        <a href="{{url('/foodmenu')}}"><i class="fa-solid fa-circle-plus"></i>Add FoodMenu</a>
        <form action="{{url('/search')}}" method="get" class="ms-auto">
          @csrf
          <input type="text" name="search" placeholder="Search FoodMenu" />
          <input type="submit" value="search" class="btn btn-primary" />
        </form>

      </div>
      <!-- ... Existing code ... -->

      <table class="table" id="myTable" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true" data-click-to-select="true">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @if(!empty($data))
        @php
        $count = 1;
        @endphp
        @foreach($data as $item)
        <tr>
          <td>{{$count}}</td>
          <td>{{$item->title}}</td>
          <td>{{$item->description}}</td>
          <td>${{$item->price}}</td>
          <td><img src="/foodimage/{{$item->image}}"></td>
          <td><a href="{{url('/updatemenu', $item->id)}}"><i class="fa-sharp fa-regular fa-pen-to-square"></i></a></td>
          <td><a href="{{url('/deletemenu', $item->id)}}"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        @php
        $count++;
        @endphp
        @endforeach
        @else
        <!-- Display the "No results found" message -->
        <p>{{ $message }}</p>
        @endif
        </thead>
      </table>

      <!-- ... Remaining code ... -->

    </div>
  </div>
</div>
@endsection

<style>
  img {
    width: 20%;
  }
</style>