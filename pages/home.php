<?php include './includes/header.php';?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Auto Generated Password</h3>
                        </div>
                        <div class="card-body">
                                <form action="process.php" method="post">
                                    <div class="form-group row">
                                        <label for="" class="col-for-label col-md-3">Enter your password length</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="given_length">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-for-label col-md-3">Result</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?php echo isset($result) ? $result : ' ' ;?>">
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
    <?php include './includes/footer.php';?>