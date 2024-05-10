
<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
   .img-table{
    max-width: 100px;
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
                            <img width="100px" src="room/{{ $room->image }}" alt="no image">
                           </div>
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
</html>

