<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        include "shared/csslink.php";
        ?>
        <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Navigation-->
            <?php
            include "shared/nav.php";
            include "db_connect.php";
            $datetime=date('Y-m-d H:i:s');
            $user_name=$_SESSION['user_name'];
            if (!empty($_POST)) {
                $target_dir = "uploads/";
                $extra=time();
                $target_file = $target_dir .$extra."_". basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
// Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
// Check file size
                if ($_FILES["fileToUpload"]["size"] > 2000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
// Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $query_insert = mysql_query("INSERT INTO `news` ( `news_title`, `category`, `porpular`, `banner`, `news_description`, `photo`,`insert_by`,`insert_datetime` ) VALUES ( '$_POST[news_title]', '$_POST[category]', '$_POST[porpular]', '$_POST[banner]', '$_POST[news_description]', '$target_file','$user_name','$datetime' )");
                        if ($query_insert) {
                            echo "<script>alert('Data inserted Successfully.');location.replace('view_news.php');</script>";
                        }
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
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
                                <label for="news_title">News Title</label>
                                <input type="text" class="form-control" id="news_title" name="news_title" placeholder="News Title" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select type="password" class="form-control" id="category" name="category" placeholder="Password" required>
                                    <option value="">Select Category</option>
                                    <?php
                                    $query = mysql_query("Select * from category order by id asc");
                                    while ($row = mysql_fetch_array($query)) {
                                        ?>
                                        <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categoy">Popular</label>
                                <select type="password" class="form-control" id="porpular" name="porpular" placeholder="Password" required>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categoy">Banner</label>
                                <select type="password" class="form-control" id="banner" name="banner" placeholder="Password" required>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fileToUpload">Photo</label>
                                <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="news_description">News Description</label>
                                <textarea class="form-control" id="news_description" name="news_description" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                <script>
                    CKEDITOR.replace('news_description');
                </script>
            </div>
        </form>
    </body>

</html>
