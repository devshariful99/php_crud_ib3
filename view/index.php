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
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Student List</h4>
                        <a href="create.php" class="btn btn-primary">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Name</td>
                                    <td>Student ID</td>
                                    <td>Phone</td>
                                    <td>Created At</td>
                                    <td>Updated At</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $key => $student): ?>
                                <tr>
                                    <td><?= ++$key ?></td>
                                    <td><?= $student['name'] ?></td>
                                    <td><?= $student['student_id'] ?></td>
                                    <td><?= $student['phone'] ?></td>
                                    <td><?= date('d M, Y', strtotime($student['created_at'])) ?></td>
                                    <td><?= $student['updated_at'] ? date('d M, Y', strtotime($student['updated_at'])) : '--' ?>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?= $student['id'] ?>" class="btn btn-primary">Edit</a>
                                        <a href="delete.php?id=<?= $student['id'] ?>" class="btn btn-primary">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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