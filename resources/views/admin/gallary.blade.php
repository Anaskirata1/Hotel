
<!DOCTYPE html>
<html>
  <head>
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
            <h2 class="h5 mb-3">View Gallary</h2>

            @include('sweetalert::alert')
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
                <form action="{{ url('upload_gallary') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-2">
                        <label for="image">Upload Image</label>
                        <input class="form-control" type="file" id="image" name="image" >
                    </div>
                    <div class="mt-2">
                        <input type="submit" class="btn btn-info mb-3" value="Add Image">
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-striped ">

                  <thead>
                    <tr>
                        <th>Image</th>

                        <th>Actions</th>

                    </tr>
                  </thead>

                    <tbody>


                        @foreach ($gallarys as $gallary )

                        <tr>

                           <td>
                            <img width="200px" src="gallary/{{ $gallary->image }}" alt="">
                           </td>

                            <td>
                                <a class="confirmation mr-2" href="{{ url('gallary_delete',$gallary->id) }}"><i class="fa fa-trash"></i></a>
                                <a title="edit" class="confirmation"  href="{{ url('gallary_update',$gallary->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>
                  </table>
                </div>

          </div>
        </div>
    </div>
       @include('admin.footer')
       <script type="text/javascript">
        var elems = document.getElementsByClassName('confirmation');
        var confirmIt = function (e) {
            if (!confirm('Are you sure?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }
    </script>

  </body>
</html>

