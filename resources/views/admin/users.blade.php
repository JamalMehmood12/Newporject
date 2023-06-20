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
   @include("admin.adminscript")
  </body>
</html>