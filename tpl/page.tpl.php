<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
<title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lte IE 6]><link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path.$directory; ?>/css/ie6.css" /><![endif]-->
  <!--[if IE 7]><link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path.$directory; ?>/css/ie7.css" /><![endif]-->
  <!--[if gte IE 7]><link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path.$directory; ?>/css/ie8.css" /><![endif]-->

</head>
<body>
	
	<div id="header">
		<?php if ($logo): ?><a href="/admin"><img src="<?php print $logo; ?>" alt="" id="logo" /></a><?php endif; ?>
		<h1<?php if ($logo): ?> class="break"<?php endif; ?>><?php print $site_name; ?></h1>
	</div>
	
	<?php if ($title): ?> 
	<div id="pagebar">
		<?php print $breadcrumb; ?>
		<h2><?php print $title; ?></h2>
		<?php print $tabs; ?>
	</div>
	<?php endif; ?>
	
	<?php if ($messages||$help): ?>
	<div id="statusbar">
		<?php print $messages; ?>
		<?php print $help; ?>
	</div>
	<?php endif; ?>
	
	<div id="content">
			<?php if ($sidebar||$fast_tasks): ?>
			<div id="maincol">
				<?php print $content; ?>
			</div>
			<div id="sidecol">
				<?php print $fast_tasks; ?>
				<?php print $sidebar; ?>
			</div>
		<?php else: ?>
			<?php print $content; ?>
		<?php endif; ?>	

			<div id="footer">
				<?php print $footer; ?>
			</div>
	
	</div>
    <!--[if lte IE 6]>
    	<script type="text/javascript" src="<?php print $base_path.$directory; ?>/js/supersleight.plugin.js"></script>
    	<script type="text/javascript">
    	$('body').supersleight({shim: '<?php print $base_path.$directory; ?>/img/x.gif'});
    	</script>
    <![endif]-->	
<?php print $closure; ?>
</body>
</html>
