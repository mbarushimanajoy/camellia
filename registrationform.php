<?php
include('Connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <center>
        <h4><U>REGISTRATION FORM</U></h4>
        <div class="card" style="width: 18rem;">
            <div class="card-body">



                <form action="backend.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputnames" class="form-label">names</label>
                        <input type="text" class="form-control" id="exampleInputnames" name="names">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputphonenumber" class="form-label">phonenumber</label>
                        <input type="phonenumber" class="form-control" id="exampleInputphonenumber" name="phonenumber">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

            </div>



        </div>
        do you have an account? <a href="login.php">login</a>
        </div>

        </div>
        </form>
    </center>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>