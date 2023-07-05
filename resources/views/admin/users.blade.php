@extends('admin.dashboard')
@section('content')
<div class="container pt-5">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-dark p-3">All User</h2>
      <table class="table">
        <thead>
          @foreach($data as $data)
          <tr>
            <th scope="col">{{$data->id}}</th>
            <th scope="col">{{$data->name}}</th>
            <th scope="col">{{$data->email}}</th>
            <th scope="col"><a href="/profile">edit</a></th>
            <!-- <th scope="col"><a href="#">Delete</a></th> -->
            <!-- <th scope="col">Handle</th> -->
          </tr>
          @endforeach
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection