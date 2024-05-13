
<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">

     @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>
      <!-- end header inner -->


      <div class="card mb-3" style="padding: 50px" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="room/{{ $room->image }}" alt="" width="100%">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title"> Room Title : {{ $room->title }}</h5>
              <p class="card-text"> Room Description : {{ $room->description }}</p>
              <p class="card-text"> category:{{ $room->type}}</p>
              <h4>Free Wifi: {{ $room->wifi }}</h4>
               <h3>
                Price :
              ${{ $room->price }}
               </h3>


            </div>
          </div>
          <div class="col-md-4">
            <form action="">
                <div class="mt-3">
                    <label for="input1" class="form-label lab">Name</label>
                    <input type="text" name="name" id="input1" class="form-control inp1" placeholder="Name">
                </div>
                <div class="mt-3">
                    <label for="input2" class="form-label lab">Email</label>
                    <input type="email" name="email" id="input2" class="form-control inp1 " placeholder="Email">
                </div>
                <div class="mt-3">
                    <label for="input3" class="form-label lab">Phone</label>
                    <input type="number" name="phone" id="input3" class="form-control inp1 " placeholder="Phone">
                </div>
                <div class="mt-3">
                    <label for="startDate" class="form-label lab">Start Date</label>
                    <input type="date" name="startDate" id="startDate" class="form-control inp1 " >
                </div>
                {{-- <div class="mt-3">
                    <label for="endDate" class="form-label lab">End Date</label>
                    <input type="date" name="endDate" id="input5" class="form-control inp1" >
                </div> --}}
                {{-- <div class="mt-3">
                  <label for="endDate" class="form-label lab">End Date</label>
                  <input type="date" name="endDate" id="input5" class="form-control inp1" >
              </div> --}}
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Book Room</button>
                </div>
            </form>
          </div>
        </div>
      </div>


      <!--  footer -->

      @include('home.footer')

      <script src="js/main1.js"></script>
   </body>


</html>
