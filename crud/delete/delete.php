<?php require ('delete_controller.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>View Record</title>
</head>

<script>
    var req = new XMLHttpRequest();
    req.onload = function() {
        document.getElementById('includedheader').innerHTML = this.responseText;
    }
    req.open("get", "../../layout/common/html/header.html", true);
    req.send();
</script>
<div id="includednavigation">

</div>
<body>
    <div class="wrapper container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="../../index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<div id="includefooter">
</html>