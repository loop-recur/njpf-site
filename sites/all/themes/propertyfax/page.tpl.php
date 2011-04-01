<!-- BEGINNING OF ORIGINAL DRUPAL CONTENT THAT NEEDS TO BE INSERTED INTO SITE -->

 <div id="branding" class="clearfix">
   <?php print $breadcrumb; ?>
   <?php print render($title_prefix); ?>
   <?php if ($title): ?>
     <h1 class="page-title"><?php print $title; ?></h1>
   <?php endif; ?>
   <?php print render($title_suffix); ?>
   <?php print render($primary_local_tasks); ?>
 </div>

 <div id="page">
   <?php print render($secondary_local_tasks); ?>

   <div id="content" class="clearfix">
     <div class="element-invisible"><a id="main-content"></a></div>
     <?php if ($messages): ?>
       <div id="console" class="clearfix"><?php print $messages; ?></div>
     <?php endif; ?>
     <?php if ($page['help']): ?>
       <div id="help">
         <?php print render($page['help']); ?>
       </div>
     <?php endif; ?>
     <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
     <?php print render($page['content']); ?>
   </div>
 </div>

<!-- END OF ORIGINAL DRUPAL CONTENT THAT NEEDS TO BE INSERTED INTO SITE -->

<?php
// $Id: page.tpl.php,v 1.15 2010/11/20 04:03:51 webchick Exp $
?>

	<div id="header-container" class="wrapper">
		<header>
			<h1 id="title" class="ir">NJPF</h1>
			<nav>
				<ul>
					<li><a href="#">Some</a></li>
					<li><a href="#">navigation</a></li>
					<li><a href="#">more</a></li>
					<li><a href="#">links</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<div id="main" class="wrapper">
		<section id="search"></section>
		<section>
			<div id="main_img"></div>
			<div id="front_info">
				<h2>Know you're dry<br> before you buy.</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Curabitur posuere enim eget turpis feugiat tempor. Curabitur posuere enim eget turpis feugiat tempor.</p>
				<a href="#">Read more...</a>
			</div><!-- end front_info -->
			<div id="quote">
				<h3 class="ir">"It was <span>totally</span> unexpected..."</h3>
				<a href="#">Read Julia's story...</a>

			</div><!-- end quote -->
			<div id="resources" class="clearfix">
				<header><h3 class="ir">resources</h3></header>

				<a id="link1" href="#">
					<div id="icon1"></div>
					<div id="link_text1" class="ir">What you should be on the look out for when buying a home.</div>
				</a>

				<div class="divider"></div>

				<a id="link2" href="#">
					<div id="icon2"></div>
					<div id="link_text2" class="ir">What you should be on the look out for when buying a home.</div>
				</a>

				<div class="divider"></div>
				<a id="link3" href="#">
					<div id="icon3"></div>
					<div id="link_text3" class="ir">What you should be on the look out for when buying a home.</div>
				</a>

			</div><!-- end resources -->
			<div id="more_info">
				<h3>Don't let your babies grow up to be cowboys.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra. Pellentesque auctor neque quis nisl lacinia id rutrum lacus venenatis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra. Pellentesque auctor neque quis nisl lacinia id rutrum lacus venenatis.</p>
			</div><!-- end more_info -->
			<footer></footer>	
		</section>
	</div>
	
	<div id="footer-container">
		<footer class="wrapper">
			<h3>A nice footer</h3>
			<?php print $feed_icons; ?>
		</footer>
	</div>