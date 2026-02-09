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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
  crossorigin="anonymous">
</head>

<body>
  <?php
  include("nav.php") ?>

  <div class="box1">
    <h2>List of Post</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add New Post
    </button>
  </div>
  <table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>Post Id</th>
        <th>Post Name</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM post";
      $result = mysqli_query($conn, $query);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><a href='updatepost.php?Id="<?php echo $row['Id'] ?>"' 
            class="btn btn-success">Update</a>
              <a href='backend.php?Id="<?php echo $row['Id'] ?>"' 
              class="btn btn-danger">Delete</a>
            </td>
          </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>


  <!-- Modal -->
  <form action="backend.php" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" class="form-control" placeholder="Enter the Id" name="Id">
          </div>
          <div class="modal-body">
            <input type="text" class="form-control" placeholder="Enter the Name" name="Name"
            pattern="[A-Za-z/s]+">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="newpost">Save post</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
  crossorigin="anonymous">
  </script>
</body>

</html>