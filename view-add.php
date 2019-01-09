<?php
require_once './employee-bl.php';
$bl = new BusinessLogicEmployee;
$arrayOfEmployees = $bl->get();
if(!empty($_POST['employeeid']) && !empty($_POST['employeename']) &&  !empty($_POST['employeedate'])) {
  if (strlen($_POST['employeename']) > 30) {
    ?>
    <div class="alert alert-danger">
  <strong><?php echo "over 30 chars";?></strong>
  </div>
    <?php
  }
    else{
        $valid = true;
  foreach ($arrayOfEmployees as $item) {
    if($item->getEmployeeId()==$_POST['employeeid']){
      $valid = false;
        ?>
        <div class="alert alert-danger">
      <strong><?php echo "This employee exist already";?></strong>
    </div>
        <?php
    }
  }
   if ($valid == true){
    $employee = new EmployeeModel([
        'employee_id' =>  $_POST['employeeid'],
        'employee_name' => $_POST['employeename'],
        'start_of_work_date' => $_POST['employeedate']
    ]);
 
    $bl->set($employee);
}
}
}
$arrayOfEmployees = $bl->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employee</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>
<body>
<div class="container">
<header>
<nav class="navbar navbar-default">
                        <div class="container-fluid">
                          <div class="navbar-header">
                            <a class="navbar-brand" href="#">employees</a>
                          </div>
                          <ul class="nav navbar-nav">
                            <li><a href="view-add.php">add employee</a></li>
                            <li><a href="view-delete.php">delete employee</a></li>
                            <li><a href="view-get-all.php">get all employees</a></li>
                            <li><a href="view-get-employee.php">get employee by id</a></li>
                            <li><a href="view-update.php">update employee</a></li>
                          </ul>
                        </div>
                      </nav>
                    </header>
<form action='<?php echo basename($_SERVER['PHP_SELF']); ?>' method='POST'>
<div class="row">
  <div class="form-group col-md-4">
    <label for="id">employee id</label>
    <input type="number" class="form-control" id="id" name="employeeid" required>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-4">
    <label for="name">employee name</label>
    <input type="text" class="form-control" id="name" name="employeename" required>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-4">
    <label for="date">start of work date</label>
    <input type="date" class="form-control" id="date" name="employeedate" required>
  </div>
  </div>
  <button type="submit" class="btn btn-default" name="addnew" onclick="validation(event)">add new</button>
</form>
</div> 
<script>
    function validation(e)
    {
            if ($("#name").val().length>30)
            {
                alert ("limited to 30 characters");
                e.preventDefault();
              return false;
            }

    }
    </script>


</body>
</html>