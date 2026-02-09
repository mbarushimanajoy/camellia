<?php
include('Connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <center>
        <h4><u>LOGIN</u></h4>
        <form action="backend.php" method="POST">
            <div class="mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputusername" class="form-label">username</label>
                        <input type="text" class="form-control" id="exampleInputusername" name="username"required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" name="password"required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="login">next</button>
                    </div>
                    do you want to create an account? <a href="registrationform.php">register</a>

        </form>
        </div>
        </div>
    </center>
    <div class="mb-3">

        <div class="form-group">

            <?php
            $query = "SELECT * FROM users";
            ?>

            </select>
        </div>


    </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </fieldset>
</body>

</html>