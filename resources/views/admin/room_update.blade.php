
<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
    @include('admin.css')
    <style>
      /* form input,textarea{
        width: 50%;
        height: 30px;
        padding-left: 30px;
      }
      form label{
        padding: 10px 40px 10px 20px ;
        margin-right: 50px
      } */
    </style>
  </head>
  <body>
   @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Update Room</h2>
            @include('sweetalert::alert')
            @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert"">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
            @endforeach
        </ul>
    </div>
@endif

            <div>
                <form action="{{ url('edit_room',$room->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label class="col-sm-2 col-form-label" for="title" >Room Title</label>
                        <input class="form-control-plaintext" type="text" value="{{ $room->title }}" name="title" id="title">
                    </div>
                    <div>
                        <label class="col-sm-2 col-form-label" for="description" >Description</label>
                        <textarea  class="form-control-plaintext" type="text" name="description" id="description">
                            {{ $room->description }}
                        </textarea>
                    </div>
                    <div>
                        <label class="col-sm-2 col-form-label" for="price" >Price</label>
                        <input class="form-control-plaintext" type="number" name="price" id="price" value="{{ $room->price }}">
                    </div>
                    <div>
                        <label  for="type" class="m-2" >Room Type</label> <br>
                        <select class="form-select" aria-label="Default select example"  name="type">
                          <option selected>{{ $room->type }}</option>
                          <option value="regular">Regular</option>
                          <option value="premium">Premium</option>
                          <option value="deluxe">Deluxe</option>
                        </select>
                    </div>
                    <div>
                        <label  for="type" class="m-2" >Free Wifi</label> <br>
                        <select class="form-select" aria-label="Default select example"  name="wifi">
                          <option selected>{{ $room->wifi }}</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>

                        </select>
                    </div>
                    <div>
                       <div class="mt-3 mb-3">
                        <label for="">Current Image</label>
                        <img width="100px" src="room/{{ $room->image }}" alt="no image">
                       </div>
                        <label for="formFile">Upload Image</label>
                        <input class="form-control" type="file" id="formFile" name="image" >
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary mb-3">
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
       @include('admin.footer')
  </body>
</html>

