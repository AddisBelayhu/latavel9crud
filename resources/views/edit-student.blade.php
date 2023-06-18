<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Student </title>
</head>
<body>
    <div class="container" style="margin-top:60px">
        <div class="row">
            <div class="col-md-12">
              <h3>Edit Student Data</h3>
              @if(Session::has('success'))
              <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
              </div>
              @endif
              <form  method="post" action="{{url('edit-student')}}">
                @csrf 
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="md-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" 
                    autocomplete="off" value="{{$data->name}}">
                   @error('name')
                   <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                   @enderror
                </div>
                <div class="md-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" 
                    autocomplete="off" value="{{$data->email}}">
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                     {{$message}}
                   </div>
                    @enderror
                </div>
                <div class="md-3">
                    <label class="form-label">Phone:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone" 
                    autocomplete="off" value="{{$data->phone}}" >
                    @error('phone')
                    <div class="alert alert-danger" role="alert">
                     {{$message}}
                   </div>
                    @enderror
                </div>
                <div class="md-3">
                    <label class="form-label">Address:</label>
                    <textarea class="form-control" name="address" placeholder="Enter Your Address" 
                    autocomplete="off" value="{{$data->address}}"></textarea>
                    @error('address')
                    <div class="alert alert-danger" role="alert">
                     {{$message}}
                   </div>
                    @enderror
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary" style="width:80px">Update</button> &nbsp;&nbsp;
                <a href="{{url('student-list')}}" class="btn btn-danger" style="width:100px">Show list</a>
              </form>
            </div>
        </div>
        <p style="font-family: 'Courier New', Courier, monospace"><abbr title="Moa Acadamy of Execellence">MAoE</abbr> is a pioneer school founded in 1978 aiming to provide 
            quality education for the community with affordable price. </p>
    </div>
</body>
</html>