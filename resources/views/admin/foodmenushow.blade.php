<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include("admin.admincss")
    
  </head>
  <body>
    <!--  -->
    <div class="container-scroller">
    @include("admin.adminnarbar")
    
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
      <th scope="col"><a href="#">edit</a></th>
      <th scope="col"><a href="{{url('/deletemenu',$data->id)}}">Delete</a></th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
    @endforeach
  </thead>
</table>
</div>
</div>
</div>
   @include("admin.adminscript")
  </body>
</html>