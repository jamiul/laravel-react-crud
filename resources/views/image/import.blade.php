<!DOCTYPE html>
<html>
<head>
    <title>CSV Import</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Import and Export CSV
        </div>
        <div class="card-body">
            <form action="{{ route('image.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import</button>
                <a class="btn btn-warning" href="{{ route('image.export') }}">Export</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>