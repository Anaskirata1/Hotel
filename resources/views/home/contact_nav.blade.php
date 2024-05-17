<!DOCTYPE html>
<html lang="en">
   <head>
   @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
    @include('sweetalert::alert')
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
        @include('home.header')
      <!-- end header inner -->
      <!-- end header -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Contact Us</h2>

                  </div>
               </div>
            </div>
         </div>

      </div>
      <!--  contact -->
      <div class="row mt-5">
        <div class="col-md-6">
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
           <form id="request" class="main_form" method="POST" action="{{ url('contact') }}">
              @csrf
              <div class="row">
                 <div class="col-md-12 ">
                    <input class="contactus" placeholder="Name" type="text" name="name">
                 </div>
                 <div class="col-md-12">
                    <input class="contactus" placeholder="Email" type="email" name="email">
                 </div>
                 <div class="col-md-12">
                    <input class="contactus" placeholder="Phone Number" type="number" name="phone">
                 </div>
                 <div class="col-md-12">
                    <textarea class="textarea" placeholder="Message" type="text" name="message">Message</textarea>
                 </div>
                 <div class="col-md-12">
                    <button type="submit" class="send_btn">Send</button>
                 </div>
              </div>
           </form>
        </div>
        <div class="col-md-6">
           <div class="map_main">
              <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.3891957294627!2d35.79639336462549!3d35.54239471377836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1526af2490be5325%3A0x9ca919a162c6df7f!2z2K_ZiNin2LEg2KfZhNir2YjYsdip!5e0!3m2!1sen!2s!4v1715839494720!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
           </div>
        </div>
     </div>
      {{-- @include('home.contact') --}}
      <!-- end contact -->
      <!--  footer -->
    @include('home.footer')
   </body>
</html>
