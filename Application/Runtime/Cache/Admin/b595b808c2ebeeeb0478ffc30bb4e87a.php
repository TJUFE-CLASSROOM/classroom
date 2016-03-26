<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Simpla Admin</title>
		<link href="/app_tjufe/favicon.ico" rel="Shortcut Icon">
		<!--                       CSS                       -->
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="/app_tjufe/SimplaAdmin/resources/css/reset.css" type="text/css" media="screen" />
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="/app_tjufe/SimplaAdmin/resources/css/style.css" type="text/css" media="screen" />
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="/app_tjufe/SimplaAdmin/resources/css/invalid.css" type="text/css" media="screen" />
		<!--                       Javascripts                       -->
		<!-- jQuery -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/jquery-1.3.2.min.js"></script>
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/simpla.jquery.configuration.js"></script>
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/facebox.js"></script>
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/jquery.wysiwyg.js"></script>
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/jquery.date.js"></script>
	</head>

	<body style="height: 100%">
		<div id="body-wrapper" style="height: 100%">
			<!-- Wrapper for the radial gradient background -->
			<div id="sidebar">
				<div id="sidebar-wrapper">
					<!-- Sidebar with logo and menu -->
					<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
					<!-- Logo (221px wide) -->
					<a href="#"><img id="logo" src="/app_tjufe/image/logo.png" alt="Simpla Admin logo" /></a>
					<ul id="main-nav">
						<!-- Accordion Menu -->

						<li><a id="manager" href="#" class="nav-top-item">&nbsp;管理&nbsp;</a>
							<ul>
								<!-- Add class "current" to sub menu items also -->
								<li><a href="#" id="classroom">&nbsp;多媒体教室管理&nbsp;</a></li>
								<li><a href="#" id="">&nbsp;会议室管理&nbsp;</a></li>
							</ul>
						</li>

						<li><a id="summary" href="#" class="nav-top-item">&nbsp;汇总&nbsp;</a>
							<ul>

							</ul>
						</li>

						<li><a href="#" id="logout" class="nav-top-item no-submenu">&nbsp;退出&nbsp;</a></li>

					</ul>
					<!-- End #main-nav -->
					<!-- End #messages -->
				</div>
			</div>
			<!-- End #sidebar -->
			<div id="main-content">
				<iframe id="m_iframe" frameborder="0" height="100%" width="100%" src=""></iframe>
			</div>
			<!-- End #main-content -->
		</div>

		<script type="text/javascript">
			$("#classroom").click(function() {
				$("a").removeClass("current");
				$("#manager").addClass("current");
				$("#bike_manager").addClass("current");
				$("#m_iframe", parent.document.body).attr("src", "/app_tjufe/index.php/Admin/Classroom");
			});
			$("#logout").click(function() {
				location.href = "Login";
			});
		</script>

	</body>

</html>