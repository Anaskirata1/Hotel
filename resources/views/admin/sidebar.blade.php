<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Anas </h1>
          <p>Web Developer</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{ url('/home') }}"> <i class="icon-home"></i>Home </a></li>

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
                 <i class="fa fa-hotel"></i>Hotel Rooms </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('create_room')}}">Add Rooms</a></li>
                  <li><a href="{{ url('view_room') }}">View Rooms</a></li>

                </ul>
              </li>

              <li><a href="{{ url('/bookings') }}"> <i class="icon-windows"></i>Booking </a></li>
              <li><a href="{{ url('view_gallary') }}"> <i class="fa fa-image"></i>Gallary </a></li>
              <li><a href="{{ url('all_messages') }}"> <i class="fa fa-comment"></i>Messages </a></li>

      </ul>
    </nav>
