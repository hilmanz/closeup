<!DOCTYPE html>
<html>
<head>
	<title>CLOSE UP</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/closeup.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/animation.css" media="all" />
	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	<script src="js/default.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="pagewidth">
		<div id="content">
			<section>
				<div class="center">
					<div class="columns">
                        <?php 
                        if($_GET['menu']=='youtube'){
                            include("youtube.php");
                        }else if($_GET['menu']=='facebook'){ 
                            include("facebook.php");
                        }else if($_GET['menu']=='twitfeel'){ 
                            include("twitfeel.php");
                        }else if($_GET['menu']=='twitter'){ 
                            include("twitter.php");
                        }else if($_GET['menu']=='addict'){ 
                            include("addict.php");
                        }else if($_GET['menu']=='rss'){ 
                            include("rss.php");
                        }else{ 
                            include("home.php");
                        }?>
					</div><!-- end .columns -->
				</div><!-- end .center -->
			</section>
		</div><!-- end #content -->
	</div><!-- end #pagewidth -->
        <div id="water"><img src="images/water.png"/></div>
        <div id="popupAddict" class="popupContainer">
            <div id="popupContent">
                <a class="closePopup" href="#">&nbsp;</a>
                <div class="poupContent">
                  <iframe src="http://addictomatic.com/" width="100%" height="500"></iframe> 
                </div><!-- end .poupContent -->
            </div><!-- end #poupContent -->
        </div><!-- end .popupContainer -->
        <div id="popupTwitfeel" class="popupContainer">
            <div id="popupContent">
                <a class="closePopup" href="#">&nbsp;</a>
                <div class="poupContent">
                  <iframe src="http://www.tweetfeel.com/" width="100%" height="500"></iframe> 
                </div><!-- end .poupContent -->
            </div><!-- end #poupContent -->
        </div><!-- end .popupContainer -->
   		<div id="bgPopup"></div>
</body>
</html>