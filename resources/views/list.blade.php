<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>List</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">
                            <a href="/create" type="button" class="btn btn-primary">Add</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lists as $list)
                            <tr>
                                <th scope="row">{{ $list->id }}</th>
                                <td>{{ $list->first_name }}</td>
                                <td>{{ $list->last_name }}</td>
                                <td>{{ $list->position }}</td>
                                <td>{{ $list->created_at }}</td>
                                <td>
                                <a href="/edit/{{$list->id}}" type="button" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{$list->id}}" type="button" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/logout" type="button" class="btn btn-danger">Logout</a>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>