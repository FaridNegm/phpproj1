<?php
    require_once '../db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container text-center">
        <h2>Users Page</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>اسم المستخدم</th>
                    <th>البريد الإلكتروني</th>
                    <th>الصورة</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = $result->fetch_assoc()) {

                            echo "
                                <tr>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[file]</td>
                                    <td><a href='users/add.php?id=$row[id]' class='btn btn-primary btn-sm'>تعديل</a></td>
                                    <td><a href='#' class='btn btn-danger btn-sm'>حذف</a></td>
                                </tr>          
                            ";
                        }

                        mysqli_close($conn);

                    }
                ?>
            </tbody>
        </table>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>