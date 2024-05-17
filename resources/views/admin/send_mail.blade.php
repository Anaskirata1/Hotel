
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
            <h2 class="h5 no-margin-bottom">Send Email</h2>
            <div>
                <center>
                    Mail Send To <strong>{{ $data->name }}</strong>
                </center>
            </div>
            <div>
                <form action="{{ url('mail',$data->id) }}" method="POST" >
                    @csrf
                    <div>
                        <label class="col-sm-2 col-form-label" for="greeting" >Greeting</label>
                        <input class="form-control-plaintext" type="text" name="greeting" id="greeting">
                    </div>
                    <div>
                        <label class="col-sm-2 col-form-label" for="body" >Mail Body</label>
                        <textarea class="form-control-plaintext" type="text" name="body" id="body">
                        </textarea>
                    </div>
                    <div>
                        <label class="col-sm-2 col-form-label" for="action_text" >Action Text</label>
                        <input class="form-control-plaintext" type="text" name="action_text" id="action_text">
                    </div>

                    <div>
                        <label class="col-sm-2 col-form-label" for="action_url" >Action Url</label>
                        <input class="form-control-plaintext" type="text" name="action_url" id="action_url">
                    </div>

                    <div>
                        <label class="col-sm-2 col-form-label" for="endline" >End Line</label>
                        <input class="form-control-plaintext" type="text" name="endline" id="endline">
                    </div>



                    <div class="mt-3">
                        <input type="submit" value="Send" class="btn btn-info  mb-3">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
       @include('admin.footer')
  </body>
</html>

