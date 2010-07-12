<?php
include LIB_DIR.'contentfromdb.php';

function page($dest = 'frontpage')
{
    if (!isset($_GET['p'])) {
        if ((!isset($_GET['keywords'])) AND (!isset($_GET['page'])) AND (!isset($_GET['title'])) AND (!isset($_GET['author'])) AND (!isset($_GET['subject'])) AND (!isset($_GET['location']))) {
            $page = 'frontpage';
        } else {
            $page = 'detail';
        }
    } else {
        $page = $_GET['p'];
    }
    if ($dest === $page) {
        return 1;
    } else {
        return 0;
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	zenlike1.0 by nodethirtythree design
	http://www.nodethirtythree.com

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>zenlike1.0 by nodethirtythree</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/default.css" />
<!-- css for glider -->
<link rel="stylesheet" href="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/stylesheets/glider.css" type="text/css" media="screen" charset="utf-8">
<!-- javascript for glider -->
<script src="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/javascripts/prototype.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/javascripts/effects.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/javascripts/glider.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<div id="upbg"></div>

<div id="outer">


	<div id="header">
		<div id="headercontent">
			<h1>Zenlike<sup>1.0</sup></h1>
			<h2>A free design by NodeThirtyThree</h2>
		</div>
	</div>


	<form method="post" action="">
		<div id="search">
			<input type="text" class="text" maxlength="64" name="keywords" />
			<input type="submit" class="submit" value="Search" />
		</div>
	</form>


	<div id="headerpic"></div>

	
	<div id="menu">
		<!-- HINT: Set the class of any menu link below to "active" to make it appear active -->
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#" class="active">News</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div id="menubottom"></div>

	
	<div id="content">

    <?php if (page('frontpage')) { ?>
        <!-- header to be shown only in frontpage -->
		<!-- Normal content: Stuff that's not going to be put in the left or right column. -->
		<div id="normalcontent">
			<h3><strong>Zenlike</strong><sup>1.0</sup> <span>by NodeThirtyThree</span></h3>
			<div class="contentarea">
				<!-- Normal content area start -->
				<img src="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/images/pic1.jpg" class="left" alt="A chinese lion statue" />
                <!--
				<p>Zenlike<sup>1.0</sup> is a free, lightweight, tableless, fluid W3C-compliant website design by <a href="http://www.nodethirtythree.com/">NodeThirtyThree Design</a>. All photos came from <a href="http://www.pdphoto.org/">PDPhoto</a> and the background texture is from <a href="http://www.mayang.com/textures/">Mayang's texture site</a>. You're free to dissect, manipulate and use it to your heart's content. We only ask that you link back to <a href="http://www.nodethirtythree.com/">our site</a> in some way. If you find this design useful, feel free to let us know :)</p>				<p>You can find more of our free work at this site or <a href="http://www.nodethirtythree.com/">our site</a>, or some of our commercial work on <a href="http://www.4templates.com/?aff=n33">4Templates.com</a>, a commercial website template site.</p>
				<p>Zenlike<sup>1.0</sup> is a free, lightweight, tableless, fluid W3C-compliant website design by <a href="http://www.nodethirtythree.com/">NodeThirtyThree Design</a>. All photos came from <a href="http://www.pdphoto.org/">PDPhoto</a> and the background texture is from <a href="http://www.mayang.com/textures/">Mayang's texture site</a>. You're free to dissect, manipulate and use it to your heart's content. We only ask that you link back to <a href="http://www.nodethirtythree.com/">our site</a> in some way. If you find this design useful, feel free to let us know :)</p>
				<p>You can find more of our free work at this site or <a href="http://www.nodethirtythree.com/">our site</a>, or some of our commercial work on <a href="http://www.4templates.com/?aff=n33">4Templates.com</a>, a commercial website template site.</p>
                -->

                <div id="my-glider-horizontal">
            		<div class="controls">
        			<a href="#section1">Apa itu SLiMS</a> | 
		        	<a href="#section2">Lisensi</a> |
        			<a href="#section3">Open Source</a> |
        			<a href="#section4">Modul Tersedia</a> 
        		</div>
		
        		<div class="scroller">
		        	<div class="content">
				        <div class="section" id="section1">
                        <?php
                        $about_slims = new contentFromDb("about_slims");
                        echo $about_slims->get_between('<!--intro_awal-->', '<!--intro_akhir-->');
        				?>
                        <a href="<?php echo $about_slims->get_url(); ?>">Lebih detail sejarah pengembangan SLiMS</a>.
                        </div>
		        		<div class="section" id="section2">
                        <?php
                        $lisensi_slims = new contentFromDb("lisensi_slims");
                        echo $lisensi_slims->get_between('<!--intro_awal-->', '<!--intro_akhir-->');
        				?>
                        <a href="<?php echo $lisensi_slims->get_url(); ?>">Lebih detail lisensi GNU/GPL</a>.
		        		</div>
        				<div class="section" id="section3">
                        <?php
                        $opensource = new contentFromDb("opensource");
                        echo $opensource->get_between('<!--intro_awal-->', '<!--intro_akhir-->');
        				?>
                        <a href="<?php echo $opensource->get_url(); ?>">Lebih detail model pengembangan SLiMS</a>.
		        		</div>
        				<div class="section" id="section4">
                        <?php
                        $modul_tersedia = new contentFromDb("modul_tersedia");
                        echo $modul_tersedia->get_between('<!--intro_awal-->', '<!--intro_akhir-->');
        				?>
                        <a href="<?php echo $modul_tersedia->get_url(); ?>">Lebih detail modul yang tersedia</a>.
		        		</div>
        			</div>
		        </div>			
	        </div>
	        <!-- <a href="#" onclick="my_glider.previous();return false;">Previous</a> | <a href="#" onclick="my_glider.next();return false">Next</a> -->
	        <script type="text/javascript" charset="utf-8">
		        var my_glider = new Glider('my-glider-horizontal', {controlsEvent: 'mouseover',duration:0.5, autoGlide: true});
        	</script>
		<!-- Normal content area end -->
			</div>
		</div>	
		<div class="divider1"></div>
        <!-- end of header to be shown only in frontpage -->
    <?php } ?>


		<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
		<div id="primarycontainer">
			<div id="primarycontent">
				<!-- Primary content area start -->
		
				<div class="post">
					<h4>Lorem Ipsum Veroeros</h4>
					<div class="contentarea">
						<div class="details">Posted by <a href="#">Jane Doe</a> on September 25, 2006</div>	
						<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>
						<ul class="controls">
							<li><a href="#" class="printerfriendly">Printer Friendly</a></li>
							<li><a href="#" class="comments">Comments (18)</a></li>
							<li><a href="#" class="more">Read More</a></li>				
						</ul>
					</div>
				</div>
		
				<div class="divider2"></div>
		
				<div class="post">
					<h4>Consequat Odio Vestibulum</h4>
					<div class="contentarea">
						<div class="details">Posted by <a href="#">Jane Doe</a> on September 25, 2006</div>	
						<img src="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/images/pic3.jpg" class="left" alt="A chinese dragon" />
						<p>Aenean felis quisque eros. Cras lobortis commodo lorem ipsum dolor. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Lorem ipsum dolor sit amet consequat etiam sed dolore.</p>
						<ul class="controls">
							<li><a href="#" class="printerfriendly">Printer Friendly</a></li>
							<li><a href="#" class="comments">Comments (18)</a></li>
							<li><a href="#" class="more">Read More</a></li>				
						</ul>
					</div>
				</div>
	
				<div class="divider2"></div>
		
				<div class="post">
					<h4>Adipiscing Nullam</h4>
					<div class="contentarea">
						<div class="details">Posted by <a href="#">Jane Doe</a> on September 25, 2006</div>	
						<p>Eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet felis quisque eros. Cras lobortis commodo lorem ipsum dolor. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit lorem ipsum dolor.</p>
						<ul class="controls">
							<li><a href="#" class="printerfriendly">Printer Friendly</a></li>
							<li><a href="#" class="comments">Comments (18)</a></li>
							<li><a href="#" class="more">Read More</a></li>				
						</ul>
					</div>
				</div>

				<!-- Primary content area end -->
			</div>
		</div>

		
		<!-- Secondary content: Stuff that goes in the secondary content column (by default, the narrower right column) -->
		<div id="secondarycontent">
			<!-- Secondary content area start -->
			
			<!-- HINT: Set any div's class to "box" to encapsulate it in (you guessed it) a box -->
			<div class="box">
				<h4>Blandit Veroeros</h4>
				<div class="contentarea">
					<img src="<?php echo SENAYAN_WEB_ROOT_DIR.$sysconf['template']['dir']; ?>/zenlike/images/pic2.jpg" class="left" alt="Random foliage" />
					<p>Sed etiam et lorem ipsum nulla vero et lobortis felis sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros etiam <a href="#">sed commodo</a>.</p>
				</div>
			</div>
		
			<div>
				<h4>Nullam Dolore</h4>
				<div class="contentarea">
					<ul class="linklist">
						<li><a href="#">Volutpat at varius sed</a></li>						<li><a href="#">Sollicitudin et arcu</a></li>						<li><a href="#">Vivamus viverra nullam</a></li>						<li><a href="#">Turpis vestibulum</a></li>						<li><a href="#">Sed etiam lorem ipsum</a></li>						<li><a href="#">Sit amet dolore nulla</a></li>						<li><a href="#">Facilisi sed tortor</a></li>						<li><a href="#">Aenean felis quisque</a></li>						<li><a href="#">Eros cras lobortis vel</a></li>						<li><a href="#">Purus in eget odio sapien</a></li>						<li><a href="#">Adipiscing blandit</a></li>
					</ul>
				</div>
			</div>

			<!-- Secondary content area end -->
		</div>


	</div>

	<div id="footer">
			<div class="left">&copy; 2006 Your Website Name. All rights reserved.</div>
			<div class="right">Design by <a href="http://www.nodethirtythree.com/">NodeThirtyThree Design</a></div>
	</div>
	
</div>

</body>
</html>