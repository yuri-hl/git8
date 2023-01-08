<?php
include 'connection.php';

function create($fname, $lname, $salary, $dept){ // function to create a data
  $conn = connect_db(); // passing connect_db conn into variable conn
  $sql = "INSERT INTO employees(first_name, last_name, salary, department) VALUES('$fname','$lname','$salary','$dept')";  // sql to create data. considerd as just a string
  $result = $conn -> query($sql); // execute the sql variable inside phpmyAdmin. meaning creating a new record. let the $result hold the result of execution. $conn has-> query

  if($result == True){ // checking if $result(line7) is True. meaning if the SQL was executed successfully.
    return TRUE;
  }else{
    return die('Error '.$conn -> error);
  }

  //connect_db() -> query("INSERT....");
}
function read(){
  // display all data  
  // memorize the three lines
  $conn = connect_db();
  $sql = "SELECT * FROM employees";
  $result = $conn -> query($sql);

  if($result->num_rows > 0){ //if there is at least one data in table
    while($row = $result -> fetch_assoc()){ // fetch_assoc will get each data from table and pass it to variable $row. defining and using $row at the same time
      $rows[] = $row; //get the data from $row and pass it inside array $rows
     }
    return $rows; // return the array $rows. meaning the read() holds an array
  }
}
function show($id){
  // display one data 
  $conn = connect_db();
  $sql = "SELECT * FROM employees WHERE id = '$id'";
  $result = $conn -> query($sql);

  if($result->num_rows == 1){ 
    return $result -> fetch_assoc(); //let show() hold the result of query
  }
}

function update($id, $firstname, $lastname, $salary, $department){
  // update data
  $conn = connect_db();
  $sql = "UPDATE employees SET first_name ='$firstname', last_name = '$lastname', salary = '$salary', department ='$department' WHERE id = '$id'";
  $result = $conn -> query($sql);

  if($result){
    // return TRUE;
    header('location:read.php');  // redirect to read.php when suceeded
  }else{
    return die('Error! '.$conn->error);
  }
  

}
function delete($id){
  // delete data

  $conn = connect_db();
  $sql = "DELETE FROM employees WHERE id = '$id'";
  $result = $conn -> query($sql);

  if($result){
    // return TRUE;
    header('location:read.php');
  }else{
    return die('Error! '.$conn->error);
  }
}
// connect_db -> query($sql)
// $sql = "delete from employees where id = '$id'")
// if
?>