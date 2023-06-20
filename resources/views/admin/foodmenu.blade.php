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

        <div class="container">
            <div class="row">
                <div class="col-md-8 ms-5">
                    <h2 class="pt-3 text-dark">Food Menu</h2>
                    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Price</label>
                            <input type="num" name="price" class="form-control">
                        </div>
                        <div class="col-12">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-12">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
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
    @include("admin.adminscript")
</body>

</html>