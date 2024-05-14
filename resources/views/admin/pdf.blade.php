

      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 mb-3">All Bookings</h2>
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


                        </tr>

                        @endforeach

                    </tbody>
                  </table>
                </div>

          </div>
        </div>
    </div>



