<?php
    include("includes/config.php");

    //session_destroy(); for logout

    if(isset($_SESSION['userLoggedIn'])){
        $userLoggedIn = $_SESSION['userLoggedIn'];
    }
    else {
        header("Location: register.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Slotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

    <div id="mainContainer">

        <div id="topContainer">
            <div id="navBarContainer">
                <nav class="navBar">
                    <a href="index.php" class="logo">
                        <img src="assets/images/icons/logo.png" alt="">
                    </a>

                    <div class="group">

                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Search
                                <img src="assets/images/icons/search.png" class="icon" alt="Search">
                            </a>
                        </div>

                    </div>

                    <div class="group">

                    <div class="navItem">
                            <a href="search.php" class="navItemLink">Browse</a>
                        </div>

                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Your music</a>
                        </div>

                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Your profile</a>
                        </div>

                    </div>
                </nav>
            </div>
        </div>

        <div id="nowPlayingBarContainer">
            <div id="nowPlayingBar">

            <div id="nowPlayingLeft">
                <div class="content">
                    <span class="albumLink">
                        <img class="albumArtwork" src="http://clipart-library.com/img/2008830.jpg"alt="">
                    </span>
                    <div class="trackInfo">
                        <span class="trackName">
                            <span>Happy Birthday</span>
                        </span>
                        <span class="artistName">
                            <span>Artist</span>
                        </span>
                    </div>
                </div>

            </div>

            <div id="nowPlayingCenter">

                <div class="content playerControls">

                    <div class="buttons">
                        <button class="controlButton shuffle" title="Shuffle button" alt="Shuffle">
                            <img src="assets/images/icons/shuffle.png" alt="">
                        </button>

                        <button class="controlButton previous" title="Previous button" alt="Previous">
                            <img src="assets/images/icons/previous.png" alt="">
                        </button>

                        <button class="controlButton play" title="Play button" alt="Play">
                            <img src="assets/images/icons/play.png" alt="">
                        </button>

                        <button class="controlButton next" title="Next button" alt="Next">
                            <img src="assets/images/icons/next.png" alt="">
                        </button>

                        <button class="controlButton repeat" title="Repeat button" alt="Repeat">
                            <img src="assets/images/icons/repeat.png" alt="">
                        </button>
                    </div>

                    <div class="playbackBar">
                        <span class="progressTime current">0.00</span>
                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                        <span class="progressTime remaining">0.00</span>
                    </div>

                </div>

            </div>

            <div id="nowPlayingRight">

                <div class="volumeBar">
                    <button class="controlButton volume" title="Volume Button">
                        <img src="assets/images/icons/volume.png" alt="Volume Button">
                    </button>
                    <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                </div>

            </div>



            </div>
        </div>

    </div>


</body>
</html>