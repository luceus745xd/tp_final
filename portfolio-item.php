 <?php
 	include ("includes/conexion.php");
 	conectar ();
 	//insert en la BO  id=
 		if (isset($_POST['nombre_producto']))
 		{
 			$sql_"insert into pedidos (nombre_producto,nombre-comprador,cantidad,precio,comentario) values
 		}
 	//echo $_GET['codigo'];
 	$consulta="select * from producto where codigo=".$_GET['codigo'];
 	$sql=mysqli_query($con,$consulta);
 		if (mysqli_num_rows($sql)!=0)
 		{
 	$r=mysqli_fetch_array($sql);
 }
 	else{
 echo "<script>alert('no existe el producto');</script>";
  }
  ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Moschino | Minimalist Free HTML Portfolio by WowThemes.net</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.html" rel="home">Moschino</a></h1>
			<h2 class="site-description">Minimalist Portfolio HTML Template</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="elements.html">Elements</a></li>
				<li><a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="portfolio-item.html">Portfolio Item</a></li>
					<li><a href="blog-single.html">Blog Article</a></li>
					<li><a href="shop-single.html">Shop Item</a></li>
					<li><a href="portfolio-category.html">Portfolio Category</a></li>
				</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column two-thirds single-portfolio">
				<main id="main" class="site-main">
				
				<article class="portfolio hentry">
				<header class="entry-header">
				<div class="entry-thumbnail">
					<img width="800" height="533" src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/>
				</div>
				<h1 class="entry-title"><?php
			echo $r['nombre'];
			?>
				</h1>
				<a class='portfoliotype' href='portfolio-category.html'>
					<?php
			echo "$".number_format($r['precio'],2,',','.');
					?>
				</a>
				</header>
				<div class="entry-content">
					<blockquote>
						<p>
							<?php
						echo $r['descripcion'];
						?>
						</p>
					</blockquote>
				</div>
				</article>
				
				<nav class="navigation post-navigation" role="navigation">
					<h1 class="screen-reader-text">Post navigation</h1>
					<div class="nav-links">
					<div class="nav-previous">
					<a href="#" rel="prev"> <span class="meta-nav">←</span> Eliza and John</a>
					</div>
					<div class="nav-next">
					<a href="#" rel="next">Sunset Beach <span class="meta-nav">→</span></a>
					</div>		
					</div>
				</nav>
				<!-- .navigation -->
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
			
			<div id="secondary" class="column third">
				<div class="widget-area">
					<aside class="widget">
						<h4 class="widget-title">compra</h4>
						<form class="wpcf7" method="post" action="portfolio-item.php? codigo=<?php echo $_get^["codigo"];?>" id="contactform">
							<div class="form">
								<input type="hidden" name="nombre_producto" id="nombre_producto" value="<?php echo $r['nombre'];?>">
								<input type="hidden" name="precio" id="precio" value="<?php echo $r['precio'];?>">
								<p><input type="text" name="nombre_comprador" id="nombre_comprador" placeholder="Nombre *"></p>
								<p><input type="number" name="cantidad" id="cantidad" placeholder="Cantidad *"></p>
								<p><textarea name="comentario" id="comentario" rows="3" placeholder="Comentario *"></textarea></p>
								<input type="submit" class="clearfix btn" value="enviar">
							</div>
						</form>
						<div class="done">								
							Your message has been sent. Thank you!
						</div>
					</aside>
				</div>
			</div>
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Moschino</h1>
			<a target="blank" href="https://www.wowthemes.net/">&copy; Moschino - Free HTML Template by WowThemes.net</a>
		</div>
	</div>
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
<script src='js/validate.js'></script>
</body>
</html>