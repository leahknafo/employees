
<?php
    require_once './employee-bl.php';
    $bl = new BusinessLogicEmployee;
    $arrayOfEmployees = $bl->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employee</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
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
    

<table class="table table-striped">
    <thead>
      <tr>
        <th>employee id</th>
        <th>employee name</th>
        <th>start of work date</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($arrayOfEmployees as $item) { ?> 
      <tr>
        <td><?php echo $item->getEmployeeId()?></td>
        <td><?php echo $item->getEmployeeName()?></td>
        <td><?php echo $item->getStartOfWorkDate()?></td>
      </tr>
    </tbody>
    <?php }?>
  </table>
  </div>
  </body>
</html>