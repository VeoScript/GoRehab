<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoRehab | Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/GoRehab.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="vendor/bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/gostyle.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css"> 
    <script src="vendor/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="vendor/bootstrap-4/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<?php
    //Includes
    include './connection/db.php';
    include './connection/mysqli.php';

    //Code for Updating Bible Verses...
    if(isset($_POST['btnUpdateBible'])){
        $verse = $_POST['verse'];
        $book = $_POST['book'];

        DB::query('DELETE FROM bibleverse');
        DB::query('INSERT INTO bibleverse(verse, book) VALUES(:verse, :book)', array(
            ':verse'=>$verse,
            ':book'=>$book
        ));
        $success = "Bible Verse Updated Successfully.";
    }

    //Getting Bible Verse to Display...
    $getbibleverse = DB::query('SELECT verse FROM bibleverse')[0]['verse'];
    $getbiblebook = DB::query('SELECT book FROM bibleverse')[0]['book'];
?>
<body>
    <?php include 'header.php';?>
    <div class="container-fluid align-center text-center">
        <?php
            if(isset($warning)){
                echo '
                    <div class="row justify-content-center mt-3">
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
                    <div class="row justify-content-center mt-3">
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
                <img class="d-block w-100" src="./img/a1.jpg" height="565" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 id="bv"><?php echo $getfullname;?></h5>
                    <p id="bb" style="font-family: Calibri; font-size: 30px;"><?php echo $getposition;?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/bible.jpg" height="565" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 id="bv"><?php if(isset($getbibleverse)){echo $getbibleverse;}?></h5>
                    <p id="bb" style="font-family: Calibri; font-size: 30px;"><?php if(isset($getbiblebook)){echo $getbiblebook;}?></p>
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
    <div class="container-fluid mt-3 mb-3">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="useraccount.php" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/useraccount2.png" alt="User Account Button">
                                <div class="card-body">
                                    <p class="card-text">USER ACCOUNT</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="" data-toggle="modal" data-target="#RegistrationModal" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/add.png" alt="Registration Button">
                                <div class="card-body">
                                    <p class="card-text">REGISTRATION</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="members.php" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/members.png" alt="Members Button">
                                <div class="card-body">
                                    <p class="card-text">MEMBERS</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="#" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/folder.png" alt="Records Button">
                                <div class="card-body">
                                    <p class="card-text">RECORDS</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Force next columns to break to new line at md breakpoint and up -->
                    <div class="w-100 d-none d-md-block"></div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 14rem;">
                            <a class="cardlink" href="#" style="text-decoration: none;">
                                <img class="card-img-top w-50" src="./icons/areachart.png" alt="GoRehab">
                                <div class="card-body">
                                    <p class="card-text">PROGRESS MONITOR</p>
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
                    <div class="col-sm-3 mb-3">
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