<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Create Employee Record</title>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center m-0">Create Record</h2>
            <div class="row">
                <form class="col-md-12" action="create.php" method="post">
                    <div class="form-group col-md-8" style="margin: auto;">
                        <label for="name" class="m-0">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group col-md-8" style="margin: auto;">
                        <label for="name" class="m-0">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group col-md-8" style="margin: auto;">
                        <label for="name" class="m-0">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group col-md-8" style="margin: auto;">
                        <label for="address" class="m-0">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="text-center col-md-8 mt-1" style="margin: auto;">
                        <button type="submit" class="btn btn-outline-primary btn-sm text-center">Create</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>
