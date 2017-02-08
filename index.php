<?php
/*
Template Name: Home page
*/

//get the active tab
$title = $this->tab;
$group = $this->group;

$b = rtrim(str_replace(PATH_ROOT, '', __DIR__), DS);

//base url for links
$base = "index.php?option=com_groups&cn=" . $group->get('cn');
$groupId = $group->get('gidNumber');

$parts = explode("/",Request::path());
$page_alias = array_pop($parts);

$no_html = Request::getInt('no_html', 0);

// add stylesheets and scripts
Document::addStyleSheet('https://fonts.googleapis.com/css?family=Oswald:700,400');
Document::addStyleSheet($b . '/assets/css/main.css');
Document::addScript($b . '/assets/js/main.js');
?>

<?php if (!$no_html) : ?>
	<group:include type="content" scope="before" />

	<div class="super-group-body-wrap group-<?php echo $this->group->get('cn'); ?>">
	<div class="super-group-body">
	<?php include_once 'includes/header.php'; ?>

	<div class="super-group-content-wrap">
	<div class="super-group-content group_<?php echo $this->tab; ?>">
	<div class="contain contain-ok" style='padding-left:140px;padding-right:140px;'>
<?php endif; ?>

	<?php
	$title = (isset($this->page) && $this->page->get('title')) ? $this->page->get('title') : ucfirst($this->tab);
	if ($title != '') :
	?>
	<h2><?php echo $title; ?></h2>
	<?php endif; ?>

	<!-- ###  Start Content Include  ### -->
	<group:include type="content" />
	<!-- ###  End Content Include  ### -->

<?php if (!$no_html) : ?>
	</div>
	</div>
	</div>

	<?php include_once 'includes/footer.php'; ?>
	</div>
	</div>

	<group:include type="googleanalytics" account="" />
<?php endif; ?>