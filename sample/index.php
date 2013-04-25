<?php defined('_JEXEC') or die; 

	// Get the Application
	$app 		= JFactory::getApplication();
	$doc 		= JFactory::getDocument();
	$navcolor	= $this->params->get('navcolor');
	
	// Determine main content width
	if($this->countModules('left') && $this->countModules('right')) {
		$mainWidth = 'span4';
	} else if($this->countModules('left') || $this->countModules('right')) {
		$mainWidth = 'span8';
	} else {
		$mainWidth = 'span12';
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
		<?php JHtmlBootstrap::loadCss($includeMaincss = true); ?>
		<?php $doc->addStyleSheet(JURI::base() . 'templates/' . $this->template . '/css/template.css', $type = 'text/css', $media = 'screen,projection'); ?>
	</head>

	<body>
		<navigation>
			<div class="navbar navbar-fixed-top <?php echo $navcolor == 'inverse' ? 'navbar-inverse' : ''; ?>">
					<div class="navbar-inner">
						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            	<span class="icon-bar"></span>
			            	<span class="icon-bar"></span>
			            	<span class="icon-bar"></span>
			          	</button>
					<div class="container-fluid">
						<a class="brand" href="#"><?php echo $app->getCfg('sitename'); ?></a>
						<div class="nav-collapse">
							<jdoc:include type="modules" name="top" style="xhtml" />    
						</div>
					</div>
				</div>
			</div>
		</navigation>

		<?php if($this->countModules('header')) { ?>
			<header id="header">
				<div class="container-fluid">
  					<div class="row-fluid">
  						<div class="span12">
							<div class="hero-unit">
								<jdoc:include type="modules" name="header" style="none" />
							</div>
						</div>
					</div>
				</div>
			</header>
		<?php } ?>

		<div class="container-fluid">
  			<div id="breadcrumbs" class="row-fluid">
				<jdoc:include type="modules" name="breadcrumbs" style="none" />
			</div>
		</div>

		<div class="container-fluid">
  			<div class="row-fluid">
				<?php if($this->countModules('left')) { ?>
				<div class="span4">
					<jdoc:include type="modules" name="left" style="xhtml" />
				</div>
				<?php } ?>
			
				<div class="<?php echo $mainWidth; ?>">
					<jdoc:include type="component" />
				</div>
				
				<?php if($this->countModules('right')) { ?>
					<div class="span4">
						<jdoc:include type="modules" name="right" style="xhtml" />
					</div>
				<?php } ?>
			</div>
		</div>
		
		<footer>
			<jdoc:include type="modules" name="footer" style="none" />    
		</footer>
	</body>
</html>