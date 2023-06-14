<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>student list form</title>
</head>
<body>
<div class="container" style="margin-top:60px">
    <div class="row">
        <div class="col-md-12">
            <h3>Student List</h3><br>
            <div style="margin-right:5%; float:right; font-size:20px">
                <a href="{{url('add-student')}}">Add</a>
            </div><br>
            <br>
            <table class="table">
              <thead><tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>    
                    <th>Action</th>            
              </tr></thead>
            <tbody>
                 @php
                  $i=1 ;
                 @endphp

                 @foreach ($data as $studata)
            
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$studata->name}}</td>
                    <td>{{$studata->email}}</td>
                    <td>{{$studata->phone}}</td>
                    <td>{{$studata->address}}</td>
                    <td>Edit | Delete</td>
                </tr>
                @endforeach 
            </tbody>
            
        </table>
                         

        </div>
    </div>
</div>

    
</body>
</html>