
<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
   @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">All Messages</h2>

            <div class="table-responsive">
                <table class="table table-dark table-striped ">

                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i= 0; ?>
                        @foreach ($messages as $message )
                        <?php $i++; ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->message }}</td>


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

