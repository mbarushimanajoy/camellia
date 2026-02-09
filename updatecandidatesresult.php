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
  <?php
  include("nav.php");
  if(isset($_GET["Id"])){
    $Id = $_GET['Id'];
    $query = "SELECT * FROM `candidatesresult` WHERE Id=$Id";
    $result = mysqli_query($conn, $query);
  
    $row = mysqli_fetch_assoc($result);
  }


  ?>


  <!-- Modal -->
  <form action="backend.php" method="POST">
    
            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Your Information</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
          <div class="modal-body">
            <input type="hidden" class="form-control" placeholder="Enter the Id" name="Id" value="<?php echo $row['Id'];?>">
            <input type="text" class="form-control" placeholder="Enter the 	FirstName" name="FirstName" value="<?php echo $row['FirstName'];?>">
            <input type="text" class="form-control" placeholder="Enter the LastName" name="LastName" value="<?php echo $row['LastName'];?>">
            <input type="text" class="form-control" placeholder="Enter the Gender" name="Gender" value="<?php echo $row['Gender'];?>">
            <input type="date" class="form-control" placeholder="Enter the DateOfBirth" name="DateOfBirth" value="<?php echo $row['DateOfBirth'];?>">
            <input type="date" class="form-control" placeholder="Enter the ExamDate" name="ExamDate" value="<?php echo $row['ExamDate'];?>">
            <input type="number" class="form-control" placeholder="Enter the PhoneNumber" name="PhoneNumber" value="<?php echo $row['PhoneNumber'];?>">
            <input type="number" class="form-control" placeholder="Enter the Marks" name="Marks" value="<?php echo $row['Marks'];?>">
    </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatecandidatesresult">Save candidates result</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>