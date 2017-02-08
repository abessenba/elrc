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
Document::addScript($b . DS . 'assets/js/TweenMax.min.js');
Document::addScript($b . DS . 'assets/js/main.js');
Document::addScript($b . DS . 'assets/js/home.js');
Document::addStyleSheet($b . DS . 'assets/css/home.css');

?>

<?php if (!$no_html) : ?>
	<group:include type="content" scope="before" />

	<div class="super-group-body-wrap group-<?php echo $this->group->get('cn'); ?>">
	<div class="super-group-body">
	<?php
		$headerHome = true;
		include_once 'includes/header.php';
	?>

		
		<div class="contain" style='padding-left:140px;padding-right:140px;'>
		<h2>Evaluation and Learning Research Center</h2>
			<p>The ELRC is a national and international recognized leader in education research and evaluation.  Known by federal agencies for conducting rigorous research and evaluation, the ELRC maintains of portfolio of 20 active projects, adds credibility and value to over 40 proposals each year, and consults with faculty across the Purdue University campus and beyond on a host of nascent stage projects. ELRC evaluation expertise is often a win differentiator for competitive proposals and scholarship driven by ELRC professionals and propels Purdue into the national conversation surrounding evidence-based education reform. The ELRC is seen as a national model for effective STEM education research and evaluation.</p>
		<h1>What We Do:</h1>
		
		
			
		
			
		<ul>
		<li>Conduct original research that pushes the boundaries of our understanding of education and educational best practice
		<li>Support research, education, and engagement projects through expertise in educational theory, evaluation, and project management
		<li>Partner with both internal and external stakeholders to enhance accountability, visibility, and reputation.
		</div>
	

	<div class="super-group-content-wrap">
	<div class="super-group-content group_<?php echo $this->tab; ?>">
<?php endif; ?>




<?php if (!$no_html) : ?>
	</div>
	</div>

	<?php include_once 'includes/footer.php'; ?>
	</div>
	</div>

	<group:include type="googleanalytics" account="" />
<?php endif; ?>