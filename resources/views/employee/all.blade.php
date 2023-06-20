<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>This is all employee</h1>
    <div class="container ">
        <table class="table table-striped table-bordered">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach ($employees as $e)
                <tr>
                    <td>{{$e->name}}</td>
                    <td>{{$e->email}}</td>
                    <td>{{$e->department}}</td>
                    <td>{{$e->salary}}</td>
                    <td>
                        <a href="{{url('employee/edit/'.$e->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{url('employee/delete/'.$e->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#employeeDeleteModal{{$e->id}}">Delete</a>
                        <div class="modal" id="employeeDeleteModal{{$e->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Are you sure want to delete <b>{{$e->name}}</b>?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="{{url('employee/delete/'.$e->id)}}">Yes</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>