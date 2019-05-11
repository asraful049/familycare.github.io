<?php include 'inc/header.php';?>
<?php
$db = new Database();
$query ="SELECT * FROM add_emp_dermitology";
$read =$db->select($query);

 ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Profile</h1>
                    </div>
                </div>
            </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">

                                <tr>
                                  <th scope="col"></th>
                                  <th scope="col">ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Category</th>
                                  <th scope="col">Free Schedule</th>
                                  <th scope="col">Gender</th>
                                  <th scope="col">Location</th>
                                  <th scope="col">Phone Number</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php if($read){?>
                                <?php while($row = $read->fetch_assoc()) {?>
                                <tr>
                                    <td scope="row"></td>
                                    <td scope="col">
                                    <?php echo $row['id'];?></td>
                                    <td scope="col">
                                    <?php echo $row['name'];?></td>
                                    <td scope="col">
                                    <?php echo $row['category'];?></td>
                                    <td scope="col">
                                    <?php echo $row['freeSchedule'];?></td>
                                    <td scope="col">
                                    <?php echo $row['gender'];?></td>
                                    <td scope="col">
                                    <?php echo $row['location'];?></td>
                                    <td scope="col">
                                    <?php echo $row['phoneNumber'];?></td>
                                    <td ><p><b><a href="update_dermitology.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></b></p></td>
                                </tr>
                              <?php }?>
                              <?php } else {?>
                              <p>Data is not available !!</p>
                              <?php }?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
