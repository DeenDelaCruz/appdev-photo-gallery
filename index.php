<!DOCTYPE html>
<html>
<head>
	<title>Photo gallery</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>        
</head>
    <style>
        body {
            background-color: #3C3A3C;
        }        
        .carousel-inner > .item > img {
        margin: 0 auto;
        }
        .carousel-indicators li {
        background-color: #555; 
        }

        .carousel-indicators .active {
        background-color: orange;
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
        color: orange; 
        }
        
        .navbar-custom, .modal-content{
        background-color: #222;  
        border-color: #080808;  
        }
        
        .navbar-custom .navbar-brand, .navbar-custom .navbar-nav >li > a {
            color:white;
        }

        .navbar-custom .navbar-brand:hover, .navbar-custom .navbar-nav >li > a:hover, .page-header, .modal-header, .modal-footer {
            color:orange;
            border-color: black;
        }
        
        .carousel, .thumbnail {
            border: 2px solid #000;
            background-color: #222;          
        }

        .carousel:hover{
            border: 2px solid orange;
        }
        .thumbnail, .img-thumbnail {
            background-color: #222;
            border-color: black;
        }
        .modal-header, .modal-footer {
            background-color: #222;
            border-color: black;
        }
        .page {
            color:orangered;
            border-color: black;
        }
        .thumb {
            background-color: #5D1B1D;
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
        <div class="row">
        <div class="column-md-10 col-mid-offset-1">
        <div class="carousel carousel-dark slide" data-ride="carousel" id="slider">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"> </li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
                <li data-target="#slider" data-slide-to="3"></li>
                <li data-target="#slider" data-slide-to="4"></li>
                <li data-target="#slider" data-slide-to="5"></li>
                <li data-target="#slider" data-slide-to="6"></li>
                <li data-target="#slider" data-slide-to="7"></li>
            </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="ggst/COS.png"/>
            </div>
            <div class="item">
                <img src="ggst/ASK.png"/>
            </div>
            <div class="item">
                <img src="ggst/FST.png"/>
            </div>
            <div class="item">
                <img src="ggst/JKO.png"/>
            </div>
            <div class="item">
                <img src="tbhx/x.png"/>
            </div>
            <div class="item">
                <img src="tbhx/qn.png"/>
            </div>
            <div class="item">
                <img src="tbhx/gb.png"/>
            </div>
            <div class="item">
                <img src="tbhx/esl.png"/>
            </div>
        </div>
        <a href="#slider" data-slide="prev" class="left carousel-control">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#slider" data-slide="next" class="right carousel-control">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        </div>
    </div>
        </div>
    <div class="page-header">
        <h3>Guilty Gear Strive</h3>
    </div>

        <div class="row">
            <div class="col-md-4">
                <a href="#m1" data-toggle="modal" class="thumbnail">
                    <img src="ggst/COS.png"/>
                </a>
                <div class="modal fade" id="m1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">GGST</div>
                                <div class="modal-body">    
                                    <img src="ggst/COS.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">Happy Chaos</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m2" data-toggle="modal" class="thumbnail">
                    <img src="ggst/ASK.png"/>
                </a>
                <div class="modal fade" id="m2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">GGST</div>
                                <div class="modal-body">    
                                    <img src="ggst/ASK.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">Asuka</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m3" data-toggle="modal" class="thumbnail">
                    <img src="ggst/FST.png"/>
                </a>
                <div class="modal fade" id="m3">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">GGST</div>
                                <div class="modal-body">    
                                    <img src="ggst/FST.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">Faust</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m4" data-toggle="modal" class="thumbnail">
                    <img src="ggst/JKO.png"/>
                </a>
                <div class="modal fade" id="m4">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">GGST </div>
                                <div class="modal-body">    
                                    <img src="ggst/JKO.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">Jack-O</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="page-header page">
        <h3>To Be Hero X</h3>
    </div>

        <div class="row">
            <div class="col-md-4">
                <a href="#m5" data-toggle="modal" class="thumbnail thumb">
                    <img src="tbhx/x.png"/>
                </a>
                <div class="modal fade" id="m5">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">TBHX</div>
                                <div class="modal-body">    
                                    <img src="tbhx/x.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">X</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m6" data-toggle="modal" class="thumbnail thumb">
                    <img src="tbhx/qn.png"/>
                </a>
                <div class="modal fade" id="m6">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">TBHX</div>
                                <div class="modal-body">    
                                    <img src="tbhx/qn.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">Queen</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m7" data-toggle="modal" class="thumbnail thumb">
                    <img src="tbhx/gb.png"/>
                </a>
                <div class="modal fade" id="m7">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">TBHX</div>
                                <div class="modal-body">    
                                    <img src="tbhx/gb.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">Ghostblade</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#m8" data-toggle="modal" class="thumbnail thumb">
                    <img src="tbhx/esl.png"/>
                </a>
                <div class="modal fade" id="m8">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">TBHX</div>
                                <div class="modal-body">    
                                    <img src="tbhx/esl.png" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">E-Soul</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="navbar navbar-custom navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="text-center" style="padding: 10px; color:white">Created by Deen</p>
            </div>    
        </footer>
    </div>
</body>

</html>
