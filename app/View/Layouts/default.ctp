<!DOCTYPE html>
<html lang="en">
  <head>
	<?	echo $this->Html->charset('ISO-8859-1')."\n";?>
	<title><?php echo $title_for_layout?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?
		echo $this->Html->meta('keywords',$keywords_for_page)."\n\t";
		echo $this->Html->meta('description',$description_for_page)."\n";
	?>
    <meta name="author" content="Nilam Doctor, Hitarth Consultants, nilam@hitarth.org">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- <link rel="stylesheet/less" type="text/css" href="/boot/less/bootstrap.less">	-->
	<?php echo $this->Html->meta('favicon.ico','/img/favicon.ico',array('type' => 'icon'));?>		
	<link rel="shortcut icon" href="/img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
	<?php echo $this->element('header'); ?>
	<?php echo $this->element('masterheader'); ?>
	<div class="container">
		<? echo $this->Html->getCrumbList('breadcrumb seperator active divider', 'Home');?>	
		<?php echo $this->Session->flash(); ?>
		<? echo $content_for_layout;?>
	</div>
	<?php echo $this->element('footer'); ?>

    <!-- Placed at the end of the document so the pages load faster -->
	<?
//	echo $this->Html->script('/boot/docs/assets/js/less.min.js')."\n\t";

	echo $this->Html->script('/boot/docs/js/jquery.js')."\n\t";		
	echo $this->Html->script('/boot/docs/js/bootstrap-cake.js')."\n\t";		
	echo $this->Html->script('/boot/docs/js/google-code-prettify/prettify.js')."\n\t";			
	echo $this->Html->script('/boot/docs/js/bootstrap-dropdown.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-tooltip.js')."\n\t";					
	echo $this->Html->script('/boot/docs/js/bootstrap-transition.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-alert.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-modal.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-scrollspy.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-tab.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-popover.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-button.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-collapse.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-carousel.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/bootstrap-typeahead.js')."\n\t";				
	echo $this->Html->script('/boot/docs/js/application.js')."\n\t";				
	echo $this->Html->css('/boot/docs/assets/css/bootstrap.css')."\n\t";
	echo $this->Html->css('/boot/docs/assets/css/bootstrap-responsive.css')."\n\t";
	echo $this->Html->css('/boot/docs/assets/css/docs.css')."\n\t";	
	echo $this->Html->css('/boot/docs/assets/js/google-code-prettify/prettify.css')."\n\t";	


?><!-- Placed at the end of the document so the pages load faster -->
	<?
		if ($this->params['controller'] != '') 
				echo $this->Html->css('default.css')."\n";
		if (is_file(WWW_ROOT."css".DS.$this->params["controller"].".css")) {
				echo $this->Html->css($this->params["controller"])."\n";
		}
		if (is_file(WWW_ROOT."css".DS.$this->params["controller"].DS.$this->params["action"].".css")) {
				echo $this->Html->css($this->params["controller"]."/".$this->params["action"])."\n";
		}

?>
</body>
</html>