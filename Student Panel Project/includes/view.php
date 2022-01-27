
<?php  include '../header.php'?>

<h1 class="text-center">Student Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Name</th>
          <th  scope="col">Branch</th>
          <th  scope="col"> Mobile</th>
          <th  scope="col"> Gender</th>
        </tr>  
      </thead>
        <tbody>
          <tr>     
            <?php
              if (isset($_GET['id'])) {
                  $id = $_GET['id']; 
                  $query="SELECT * FROM student WHERE id = {$id} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $user = $row['name'];
                      $brnc = $row['branch'];
                      $mob = $row['mobile'];
                      $gen = $row['gender'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$user}</td>";
                        echo " <td > {$brnc}</td>";
                        echo " <td >{$mob} </td>"; 
                        echo " <td >{$gen} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
