
<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style>
   .img-table{
    max-width: 100px;
   }
   .search{
    position: relative;
   }
   .btn-search{
    position: absolute;
    left: 130px;
    margin: 0px;
    border: 1;
    padding: 8px;
}

    </style>
  </head>
  <body>
   @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 mb-2">View Rooms</h2>
            <form class="search mb-3" action="{{ url('searchdata') }}" method="POST">
                @csrf
                <input type="text" name="search">
                <button type="submit" class="btn btn-info btn-search">Search</button>
            </form>
            @include('sweetalert::alert')
            <div class="table-responsive">
            <table class="table table-dark table-striped ">

              <thead>
                <tr>
                    <th>#</th>
                    <th>Room Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Wifi</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
              </thead>

                <tbody>
                    <?php $i=0; ?>

                    @foreach ($rooms as $room )
                    <?php $i++; ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td>{{ $room->title }}</td>
                        <td>{{Str::limit($room->description,50)}}</td>
                        <td>${{ $room->price }}</td>
                        <td>{{ $room->wifi }}</td>
                        <td>{{ $room->type }}</td>
                        <td>
                           <div class="img-table">
                            <img width="75px" src="room/{{ $room->image }}" alt="no image">
                           </div>
                        </td>
                        <td>
                          <a class="confirmation mr-2" href="{{ url('room_delete',$room->id) }}"><i class="fa fa-trash"></i></a>
                          <a  href="{{ url('room_update',$room->id) }}"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
    </div>
       @include('admin.footer')
  </body>
  <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

</html>

