<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        include "shared/csslink.php";
        ?>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <form action="" method="POST">
            <!-- Navigation-->
            <?php
            include "shared/nav.php";
            include "db_connect.php";
            if (!empty($_POST)) {
                $sql="INSERT INTO `category` (`category_name`,`is_active`) VALUES ( '$_POST[category_name]','Yes')";
                $query_insert = mysql_query($sql);
                if ($query_insert) {
                    echo "<script>alert('Data inserted Successfully.');location.replace('view_category.php');</script>";
                }
            }
            ?>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">My Dashboard</li>
                    </ol>
                    <!-- Icon Cards-->
                    <!--Main body Part-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    <!--End Main body part-->
                    <!-- Area Chart Example-->

                </div>
                <!-- /.container-fluid-->
                <!-- /.content-wrapper-->
                <footer class="sticky-footer">
                    <div class="container">
                        <div class="text-center">
                            <small>Copyright © Your Website 2017</small>
                        </div>
                    </div>
                </footer>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include "shared/jslink.php";
                ?>
            </div>
        </form>
    </body>

</html>
