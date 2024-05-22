
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
            <h2 class="h5 mb-3">View Booking</h2>
            <h5 title="PDF">
                <a href="{{ url('print_pdf') }}" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i></a>
            </h5>
            @include('sweetalert::alert')
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
                        <th>Actions</th>

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
                            <td>
                                @if ($room->status == 'waiting')
                                    <span style="color: yellow">{{ $room->status  }}</span>
                                @elseif ($room->status == 'Approved')
                                    <span style="color: green">{{ $room->status  }}</span>
                                @else
                                <span style="color: red">{{ $room->status  }}</span>
                                @endif



                            </td>
                            <td>
                                 @if ($room->status == 'waiting')
                                <a class="confirmation mr-2" href="{{ url('book_delete',$room->id) }}"><i class="fa fa-trash"></i></a>
                                <a title="Approve" class="confirmation"  href="{{ url('approve_book',$room->id) }}"><i class="fa fa-check" aria-hidden="true"></i></a>
                                <a title="Rejected" class="confirmation"  href="{{ url('rejected_book',$room->id) }}"><i class="fa fa-ban" aria-hidden="true"></i></a>
                                @elseif ($room->status == 'Approved' | $room->status == 'Rejected' )
                                <a class="confirmation mr-2" href="{{ url('book_delete',$room->id) }}"><i class="fa fa-trash"></i></a>

                                @endif
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

