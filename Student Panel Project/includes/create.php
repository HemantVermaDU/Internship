<?php  include "../header.php" ?>
<?php 
  if(isset($_POST['create'])) 
    {   
        $user = $_POST['user'];
        $brnc = $_POST['brnc'];
        $mob = $_POST['mob']; 
        $gen = $_POST['gen']; 
        $query= "INSERT INTO student(`name`, `branch`, `mobile`, `gender`) VALUES('$user','$brnc','$mob','$gen')";
        $add_user = mysqli_query($conn,$query);
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }
          else { echo "<script type='text/javascript'>alert('student added successfully!')</script>";
              }         
    }
?>
<h1 class="text-center">Add student details </h1>
  <div class="container">
     <a href="home.php" class='btn btn-outline-dark mb-2'></i> View student Details</a>
    <form action="" method="post">
      <div class="form-group col-md-4">
        <label for="user" class="form-label">Name</label>
        <input type="text" name="user"  class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="inputState">Branch</label>
        <select id="inputState" class="form-control" name="brnc">
           <option selected>choose...</option>
           <option>COMPUTER SCIENCE</option>
           <option>MECHANICAL </option>
           <option>ELECTRICAL AND ELECTRONICS </option>
      <option>CIVIL ENG</option>     
       </select>
      </div>
    
      <div class="form-group col-md-4">
        <label for="pass" class="form-label">Mobile</label>
        <input type="text" name="mob"  class="form-control" required>
      </div>

        <div class="form-group">
        <label for="pass" class="form-label">Gender</label><br>
         Male <input type="radio" name="gen" value="male">
            Female <input type="radio" name="gen" value="female">
      </div>    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

