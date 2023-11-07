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
            <div class="col-12 text-center">
                <h1>Create Home</h1>
            </div>
            <div class="col-12 text-end mb-3">
                <a class="btn btn-success btn-sm" href="{{ route('home') }}">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <form action="{{ route('store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input
                            class="form-control @error('name')
                            is-invalid
                        @enderror"
                            value="{{ old('name') }}" type="text" id="name" name="name"
                            placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="price">price</label>
                        <input
                            class="form-control @error('price')
                            is-invalid
                        @enderror"
                            value="{{ old('price') }}" type="text" id="price" name="price"
                            placeholder="Enter price number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label>
                        <input
                            class="form-control @error('address')
                            is-invalid
                        @enderror"
                            type="text" value="{{ old('address') }}" id="address" name="address"
                            placeholder="Enter address">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
