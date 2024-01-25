<!DOCTYPE html>
<html lang="en" class="blue-gradient">
<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script type="text/javascript" src="./layout/common/JS/dateTime.js"></script>
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
            type="text/css"
    >
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    >
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
            rel="stylesheet"
            type="text/css"
    >
    <link
            href="./layout/common/css/main.css"
            rel="stylesheet"
            type="text/css"
    >
</head>
<div id="includednavigation" class="includednavigation">
    <script>
        var req = new XMLHttpRequest();
        req.onload = function () {
            document.getElementById('includednavigation').innerHTML = this.responseText;
        }
        req.open("get", "./layout/common/html/navigation.html", true);
        req.send();
    </script>
</div>

<body class="preload" onload="refreshTime();">
<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js">
</script>
<div class="wrapper container pad">
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
</body>

<div id="includefooter">

    <script>
        var req = new XMLHttpRequest();

        req.onload = function () {
            document.getElementById('includefooter').innerHTML = this.responseText;
        }
        req.open("get", "./layout/common/html/footer.html", true);
        req.send();

    </script>
</div>
</html>