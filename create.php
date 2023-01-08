<?php include 'html/head.php'; 

if(isset($_POST['save'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $salary= $_POST['salary'];
  $department = $_POST['department'];

  $success = create($firstname, $lastname, $salary, $department);

  if($success): // check if function create() from function.php is holding True or False
    // if create() is holding True, then display this message
    echo '<div class ="alert alert-success container mt-3">
    Employee added successfully! <a href= "read.php" class = "alert-link float-end"> Check All Employees </a> 
    </div>';
  endif;
    
}




?>
<main class="mt-5">
  <form action="" method="post" class="p-5 bg-white w-50 mx-auto shadow rounded-border">
    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" name="firstname" id="" class="form-control">
      </div>
      <div class="form-text">Enter Employee first name</div>
    </div>
    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" name="lastname" id="" class="form-control">
      </div>
      <div class="form-text">Enter Employee last name</div>
    </div>
    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
        <input type="text" name="salary" id="" class="form-control">
      </div>
      <div class="form-text">Enter Employee salary</div>
    </div>
    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
        <input type="text" name="department" id="" class="form-control">
      </div>
      <div class="form-text">Enter Employee department</div>
    </div>

    <button type="submit" class="btn btn-outline-secondary px-5" name="save">Save Employee</button>
  </form>
    
</main>
<?php include 'html/foot.php'; ?>

    