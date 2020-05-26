<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoRehab | Members</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/GoRehab.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="vendor/bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/gostyle.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css"> 
</head>
<?php
    //Includes
    include './connection/db.php';
    include './connection/mysqli.php';

    // Code for User Account Form...
    if(isset($_POST['btnCreate'])){
        $idnumber = $_POST['idnumber'];
        $fullname = $_POST['fullname'];
        $position = $_POST['position'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        if(!DB::query('SELECT idnumber, fullname FROM users WHERE idnumber=:idnumber OR fullname=:fullname', array(':idnumber'=>$idnumber, ':fullname'=>$fullname))){
            if($password === $repassword){
                DB::query('INSERT INTO users(idnumber, fullname, position, username, password) VALUES(:idnumber, :fullname, :position, :username, :password)', 
                array(
                ':idnumber'=>$idnumber,
                ':fullname'=>$fullname,
                ':position'=>$position,
                ':username'=>$username,
                ':password'=>$password
                ));
                $success = "Account Created Successfully!";
            }
            else{
                $warning = "Password did not match. Try again!";
            }
        }
        else{
            $warning = "This account is already created. Try again!";
        }
    }
?>
<body>
    <?php include 'header.php';?>
    <div class="container-fluid align-center mt-3 text-center">
        <?php
            if(isset($warning)){
                echo '
                    <div class="row justify-content-center">
                        <div class="col-sm-5">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> &nbsp;'. $warning .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div> 
                ';
            }

            if(isset($success)){
                echo '
                    <div class="row justify-content-center">
                        <div class="col-sm-5">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> &nbsp;'. $success .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div> 
                ';
            }
        ?>   
    </div>
    <div class="container-fluid mt-3 mb-3">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-text float-left">Members List</h2>
                        <div class="input-group float-right input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Employee ID No. or Name" aria-label="Search Employee ID No. or Name" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><span class="fa fa-search"></span></button>
                                <button class="btn btn-outline-secondary" type="button"><span class="fa fa-eraser"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">ID No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GO-19234</td>
                                    <td>Jerome Villaruel</td>
                                    <td>Manager</td>
                                    <td>jeromevillarue43</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button Goup Actions">
                                            <button type="button" class="btn btn-warning btn-sm">Update</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GO-19234</td>
                                    <td>Jerome Villaruel</td>
                                    <td>Manager</td>
                                    <td>jeromevillarue43</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button Goup Actions">
                                            <button type="button" class="btn btn-warning btn-sm">Update</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="width: 25rem; border: none;">
                            <img class="card-img-top" src="./img/GoRehab.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <footer>
        <p class="footer-text ml-3">GoRehab 2019 &copy, All rights reserved.</p>
    </footer>
</body>
    <!-- Javascript Links -->
    <script src="vendor/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="vendor/bootstrap-4/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- Modals Link -->
    <?php include 'modals.php'?>
</html>