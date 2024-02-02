<?php require('read_controller.php'); ?>
<!DOCTYPE html>
<html lang="en" class="aqua-gradient">
<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>View Record</title>
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
            href="./../../layout/common/css/main.css"
            rel="stylesheet"
            type="text/css"
    >
</head>
<body>
<div id="includednavigation" class="includednavigation"></div>
<div class="wrapper container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>View Record</h1>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <p class="form-control-static"><?php echo $row["name"]; ?></p>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <p class="form-control-static"><?php echo $row["address"]; ?></p>
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <p class="form-control-static"><?php echo $row["salary"]; ?></p>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <p class="form-control-static"><?php echo $row["date"]; ?></p>
                </div>
                <div>
                    <a href="javascript:history.back()">
                        <button type="button" class="btn btn-warning data-mdb-ripple-init">Back</button>
                    </a>

                    <?php echo "<a href='../update/update.php?id=" . $row['id'] . "' title='Update Record' ><i class='btn btn-primary'>Update</i></a>"; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>