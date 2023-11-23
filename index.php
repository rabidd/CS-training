<!DOCTYPE html>
<html lang="en" class="blue-gradient" >

<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>Dashboard</title>
<script type="text/javascript" src="./layout/common/JS/dateTime.js"></script>
<link rel="stylesheet" href="./layout/common/css/main.css">
<script>
    var req = new XMLHttpRequest();
    req.onload = function() {
        document.getElementById('includedheader').innerHTML = this.responseText;
    }
    req.open("get", "./layout/common/html/header.html", true);
    req.send();
</script>

<div id="includednavigation">
<script>
    var req = new XMLHttpRequest();

req.onload = function() {
            document.getElementById('includednavigation').innerHTML = this.responseText;
        }
        req.open("get", "./layout/common/html/navigation.html", true);
        req.send();
</script>
</div>

<body onload="refreshTime();">
    <div class="wrapper container">
        <div class="container-fluid">
                     <div class="page-header clearfix">
                                            <h2 class="pull-left">Employees Details</h2>

                                        </div>
            <div id='dtOrderExamplerow' class="row">

                <div class="col-md-11">

                        <?php include('layout/employee_table.php') ?>
                </div>

            <div class="col-md-1">
                <a href="crud/create/create.php" class="btn btn-success pull-right">Add New Employee</a>
            </div>
            </div>
        </div>
    </div>
    </div>

</body>


<div id="includefooter">

<script>
    var req = new XMLHttpRequest();

req.onload = function() {
            document.getElementById('includefooter').innerHTML = this.responseText;
        }

        req.open("get", "./layout/common/html/footer.html", true);
        req.send();

</script>
</div>
</html>