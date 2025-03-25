<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center p-3 ">
            <div class="col-xl-6 ">
                <div>
                    <h2>Edit Users Details</h2>
                    <a class="btn my-4 btn-warning fw-bold" href="{{URL::to('/')}}">Go back</a>
                </div>

                <div>
                <form action="{{URL::to('update',$student->id)}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Firstname</label>
                            <input type="text" name="fname" class="form-control" id="fname"
                            value="{{$student->firstname}}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Lastname</label>
                            <input type="text" name="lname" class="form-control" id="lname"
                            value="{{$student->lastname}}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                            value="{{$student->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                            value="{{$student->lastname}}">
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>