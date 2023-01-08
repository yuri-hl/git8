<?php include 'html/head.php'; 
$user_id = $_GET['id'];
$user = show($user_id);
?>

<div class="card mt-5 mx-auto w-25">
  <div class="card-header">
    
  </div>
  <div class="card-body">
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
    <a href="update.php?id=<?php echo $user['id']; ?>" class="btn btn-outline-warning px-3">Edit Employee</a>
    <a href="delete.php?id=<?php echo $user['id']; ?>" class="btn btn-outline-danger px-3 mt-2">Delete Employee</a>

  </div>
</div>
<?php include 'html/foot.php'; ?>