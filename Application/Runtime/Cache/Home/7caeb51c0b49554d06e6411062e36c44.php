<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title></title>
		<script src="/app_tjufe/js/mui.min.js"></script>
		<link href="/app_tjufe/css/mui.min.css" rel="stylesheet" />
		<script type="text/javascript" charset="UTF-8">
			mui.init();
		</script>
		<style>
			.mytitle {
				color: #0000FF;
			}
		</style>
		<script src="http://libs.baidu.com/jquery/1.8.0/jquery.min.js"></script>

	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">这是我的主页</h1>
		</header>

		<script type="text/javascript">
			$(function() {
				alert(window.sessionStorage.names);
				window.sessionStorage.removeItem("names");
				alert(window.sessionStorage.names);
			});
		</script>
	</body>

</html>