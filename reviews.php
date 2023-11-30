<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="comment.php">Comments</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">reviews</div>
            <a href="logout.php">Logout</a>
        </div>
        <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Everything</option>
                    <option value="Titles">Titles</option>
                    <option value="Descriptions">Descriptions</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="subreview">
            <div class="subreview-title">
                <h1>General Information</h1>
            </div>
            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: ""</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: ""</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: ""</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: ""</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: ""</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: ""</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>30 Nov 2023</small>
                </div>
            </div>

            <div class="subreview-row">
                <div class="subreview-icon subreview-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subreview-description subreview-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: ""</p>
                </div>
                <div class="subreview-stats subreview-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subreview-info subreview-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>30 Nov 2023</small>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <span>&copy;  Auto Insights | All Rights Reserved</span>
    </footer>
    <script src="main.js"></script>
</body>
</html>