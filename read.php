<?php 
include 'html/head.php';
?>
<table class="table table-striped table-hover table-sm mt-5">
  <thead class="table-dark">
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Salary</th>
    <th>Department</th>
    <th>View Employee</th>
  </thead>
  <tbody>
    <?php foreach(read() as $row): ?>
      <tr>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['salary'] ?></td>
        <td><?php echo $row['department'] ?></td>
        <td>
          <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-info">view</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php 
include 'html/foot.php'
?>