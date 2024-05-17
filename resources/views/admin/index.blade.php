
    <!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
  </head>
  <body>
    @if (session('delay_redirect'))
    <script>
        setTimeout(function() {
            window.location.href = "{{ url('/') }}";
        }, {{ session('delay_redirect') }});
    </script>
    @endif
   @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      @include('admin.body')
       @include('admin.footer')
  </body>
</html>

