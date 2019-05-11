<?php include 'lib/database.php';?>
<?php

$db = new Database();
if(isset ($_POST['submit'])){
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);
    $phoneNumber = mysqli_real_escape_string($db->link, $_POST['phoneNumber']);
    $gender = mysqli_real_escape_string($db->link, $_POST['gender']);
    $location = mysqli_real_escape_string($db->link, $_POST['location']);
    $freeSchedule = mysqli_real_escape_string($db->link, $_POST['freeSchedule']);
//    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    if ($name==''||$phoneNumber==''||$gender==''||$location==''||$freeSchedule==''){
        $error ="Field must not be empty !!";
    } else {
        $query ="INSERT INTO add_emp_dental(name, category, phoneNumber, gender, location, freeSchedule) Values('$name', '$category', '$phoneNumber', '$gender', '$location', '$freeSchedule')";
        $create =$db->insert($query);
    }
    
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Family Care</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logoo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logoo.png" alt="Logo"></a>
            </div>

            
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Family Care</a>
                    </li>
                    <h3 class="menu-title">User Interface</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Cardiology</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-card-o"></i><a href="add_emp_cardiology.php">ADD Employee</a></li>
                            <li><i class="fa fa-laptop"></i><a href="view_cardiology.php">View</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Neurology</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-card-o"></i><a href="add_emp_neurology.php">ADD Employee</a></li>
                            <li><i class="fa fa-laptop"></i><a href="view_neurology.php">View</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Dental</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-card-o"></i><a href="add_emp_dental.php">ADD Employee</a></li>
                            <li><i class="fa fa-laptop"></i><a href="view_dental.php">View</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Dermitology</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-card-o"></i><a href="add_emp_dermitology.php">ADD Employee</a></li>
                            <li><i class="fa fa-laptop"></i><a href="view_dermitology.php">View</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Radiology</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-card-o"></i><a href="add_emp_radiology.php">ADD Employee</a></li>
                            <li><i class="fa fa-laptop"></i><a href="view_radiology.php">View</a></li>
                        </ul>
                    </li>
                    
                                                           
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.php">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.php">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.php">Forget Pass</a></li>
                        </ul>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                   
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <form action="add_emp_dental.php" method="post">
                        <table>
                            <div class="card" style="margin-left: 20px">
                                <div class="card-header" style="font-size: 35px">
                                    <strong>Sign up</strong> <small>Add Empolyee On Dental</small>
                                </div>
                                <tr>
                                    <td>
                                        <?php 
                                if(isset($error)){
                                echo "<span style='color:red; margin-left:20px'>".$error."</span>";
                                }
                                else if(isset($create)){
                                    echo "<span style='color:green; margin-left:20px'>Data Inserted succssfully.</span>";
                                }
                                ?>
                                        <div class="form-group" style="margin-left: 20px; ">
                                            <label class=" form-control-label">Full Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                                <input style="width: 1000px;" type="text" name="name" />
                                            </div>
                                            <small class="form-text text-muted">ex. Nazirul Islam</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group" style="margin-left: 20px;">
                                            <label class=" form-control-label">Category</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-certificate"></i></div>
                                                <input style="width: 1000px;" type="text" name="category" value="Dental" />
                                            </div>
                                            <small class="form-text text-muted">ex. Dental</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group" style="margin-left: 20px;">
                                            <label class=" form-control-label">Phone Number</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input style="width: 1000px;" type="text" name="phoneNumber" value="+8801"/>
                                            </div>
                                            <small class="form-text text-muted">ex. +8801532397299</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group" style="margin-left: 20px;">
                                            <label class=" form-control-label">Choose Gender</label>
                                            <br>
                                            <select class="standardSelect" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>
                                        <div class="form-group" style="margin-left: 20px;">
                                            <label class=" form-control-label">Choose Location</label>
                                            <br>
                                            <select class="standardSelect" name="location">
                                                <option value="Jatrabai, Dhaka - Bangladesh.">Jatrabai, Dhaka - Bangladesh.</option>
                                                <option value="Uttora, Dhaka - Bangladesh.">Uttora, Dhaka - Bangladesh.</option>
                                                <option value="Lalbagh, Dhaka - Bangladesh.">Lalbagh, Dhaka - Bangladesh.</option>
                                                <option value="Gulsan, Dhaka - Bangladesh.">Gulsan, Dhaka - Bangladesh.</option>
                                                <option value="Badda, Dhaka - Bangladesh.">Badda, Dhaka - Bangladesh.</option>
                                                <option value="Khilkhet, Dhaka - Bangladesh.">Khilkhet, Dhaka - Bangladesh.</option>
                                                <option value="Polton, Dhaka - Bangladesh.">Polton, Dhaka - Bangladesh.</option>
                                                <option value="Demra, Dhaka - Bangladesh.">Demra, Dhaka - Bangladesh.</option>
                                                <option value="Dhanmondi, Dhaka - Bangladesh.">Dhanmondi, Dhaka - Bangladesh.</option>
                                                <option value="Bonani, Dhaka - Bangladesh.">Bonani, Dhaka - Bangladesh.</option>
                                                <option value="Old Town, Dhaka - Bangladesh.">Old Town, Dhaka - Bangladesh.</option>
                                                <option value="Mohammadpur, Dhaka - Bangladesh.">Mohammadpur, Dhaka - Bangladesh.</option>
                                                <option value="Savar, Dhaka - Bangladesh.">Savar, Dhaka - Bangladesh.</option>
                                                <option value="Azimpur, Dhaka - Bangladesh.">Azimpur, Dhaka - Bangladesh.</option>
                                                <option value="Bonisri, Dhaka - Bangladesh.">Bonisri, Dhaka - Bangladesh.</option>
                                                <option value="Moghbazar, Dhaka - Bangladesh.">Moghbazar, Dhaka - Bangladesh.</option>
                                                <option value="Rajarbagh, Dhaka - Bangladesh.">Rajarbagh, Dhaka - Bangladesh.</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group" style="margin-left: 20px;">
                                            <label class=" form-control-label">Free Schedule</label>
                                            <br>
                                            <select class="standardSelect" name="freeSchedule">
                                                <option value="8AM-4PM">8AM-4PM</option>
                                                <option value="4PM-10PM">4PM-10PM</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                <td>
                                    <input style="margin-left:20px; margin-bottom: 25px" type="submit" name="submit" value="Submit" />
                                    <input type="reset" Value="Cancel" />
                                </td>
                                </tr>
                            </div>
                            <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
                            <script src="assets/js/popper.min.js"></script>
                            <script src="assets/js/plugins.js"></script>
                            <script src="assets/js/main.js"></script>
                            <script>
                                jQuery(document).ready(function() {
                                    jQuery(".standardSelect").chosen({
                                        disable_search_threshold: 10,
                                        no_results_text: "Oops, nothing found!",
                                        width: "100%"
                                    });
                                });
                            </script>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>