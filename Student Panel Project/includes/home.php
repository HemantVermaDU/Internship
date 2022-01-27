<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center">All Students list with details </h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Add New Student</a>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Branch</th>
              <th scope="col">Mobile</th>
              <th scope="col">Gender</th>
              <th scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM student";              
            $view_users= mysqli_query($conn,$query);   
            while($row= mysqli_fetch_assoc($view_users)){

        $id = $row['id'];
        $user = $row['name'];
        $brnc = $row['branch'];
        $mob = $row['mobile'];
        $gen = $row['gender'];       

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$user}</td>";
              echo " <td > {$brnc}</td>";
              echo " <td >{$mob} </td>";
              echo " <td >{$gen} </td>";

              echo " <td class='text-center'> <a href='view.php?id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>