<?php include './includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Students List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $key => $student) { ?>
                                    <tr>
                                        <td><?php echo $student['name']; ?></td>
                                        <td><?php echo $student['email']; ?></td>
                                        <td><?php echo $student['mobile']; ?></td>
                                        <td><img width="100px" ;height="150px" src="<?php echo $student['image'];  ?>" alt="" srcset=""></td>
                                        <td>
                                            <a href="http://" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="http://" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php    } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './includes/footer.php'; ?>