<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
		<jdoc:include type="modules" name="top" style="xhtml" />    
		<jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
		<jdoc:include type="modules" name="left" style="xhtml" />
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="right" style="xhtml" />
		<jdoc:include type="modules" name="footer" style="none" />    
	</body>
</html>