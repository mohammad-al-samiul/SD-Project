<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">

        <h2 class="text-center mb-3">All Departments</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Name</th>
                <th>Code</th>
                <th>Established</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($departments as $d)
                <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->code}}</td>
                    <td>{{$d->established_at}}</td>
                    <td>
                        <a href="{{url('department/edit/'.$d->id)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{url('department/delete/'.$d->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#departmentDeleteModal{{$d->id}}">Delete</a>
                        <!-- The Modal -->
                        <div class="modal" id="departmentDeleteModal{{$d->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Are you sure want to delete <b>{{$d->name}}</b>?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="{{url('department/delete/'.$d->id)}}">Yes</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach ()


            </tbody>
        </table>

    </div>

</body>

</html>