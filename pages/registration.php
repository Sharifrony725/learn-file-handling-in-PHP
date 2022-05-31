<?php include './includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>All Students Info goes Here.</h3>
                    </div>
                    <div class="card-body">
                     <?php
                        if(isset($message)){ ?>
                            <h4 class="text-center text-success"><?php echo $message;?></h4>
                     <?php   } ?>
                        <form action="register.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" placeholder="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" placeholder="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile" placeholder="mobile">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control-file" name="image" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-for-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './includes/footer.php'; ?>