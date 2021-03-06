<div>
<nav class="navbar navbar-inverse" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Online CICT Practicum Management System</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?= base_url('main') ?>">Home</a></li>
			<li><a href="<?= base_url('main/student_assessment') ?>">Student Assessment</a></li>
			<li><a href="<?= base_url('main/company')?>">Company List</a></li>
			<li><a href="<?= base_url('main/forms') ?>">Forms</a></li>
		<!-- 	<li><a href="#">About</a></li> -->
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?= base_url('main/login') ?>">Login</a></li>
			<li><a href="<?= base_url('main/register') ?>">Register</a></li>

		</ul>
	</div><!-- /.navbar-collapse -->
</nav>