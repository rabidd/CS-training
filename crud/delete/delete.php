<?php require('delete_controller.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head id="includedheader" style="overflow: hidden;">
    <meta charset="UTF-8">
    <title>View Record</title>
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
                            <a href="javascript:history.back()" class="btn btn-default">No</a>
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