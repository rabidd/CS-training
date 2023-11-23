<?php require ('create_controller.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="./../../layout/common/css/main.css">
</head>

<script>
    var req = new XMLHttpRequest();
    req.onload = function() {
        document.getElementById('includedheader').innerHTML = this.responseText;
    }
    req.open("get", "./../../layout/common/html/header.html", true);
    req.send();
</script>
<body>

    <div class="wrapper container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2 style="color: black;">Create Record</h2>
                </div>
                <p>Please fill this form and submit to add employee record to the database.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block"><?php echo $name_err;?></span>
                </div>
                <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                    <label>Address</label>
                    <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                    <span class="help-block"><?php echo $address_err;?></span>
                </div>
                <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                    <span class="help-block"><?php echo $salary_err;?></span>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="../../index.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>