<?php include 'html/head.php'; 
$user_id = $_GET['id'];
$user = show($user_id); 

if(isset($_POST['delete'])){
  $id = $_GET['id'];
  // $firstname = $_POST['firstname'];
  // $lastname = $_POST['lastname'];
  // $salary= $_POST['salary'];
  // $department = $_POST['department'];

  $success = delete($id);

  if($success):
    echo '<div class ="alert alert-danger container mt-3">
    Employee deleted successfully! <a href= "read.php" class = "alert-link float-end"> Check All Employees </a> 
    </div>';
  endif;
    
}

?>
<main class="mt-5">
  <form action="" method="post" class="p-5 bg-white mx-auto w-50 shadow rounded-border">
  <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" name="firstname" value="<?php echo $user['first_name'] ?>" disabled id="" class="form-control">
      </div>
      <div class="form-text">First name</div>
    </div>
    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" name="lastname" value="<?php echo $user['last_name'] ?>" disabled id="" class="form-control">
      </div>
      <div class="form-text">Last name</div>
    </div>
    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
        <input type="text" name="salary" value="<?php echo $user['salary'] ?>" disabled id="" class="form-control">
      </div>
      <div class="form-text">Employee salary</div>
    </div>
    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
        <input type="text" name="department" value="<?php echo $user['department'] ?>" disabled id="" class="form-control">
      </div>
      <div class="form-text">Employee department</div>
    </div>

    <button type="submit" class="btn btn-outline-secondary px-5" name="delete">Delete Employee</button>
  </form>
    
</main>
<?php include 'html/foot.php'; ?>

    