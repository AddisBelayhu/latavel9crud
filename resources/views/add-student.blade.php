<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Add Student </title>
</head>
<body>
    <div class="container" style="margin-top:60px">
        <div class="row">
            <div class="col-md-12">
              <h3>Add Student Data</h3>
              <form  method="post" action="{{url('save-student')}}">
                @csrf 
                <div class="md-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off">
                </div>
                <div class="md-3">
                    <label class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off">
                </div>
                <div class="md-3">
                    <label class="form-label">Phone:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone" autocomplete="off">
                </div>
                <div class="md-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off">
                </div>
                <div class="md-3">
                    <label class="form-label">Address:</label>
                    <textarea class="form-control" name="address" placeholder="Enter Your Address" autocomplete="off"></textarea>
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary" style="width:80px">Submit</button> &nbsp;&nbsp;
                <a href="" class="btn btn-danger" style="width:80px">Back</a>
              </form>
            </div>
        </div>
    </div>
</body>
</html>