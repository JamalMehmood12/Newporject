@extends('admin.dashboard')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-dark p-3">Reservation</h2>
      <table class="table">
        <thead>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Guest</th>
                <th scope="col">Time</th>
                <th scope="col">Date</th>
                <th scope="col">Message</th>
                <!-- <th scope="col">Handle</th> -->
              </tr>
            </thead>
            @foreach($data as $data)
            <tr>
              <th scope="col">{{$data->id}}</th>
              <th scope="col">{{$data->name}}</th>
              <th scope="col">{{$data->email}}</th>
              <th scope="col">{{$data->phone}}</th>
              <th scope="col">{{$data->guest}}</th>
              <th scope="col">{{$data->time}}</th>
              <th scope="col">{{$data->date}}</th>
              <th scope="col">{{$data->message}}</th>
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