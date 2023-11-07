<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                @if (str_contains(session('success'), 'deleted'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="SESSION_LIFETIME=10"
                            aria-label="Close"></button>
                    </div>
                @elseif (str_contains(session('success'), 'changed'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="SESSION_LIFETIME=10"
                            aria-label="Close"></button>
                    </div>
                @else
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="SESSION_LIFETIME=10"
                            aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-12 text-center">
                <h1>Homes Table</h1>
            </div>
            <div class="col-12 text-end mb-3">
                <a class="btn btn-success btn-sm" href="{{ route('create') }}">
                    <i class="bi bi-plus-circle"></i>
                </a>
            </div>
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homes as $home)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $home->name }}</td>
                                <td>{{ $home->address }}</td>
                                <td>{{ $home->price }}</td>
                                <td>{{ $home->created_at }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('show', $home->id) }}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{ route('edit', $home->id) }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('destroy', $home->id) }}">
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
