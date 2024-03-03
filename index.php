<?php
    include "conn.php";

    $sql = "SELECT id, name, email, phone, address FROM employee";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Employee Records</title>
    </head>
    <body>
        <div class="container mt-2">
            <h4 class="text-center m-0">Employee Records</h4>
            <div class="float-right">
                <button type="button" class="btn btn-outline-success mb-1 btn-sm"><a href="insert.php" class="text-dark text-uppercase" style="text-decoration:none">Create</a></button>
            </div>
            <table class="table table-sm table-bordered m-0">
                <thead class="text-center">
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                
                                $id =  $row["id"];
                                $name =  $row["name"];
                                $email =  $row["email"];
                                $phone =  $row["phone"];
                                $address = $row["address"];
                    ?>
                    <tr>
                        <!-- <td><?php echo $id; ?></td> -->
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $address; ?></td>
                        <td class="text-center"><a href="updatedata.php?id=<?php echo $id; ?>" class="btn btn-outline-primary btn-sm">Edit</a></td>
                        <td class="text-center"><a href="deletedata.php?id=<?php echo $id; ?>" class="btn btn-outline-danger btn-sm">Delete</a></td>
                    </tr>
                    
                    <?php
                                    
                            }
                        } else {
                            echo "<tr><td colspan='3'>No records found</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
