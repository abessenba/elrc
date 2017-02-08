<?php
$url = Request::getVar('REQUEST_URI','','server');
?>
<div class="super-group-header-wrap">
	<div class="super-group-header cf">

	<div class="contain logo-contain">
		<a href="/groups/<?php echo $this->group->get('cn'); ?>" title="<?php echo $this->group->get('description'); ?> Home" class="logo">
					<img
						src="<?php echo substr(PATH_APP, strlen(PATH_ROOT)); ?>/site/groups/<?php echo $this->group->get('gidNumber'); ?>/template/assets/img/elrc.svg">
					
		
		</div>
		

		<div class="toggle">
			<button class="c-hamburger c-hamburger--htra">
				<span>toggle menu</span>
			</button>
		</div>

		<div class="menu-container">
			<nav>
				<div class="contain">
					<ul>
						<?php if(User::isGuest()) : ?>
							<li><a title="Login" href="/login?return=<?php echo base64_encode($url); ?>">Login</a></li>
						<?php else: ?>
							<li><a title="Logout" href="/logout?return=<?php echo base64_encode($url); ?>">Logout</a></li>
						<?php endif; ?>
						

						<?php
						if (in_array(User::get('id'), $this->group->get('managers')))
						{
							echo '<li><a title="Edit pages" href="/groups/' . $this->group->get("cn") . '/pages">Edit pages</a></li>';
						}
						?>
						<li><a title="Purdue Education" href="https://www.education.purdue.edu/"><span style="color:#f89a22;">education.purdue.edu</span></a></li>
					</ul>
				</div>
			</nav>

			<div class="super-group-menu-wrap">
				<div class="contain">
					<div class="super-group-menu">
						<!-- ###  Start Menu Include  ### -->
						<group:include type="modules" position="main-menu" />
						<!-- ###  End Menu Include  ### -->
					</div>
				</div>
			</div>
		</div>

	</div>
</div>