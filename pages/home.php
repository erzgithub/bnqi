<?php
session_start();
if (empty($_SESSION['userSession'])) {
    header("Location : ../index.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#5a2d3a; color:lightblue;">Welcome <strong><?php echo ucfirst($_SESSION['sessionName']) ." ".ucfirst($_SESSION['sessionLname']);?><a href="logout.php" style="text-decoration: none;" class="pull-right">Log Out</a></strong></div>
</div>
<body>
<?php include 'includes/acordian.php'; ?>

<div class="container">
    <div class="col-md-3">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><i class="glyphicon glyphicon-th-list" style="font-size:4.5em;"></i></div>
                        <div class="col-xs-9 text-right" style="font-size:2.5em;">
                            <div>Products</div>
                        </div>
                </div>
            </div>
            <a href="products.php" style="text-decoration:none;">
                <div class="panel-footer">
                    <div>View Products<i class="glyphicon glyphicon-circle-arrow-right pull-right"></i></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-tasks" style="font-size:4.5em;"></i>
                    </div>
                    <div class="col-xs-9 text-right" style="font-size:2em;">
                        <div>Job Orders</div>
                    </div>
                </div>
            </div>
            <a href="joborders.php" style="text-decoration:none;">
                <div class="panel-footer">
                    <div>View Job Orders<i class="glyphicon glyphicon-circle-arrow-right  pull-right"></i></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users" style="font-size:4.5em;"></i>
                    </div>
                    <div class="col-xs-9 text-right" style="font-size:2em;">
                        <div>Customers</div>
                    </div>
                </div>
            </div>
            <a href="customers.php" style="text-decoration:none;">
                <div class="panel-footer">
                    <div>View Customers<i class="glyphicon glyphicon-circle-arrow-right  pull-right"></i></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3" style="margin-right:600px">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-user" style="font-size:4.5em;"></i>
                    </div>
                    <div class="col-xs-9 text-right" style="font-size:2em;">
                        <div>Employees</div>
                    </div>
                </div>
            </div>
            <a href="employee.php" style="text-decoration:none;">
                <div class="panel-footer">
                    <div>View Employees<i class="glyphicon glyphicon-circle-arrow-right  pull-right"></i></div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php include 'includes/acordianjs.php'; ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>