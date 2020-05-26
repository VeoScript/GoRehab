<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoRehab | User Account</title>
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
        $images = DB::upload_file($_FILES['profilepic']);


        if(!DB::query('SELECT idnumber, fullname FROM users WHERE idnumber=:idnumber OR fullname=:fullname', array(':idnumber'=>$idnumber, ':fullname'=>$fullname))){
            if($password === $repassword){
                DB::query('INSERT INTO users(profile, idnumber, fullname, position, username, password) VALUES(:profile, :idnumber, :fullname, :position, :username, :password)', 
                array(
                ':profile'=>$images,
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

    //Code for Updating User Account
    if(isset($_POST['btnUpdate'])){

        $idnumber = $_POST['idnumber'];
        $fullname = $_POST['fullname'];
        $position = $_POST['position'];
        $username = $_POST['username'];
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $images = DB::upload_file($_FILES['profilepic']);

        $getpassword = DB::query('SELECT password FROM users WHERE idnumber=:idnumber', array(':idnumber'=>$idnumber))[0]['password'];

        if($getpassword === $oldpassword){
            
            if(!empty($newpassword)){
                DB::query('UPDATE users SET profile=:profile, fullname=:fullname, position=:position, username=:username, password=:password WHERE idnumber=:idnumber', 
                array(
                    ':profile'=>$images,
                    ':fullname'=>$fullname,
                    ':position'=>$position,
                    ':username'=>$username,
                    ':password'=>$newpassword,
                    ':idnumber'=>$idnumber
                ));
            }
            else{
                DB::query('UPDATE users SET profile=:profile, fullname=:fullname, position=:position, username=:username, password=:password WHERE idnumber=:idnumber', 
                array(
                    ':profile'=>$images,
                    ':fullname'=>$fullname,
                    ':position'=>$position,
                    ':username'=>$username,
                    ':password'=>$oldpassword,
                    ':idnumber'=>$idnumber
                ));
            }

            $success = "Your account is updated successfully...";
        }
        else{
            $warning = "Your Old Password was incorrect!";
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
    <div class="container-fluid mt-2 mb-3">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-text float-left">User Account&nbsp;&nbsp;<small class="card-text "><i>Accounts List</i></small></h2>
                        <div class="input-group float-right input-group-sm">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#CreateAccountModal">Create Account</button>
                                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#UpdateMyAccountModal">My Account</button>
                            </div>&nbsp;
                            <input type="text" class="form-control" placeholder="Search Employee ID No. or Name" aria-label="Search Employee ID No. or Name" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><span class="fa fa-search"></span></button>
                                <button class="btn btn-outline-secondary" type="button"><span class="fa fa-eraser"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <?php
                            $userslist = $mysqli->query('SELECT profile, idnumber, fullname, position, username FROM users ORDER BY id DESC');
                        ?>
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Profile</th>
                                    <th scope="col">ID No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($getuser = $userslist->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><img src="upload/<?php echo $getuser['profile'];?>" class="rounded" width="30" height="40"></td>
                                    <td><?php echo $getuser['idnumber'];?></td>
                                    <td><?php echo $getuser['fullname'];?></td>
                                    <td><?php echo $getuser['position'];?></td>
                                    <td><?php echo $getuser['username'];?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button Goup Actions">
                                            <button type="button" name="btnupdateuser" id="btnupdateuser" class="btn btn-warning btn-sm">View</button>
                                            <button type="button" name="btndeleteuser" id="btndeleteuser" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
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
    </div>
    <footer>
        <p class="footer-text ml-3">GoRehab 2019 &copy, All rights reserved.</p>
    </footer>
</body>
    <!-- Javascript Links -->
    <script src="vendor/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="vendor/bootstrap-4/js/bootstrap.min.js" charset="utf-8"></script>
    <?php include 'modals.php'?>
</html>