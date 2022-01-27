<?php include "../header.php"?>
<?php
   if(isset($_GET['id']))
    {
      $id = $_GET['id']; 
    }
      $query="SELECT * FROM student WHERE id = $id ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
           $id = $row['id'];
           $user = $row['name'];
          $brnc = $row['branch'];
          $mob = $row['mobile'];
          $gen = $row['gender'];
        }

    if(isset($_POST['update'])) 
    {
        $user = $_POST['user'];
        $brnc = $_POST['brnc'];
        $mob = $_POST['mob']; 
        $gen = $_POST['gen']; 

      $query = "UPDATE student SET name = '$user' , branch = '$brnc' , mobile = '$mob', gender ='$gen' WHERE id = $id";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update student Details</h1>
  <div class="container ">
   <a href="home.php" class='btn btn-outline-dark mb-2'></i> View student Details</a>

    <form action="" method="post">
      <div class="form-group col-md-4">
        <label for="user" >Name</label>
        <input type="text" name="user" class="form-control" required value="<?php echo $user  ?>">
      </div><br>

      <div class="form-group col-md-4">

        <label for="inputState"  class="form-label">Branch</label>
        <select id="inputState" class="form-control" name="brnc" required >
                         <option><?php echo $brnc ?></option>
                         <option>COMPUTER SCIENCE</option>
                        <option>MECHANICAL </option>
                         <option>ELECTRICAL AND ELECTRONICS </option>
                         <option>CIVIL ENG</option>
                         </select>
      </div>

       <div class="form-group col-md-4">
        <label for="mob" class="form-label">Mobile</label>
        <input type="text" name="mob"  class="form-control" required value="<?php echo $mob  ?>" >
      </div> <br>

        <div class="form-group">
        <label for="gen" class="form-label">Gender</label><br>
         Male <input type="radio" name="gen" value="male" required>
            Female <input type="radio" name="gen" value="female" >
      </div>    <br>

  
      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

