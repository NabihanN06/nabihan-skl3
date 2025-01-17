<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location: /login.php");
}

if ($_SESSION["role"] == "user") {
    header("location: /user_page.php");
}
if ($_SESSION["role"] == "manager") {
    header("location: /managerpage.php");
}

// Assuming $conn is the MySQLi connection instance already in global scope.
include './helper_php/db_init.php';

$allUsers = array();

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch all rows as an associative array
    $allUsers = $result->fetch_all(MYSQLI_ASSOC);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color: darkred; padding:5vh">


    <div class="container">

        <div class="card my-5 p-2" style="
    background: #f1f1f1;
">
            <h2><?php echo $_SESSION["username"]; ?>'s only access</h2>
            <div class="d-flex align-items-center justify-content-end  ">
                <a href="index.php" class="btn btn-info mr-2" role="button" style="background-color:gold; border:0; color:black">back to Dashboard</a>
                <a href="logout.php" class="btn btn-warning " style="background-color: red; border:0; color:white">Logout</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>User Roll Management System</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <div class="d-flex align-items-center justify-content-between pb-3">
                        <h4>All Users</h4>
                        <a href="/create.php" class="btn bg-primary text-white ">Create user</a>
                    </div>

                    <thead>
                        <tr style="background:#b2d5df">
                            <th scope="col">username</th>
                            <th scope="col">email</th>
                            <th scope="col">role</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

foreach ($allUsers as $user) {

    echo "<tr>";
    echo "<td>{$user["username"]}</td>";
    echo "<td>{$user["email"]}</td>";
    if (empty($user["role"])): ?>
            <td>N/A</td>
        <?php else: ?>
            <td><?php echo $user["role"]; ?></td>
        <?php endif;

    echo "<td><a href='edit.php?id={$user['username']}' class='btn btn-sm btn-outline-primary mr-2'>Edit</a><a href='delete.php?id={$user['username']}' class='btn btn-sm btn-outline-danger'>Delete</a></td>
                        </tr>";
}
?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>

