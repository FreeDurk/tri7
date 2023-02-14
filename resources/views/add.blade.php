<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-6">
            <h5>Add</h5>
        <form action="/store" method="POST">
        @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="First name" name="first_name" value="">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Last name" name="last_name" value="">
            </div>
            @if(Auth::user()->role == 'Manager')
            <div class="input-group mb-3">
                <select class="form-select" name="position">
                    <option value="Manager" >Manager</option>
                    <option value="Web Developer" >Web Developer</option>
                    <option value="Web Designer" >Web Designer</option>
                </select>
            </div>
            @endif
            <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>