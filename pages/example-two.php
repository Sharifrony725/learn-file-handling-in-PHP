<?php include './includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Please upload the file</h3>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control  file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn1" class="btn btn-outline-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                            </tr>
                            <tr>
                                <td><?php echo isset($name) ? $name : ' ' ?></td>
                                <td><img src="<?php echo isset($image) ? $image : ' ' ?>" width="100px" height="150px" alt="" srcset=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './includes/footer.php'; ?>