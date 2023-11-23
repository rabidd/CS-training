<?php require ('read_controller.php'); ?>
<!DOCTYPE html>
<html lang="en" class="aqua-gradient" >
<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>View Record</title>
<script>
    var req = new XMLHttpRequest();

    req.onload = function() {
        document.getElementById('includedheader').innerHTML = this.responseText;
    }
    req.open("get", "../../layout/common/html/header.html", true);
    req.send();
</script>
</head>

<body>
</div>
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
                    <p><a href="../../index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>