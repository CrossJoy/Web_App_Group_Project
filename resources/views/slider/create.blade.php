

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Add Carousel Slider In Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center image-form">
                <form class="col-md-6 image-uplode d-inline-block border shadow-lg rounded p-2 mt-5" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="m-5">
                        <h3 class="float-start mb-5">Uplode Image For News</h3>
                        <input type="file" class="form-control form-control-lg" name="image" id="image">
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="description" class="form-control" id="description" placeholder="Description" required>
                        </div>
                    <div class="m-5">
                        <button class="btn btn-primary">Uplode Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


