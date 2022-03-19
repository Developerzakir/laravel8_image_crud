


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 8 Image crud</h2>
                    <a href="{{url('add-student')}}" class="btn btn-primary float-end">Add Student</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>

                        </thead>

                        <tbody>

                        @foreach($student as $items)

                        <tr>
                            <td>{{$items->id}}</td>
                            <td>{{$items->name}}</td>
                            <td>{{$items->email}}</td>
                            <td>{{$items->course}}</td>
                            <td>
                                <img src="{{asset('uploads/students/'.$items->profile_image)}}" width="70px" height="70px" alt="">
                            </td>
                            <td>
                                <a href="{{url('edit-student/'.$items->id)}}" class="btn btn-success">Edit</a>
                            </td>

                            <td>
                                <!-- <a href="{{url('delete-student/'.$items->id)}}"  class="btn btn-danger">Delete</a> -->

                                <form action="{{ url('delete-student/'.$items->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="confirm('are you sure want to delete')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>

                        </tbody>

                        @endforeach
                        

                        
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
