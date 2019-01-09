<?php 
require_once 'employee-bl.php';
$bl = new BusinessLogicEmployee;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employee</title>
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
                   
                    <form action='<?php echo basename($_SERVER['PHP_SELF']); ?>'method='POST'>
<label>Enter employee id:
    <input value="id"  name="id" type="number">
</label>
<button name='get'  value="1">Get</button> 
<?php 

if (!empty($_POST['get'])) {
  $valid = false;
  $arrayOfEmployees = $bl->get();
  foreach ($arrayOfEmployees as $item) {
    if($item->getEmployeeId()==$_POST['id']){
      $valid = true;
      break;
    }
    }
   if ($valid == false){
    ?>
    <div class="alert alert-danger">
  <strong><?php echo "This employee does not exist";?></strong>
</div>
    <?php
  }
  else{
$arrayOfEmployee = $bl->getOne($_POST['id']);
?>
         <table class="table">
          
           <thead>
             <tr>
             <th>id</th>
               <th>name</th>
               <th>date</th>
             </tr>
           </thead>
              <tr>

        <td><?php echo $arrayOfEmployee->getEmployeeId()?></td>
        <td><?php echo $arrayOfEmployee->getEmployeeName()?></td>
        <td><?php echo $arrayOfEmployee->getStartOfWorkDate()?></td>
      
      </tr>
      <?php } } ?>
  </form> 
  </div> 

</body>
</html>
 