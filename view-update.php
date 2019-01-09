
<?php
require_once './employee-bl.php';
$bl = new BusinessLogicEmployee;

if (!empty($_POST['saveupdate'])) {
    $save = $bl->getOne($_POST['saveupdate']); 
    $save->setEmployeeName($_POST['updatename']);
    $save->setStartOfWorkDate($_POST['updatestartofwork']);
    
    $bl->update($save);
?>
    <div class="alert alert-success">
  <strong><?php echo "Employee successfully updated!"?></strong>
</div>
    <?php
}
$arrayOfEmployees = $bl->get();
?>
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
  <table class="table table-striped">
    <thead>
      <tr>
        <th>employee id</th>
        <th>employee name</th>
        <th>start of work date</th>
        <th>update</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($arrayOfEmployees as $item) {
        if (!empty($_POST['update']) && $_POST['update'] == $item->getEmployeeId()) { 
        ?> 
      <tr>
        <td><?php echo $item->getEmployeeId()?></td>
        <td><input name='updatename' value='<?php echo $item->getEmployeeName() ?>'></td>
        <td><input name='updatestartofwork' value='<?php echo $item->getStartOfWorkDate()?>'></td>
        <td><button value='<?php echo $item->getEmployeeId() ?>' name='saveupdate' class="btn btn-secondary">save</button></td>
      </tr>
        <?php } else { ?>
        <tr>
        <td><?php echo $item->getEmployeeId()?></td>
        <td><?php echo $item->getEmployeeName()?></td>
        <td><?php echo $item->getStartOfWorkDate()?></td>
        <td><button value='<?php echo $item->getEmployeeId() ?>' name='update' class="btn btn-secondary">Update</button></td>
      </tr>
    <?php }} ?>
    </tbody>
  </table>
  </form>
</div>
</body>
</html>