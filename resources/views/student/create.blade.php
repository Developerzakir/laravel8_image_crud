
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Image crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h3 class="alert alert-success">
                {{session('status')}}

            </h3>
            @endif

            <div class="card">
                <div class="card-header">
                    <h2>Add student with  Image 
                    <a href="{{url('students')}}" class="btn btn-success float-end">Back</a>

                    </h2>
                    
                </div>

                <div class="card-body">

                <form action="" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group mb-2">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="email">Student Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="course">Student Course</label>
                    <input type="text" name="course" class="form-control">
                </div>

                <div class="form-group md-2">
                    <label for="profile">Student Profile</label>
                    <input type="file" name="profile_image" class="form-control">
                </div>

                <div class="form-group">
                    
                    <button type="submit"  class="btn btn-success">Save Student</button>
                </div>
                    
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

