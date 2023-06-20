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
        <form action="{{url('/employee/store')}}" method="post">
            @csrf
            <div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Name</label>
                        <input type="text" class="form-control" name="name" id="inputName4" placeholder="Name" value="{{old('name')}}">
                        <span class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{old('email')}}">
                        <span class=" text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class=" form-group ">
                    <label class=" control-label" for="date">Joining Date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" />
                </div>

                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor" value="{{old('address')}}">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSalary">Salary</label>
                        <input type="text" name="salary" class="form-control" id="inputSalary" value="{{old('salary')}}">
                        <span class="text-danger">
                            @error('salary')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDepartment">Department</label>
                        <select id="inputDepartment" name="department" class="form-control">
                            <option selected>CSE</option>
                            <option>EEE</option>
                            <option>LAW</option>
                        </select>
                    </div>

                </div>
                <div>
                    <p>What is your gender?</p>

                    <div class="custom-control custom-radio custom-control-inline">

                        <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="male" {{ old('gender')=='male' ? 'checked' : ''}}>
                        <label class="custom-control-label" for="customRadioInline1">Male</label>

                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="gender" value="female" {{ old('gender')=='female' ? 'checked' : ''}} class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Female</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="gender" value="others" {{ old('gender')=='others' ? 'checked' : ''}} class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3">Others</label>

                    </div>
                    <br>
                    <span class="text-danger">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group mt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="status">
                        <label class="form-check-label" for="gridCheck">
                            Active
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary  btn-md btn-block">Save</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>