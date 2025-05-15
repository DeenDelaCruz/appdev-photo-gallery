<!DOCTYPE html>
<html>
<head>
	<title>Photo gallery</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/lightbox.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/lightbox.js"></script>            
</head>
    <style>
        body {
            background-color: #0d0d0d;
        }
        .thumbnail {
            background-color: #5D1B1D;
        }
        .carousel-inner > .item > img {
        margin: 0 auto;
        }
        .carousel-indicators li {
        background-color: #555; 
        }

        .carousel-indicators .active {
        background-color: #222;
        }
        .carousel-control.left,
        .carousel-control.right {
        background-image: none; 
        color: #222; 
        }

        .carousel-control:hover,
        .carousel-control:focus {
        color: #000;
        }

        .glyphicon-chevron-left,
        .glyphicon-chevron-right {
        color: #222; 
        }
        
        .navbar-custom {
        background-color: #3D0002; 
        border-color: #080808;  
        }
        
        .navbar-custom .navbar-brand, .navbar-custom .navbar-nav >li > a {
            color:white;
        }

        .navbar-custom .navbar-brand:hover, .navbar-custom .navbar-nav >li > a:hover, .page-header {
            color:orangered;
            border-color: black;
        }
        
        .carousel, .thumbnail {
            border: 2px solid #000;
        }

        .carousel:hover{
            border: 2px solid orange;
        }  
        .lb-container {
            background-color: #0d0d0d !important;
            
        }
    </style>
<body>
    <nav class="navbar navbar-default navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    Photo Gallery
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="GGST.php">GGST</a></li>
                <li><a href="TBHX.php">TBHX</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <div class="page-header">
        <h3>To Be Hero X</h3>
    </div>

        <div class="row">
            <div class="col-md-4">
                <a href="tbhx/x.png" data-lightbox="gallery" data-title="X" class="thumbnail">
                    <img src="tbhx/x.png"/>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tbhx/qn.png" data-lightbox="gallery" data-title="Queen" class="thumbnail">
                    <img src="tbhx/qn.png"/>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tbhx/gb.png" data-lightbox="gallery" data-title="Ghostblade" class="thumbnail">
                    <img src="tbhx/gb.png"/>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tbhx/esl.png" data-lightbox="gallery" data-title="E-Soul" class="thumbnail">
                    <img src="tbhx/esl.png"/>
                </a>
            </div>
        </div>
        <footer class="navbar navbar-default navbar-custom navbar-fixed-bottom">
            <div class="container ">
                <p class="text-center" style="padding: 10px; color:white;">Created by Deen</p>
            </div>    
        </footer>
    </div>
</body>

</html>
