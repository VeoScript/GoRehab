<?php
    session_start();
    //Code for detecting the user account if is it login...
    if($_SESSION['LOGGED_IN'] != 1){
        header('location:webpage.php');
    }
    else{
        $getprofilepic = $_SESSION['getprofilepic'];
        $getidnumber = $_SESSION['getidnumber'];
        $getfullname = $_SESSION['getfullname'];
        $getposition = $_SESSION['getposition'];
        $getusername = $_SESSION['getusername'];
    }

    //Code for LOGOUT
    if(isset($_POST['btnLogout'])){
        $_SESSION['LOGGED_IN'] = 0;
        header('location:webpage.php');
    }

    //Dislpaying Profile Picture
    $displayprofilepic = DB::query('SELECT profile FROM users WHERE idnumber=:idnumber', array(':idnumber'=>$getidnumber))[0]['profile'];
?>
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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#AboutModal">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#BibleVerseModal">Bible Verse</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Sign Out</a> -->
                    <form action="header.php" method="post">
                        <button class="nav-link btn btn-link" name="btnLogout" type="submit">Log Out</button>
                    </form>
                </li>
            </ul>
            <span class="navbar-text">
                GoRehab Rehabilitation Center <br>
                <span class="nt-1">Bato, Leyte, Philippines <br> Tel./Cell No. (053) 354-5892 / 09750047554</span>
            </span>
        </div>
    </nav>
