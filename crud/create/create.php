<?php require('create_controller.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="./../../layout/common/css/main.css">
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
                        <span class="help-block"><?php echo $name_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                        <label>Address</label>
                        <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                        <span class="help-block"><?php echo $address_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                        <label>Salary</label>
                        <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                        <span class="help-block"><?php echo $salary_err; ?></span>
                    </div>
                    <div style="padding-top: 25px">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../../index.php" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>