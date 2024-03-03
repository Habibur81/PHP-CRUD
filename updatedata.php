<!DOCTYPE html>
<html lang="en">
<?php
require_once "conn.php";

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["address"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "UPDATE employee SET `name`= '$name', `email`= '$email', `phone`= '$phone', `address` = '$address'  WHERE id = " . $_GET["id"];

    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

    <h3 class="text-center m-0">Update Data</h3>
    <div class="container">
        <?php
        require_once "conn.php";
        $sql = "SELECT * FROM employee WHERE id = " . $_GET["id"];

        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
        ?>
                <div class="row">
                    <form  action="updatedata.php?id=<?php echo $id; ?>" method="post">

                        <div class="form-group col-md-8" style="margin: auto;">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>" required>
                        </div>
                        <div class="form-group col-md-8" style="margin: auto;">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>" required>
                        </div>
                        <div class="form-group col-md-8" style="margin: auto;">
                            <label for="">Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-control" value="<?php echo $phone ?>" required>
                        </div>
                        <div class="form-group col-md-8" style="margin: auto;">
                            <label for="">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="<?php echo $address ?>" required>
                        </div>
                        <div class="form-group mt-2 col-md-8 text-center" style="margin: auto;">
                            <input type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-sm" value="Update">
                        </div>
                    </form>
                </div>

        <?php
            }
        }
        ?>
    </div>

</body>

</html>