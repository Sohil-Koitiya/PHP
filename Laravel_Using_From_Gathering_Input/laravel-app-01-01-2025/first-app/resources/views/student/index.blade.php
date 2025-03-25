<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>

    <!-- laravel new app-name
    .env => write database name(as per the phpmyadmin => run php artisan migrated)
    (if not migrated while creating app) 
    controller :
    => php artisan make:controller ControllerName
    => php artisan make:controller ControllerName --resource
    => php artisan make:controller ControllerName -r
    model :
    =>php artisan make:model ModelName
    database:migration
    => php artisan make:migration create-tableName-table
    => php artisan migrate

    Go To Model ==> $fillable => table fields in array
    protected $fillable = ['col1'.'col2'];


    resource:view
    => index.blade.php ==> controller => view('index');
    ==> users => index.blade.php ==> controller => view('users.index');
    
    URL::to()
    route()

    -->

    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="text-center">
                    <h2>User Details</h2>
                    <a class="btn btn-warning fw-bold" href="create">Add Users</a>
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($student as $s)
                                <tr>
                                    <th scope="row">{{$s->id}}</th>
                                    <td>{{$s->firstname}}</td>
                                    <td>{{$s->lastname}}</td>
                                    <td>{{$s->email}}</td>
                                    <td>{{$s->password}}</td>
                                    <td>
                                    <a class="btn btn-info fw-bold" href="{{URL::to('show',$s->id)}}">View</a>
                                    <a class="btn btn-success fw-bold" href="{{URL::to('edit',$s->id)}}">Edit</a>
                                    <!-- <a class="btn btn-danger fw-bold" href="{{URL::to('delete',$s->id)}}">Delete</a> -->
                                     <form action="{{URL::to('delete',$s->id)}}" method="post" >
                                        @csrf
                                        <input type="submit" class="btn btn-danger" value="delete">
                                     </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





</body>

</html>