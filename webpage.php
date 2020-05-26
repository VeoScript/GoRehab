<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoRehab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/GoRehab.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="vendor/bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/gostyle.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css"> 
</head>
<?php
    session_start();
    //Includes
    include './connection/db.php';
    include './connection/mysqli.php';

    //Getting Bible Verse to Display...
    $getbibleverse = DB::query('SELECT verse FROM bibleverse')[0]['verse'];
    $getbiblebook = DB::query('SELECT book FROM bibleverse')[0]['book'];

    //Code for Login and Sessions...
    if(isset($_POST['btnLogin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))){
            if(DB::query('SELECT password FROM users WHERE password=:password', array(':password'=>$password))){
                $_SESSION['getprofilepic'] = DB::query('SELECT profile FROM users WHERE username=:username', array(':username'=>$username))[0]['profile'];
                $_SESSION['getidnumber'] = DB::query('SELECT idnumber FROM users WHERE username=:username', array(':username'=>$username))[0]['idnumber'];
                $_SESSION['getfullname'] = DB::query('SELECT fullname FROM users WHERE username=:username', array(':username'=>$username))[0]['fullname'];
                $_SESSION['getposition'] = DB::query('SELECT position FROM users WHERE username=:username', array(':username'=>$username))[0]['position'];
                $_SESSION['getusername'] = DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))[0]['username'];
                //This is how we'll know the user is logged in
                $_SESSION['LOGGED_IN'] = true;
                header('location:index.php');
            }
            else{
                $warning = "Your password is incorrect. Try again!";
            }
        }
        else{
            $warning = "This account does not exsist. Try again!";
        }
    }
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./img/GoRehab.png" width="100" class="d-inline-block align-top" alt="GoRehab">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#AboutModal">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#LoginModal">Login</a>
                </li>
            </ul>
            <span class="navbar-text">
                GoRehab Rehabilitation Center <br>
                <span class="nt-1">Bato, Leyte, Philippines <br> Tel./Cell No. (053) 354-5892 / 09750047554</span>
            </span>
        </div>
    </nav>
    <div class="container-fluid align-center text-center">
        <?php
            if(isset($warning)){
                echo '
                    <div class="row justify-content-center mt-2">
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
                    <div class="row justify-content-center mt-2">
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./img/intro6.jpg" height="565" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <span><img src="./img/GoRehab.png" width="500" class="d-inline-block align-top" alt="GoRehab"></span>
                    <h1 style="color: #000;">Begin a New Life</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/join2.jpg" height="565" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>JOIN TO GoRehab REHABILITATION CENTER TO BEGIN A NEW LIFE</h5>
                    <p> <img src="./img/GoRehab.png" width="200" class="d-inline-block align-top" alt="GoRehab"></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/flag.jpg" height="565" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PROTECT OUR NATION</h5>
                    <p> <img src="./img/GoRehab.png" width="200" class="d-inline-block align-top" alt="GoRehab"></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12  mb-4">
                <h2 class="webtitle">Welcome to GoRehab Webpage to Everyone.</h2>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="" style="text-decoration: none;" data-toggle="modal" data-target="#ViewBibleVerseModal">
                                <img class="card-img-top w-50" src="./icons/bible.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">VERSE FOR TODAY</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="#" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/employee.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">EMPLOYEES & STAFFS</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="#" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/greentech.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">GoRehab PLATFORMS</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-5">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="#" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/alumni.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">GoRehab ALUMNI</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 logointro">
                <div class="row">
                    <div class="col-sm-12">
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
    <!-- VIEW BIBLE VERSE FOR TODAY MODAL DESIGN -->
    <div class="modal fade" id="ViewBibleVerseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verse for Today</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h5 style="font-weight: bolder;"><?php if(isset($getbibleverse)){echo $getbibleverse;}?></h5>
                <p class="mt-5" style="font-family: Calibri; font-size: 18px;"><?php if(isset($getbiblebook)){echo $getbiblebook;}?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- END -->
</body>
    <!-- Javascript Links -->
    <script src="vendor/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="vendor/bootstrap-4/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- Modals Link -->
    <?php include 'modals.php'?>
</html>