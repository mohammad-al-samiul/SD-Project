<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-5">Employee Form</h1>
        <form action="{{url('/employee/update/'.$employees->id)}}" method="post">
            @csrf
            <div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Name</label>
                        <input type="text" class="form-control" name="name" id="inputName4" placeholder="Name" value="{{$employees->name}}">

                    </div>
                    <div class=" form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$employees->email}} ">

                    </div>

                </div>


                <div class=" form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSalary">Salary</label>
                        <input type="text" name="salary" class="form-control" id="inputSalary" value="{{$employees->salary}}">

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDepartment">Department</label>
                        <select id="inputDepartment" name="department" class="form-control" value="{{$employees->department}}">
                            <option selected>CSE</option>
                            <option>EEE</option>
                            <option>LAW</option>
                        </select>
                    </div>

                </div>



                <button type=" submit" class="btn btn-primary  btn-md btn-block">Update</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>