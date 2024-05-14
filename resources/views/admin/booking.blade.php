
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
            <h2 class="h5 no-margin-bottom">View Booking</h2>
            {{-- @include('sweetalert::alert') --}}
            <div class="table-responsive">
                <table class="table table-dark table-striped ">

                  <thead>
                    <tr>
                        <th>Room ID</th>
                        <th>Room Title</th>
                        <th>Price</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Arrival Date</th>
                        <th>Leaving Date</th>
                        <th>Status</th>

                    </tr>
                  </thead>

                    <tbody>


                        @foreach ($rooms as $room )

                        <tr>

                            <td>{{ $room->room_id }}</td>
                            <td>{{ $room->room1->title }}</td>
                            <td>{{ $room->room1->price }}</td>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->email }}</td>
                            <td>{{ $room->phone }}</td>
                            <td>{{ $room->startDate }}</td>
                            <td>{{ $room->endDate }}</td>
                            <td>{{ $room->status }}</td>

                        </tr>

                        @endforeach

                    </tbody>
                  </table>
                </div>

          </div>
        </div>
    </div>
       @include('admin.footer')
  </body>
</html>

