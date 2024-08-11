<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Crud</title>
</head>

<body>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Student</h4>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?= $student['id'] ?>">
                            <div class="form-group mt-3">
                                <label>Name</label>
                                <input type="text" value="<?= $student['name'] ?>" class="form-control" name="name"
                                    placeholder="Enter your name">
                            </div>
                            <div class="form-group mt-3">
                                <label>Student ID</label>
                                <input type="number" value="<?= $student['student_id'] ?>" class="form-control"
                                    name="student_id" placeholder="Enter your name">
                            </div>
                            <div class="form-group mt-3">
                                <label>Phone</label>
                                <input type="tel" value="<?= $student['phone'] ?>" class="form-control" name="phone"
                                    placeholder="Enter your name">
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>