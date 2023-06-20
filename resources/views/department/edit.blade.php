<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <h2>Edit the Department</h2>
        <form action="{{url('/department/update/'.$department->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for=" ">Name</label>
                <input type="text" name="name" class="form-control" id="" value="{{$department->name}}">
            </div>


            <div class="form-group">
                <label for=" ">Code</label>
                <input type="text" name="code" class="form-control" id="" value="{{$department->code}}">
            </div>
            <div class="form-group">
                <label for=" ">Established</label>
                <input type="date" name="established" class="form-control" id="" value="{{$department->established_at}}">
            </div>
            <div class="form-group">

                <button type="submit" class="btn btn-secondary">Update</button>
            </div>

        </form>
    </div>

</body>

</html>