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
			<h1 class="mui-title mytitle">我的第一个webapp应用主页</h1>
		</header>

		<div class="mui-content">
			<button type="button" class="mui-btn mui-btn-blue"><?php echo ($btnName); ?></button>
		</div>

		<div class="mui-card">
			<ul class="mui-table-view">
				<li class="mui-table-view-cell">
					<a class="mui-navigate-right">
	                Item 1
	            </a>
				</li>
				<li class="mui-table-view-cell">
					<a class="mui-navigate-right">
	                 Item 2
	            </a>
				</li>
				<li class="mui-table-view-cell">
					<a class="mui-navigate-right">
	                 Item 3
	            </a>
				</li>
			</ul>
		</div>

		<div class="mui-row">
			<div class="mui-col-xs-5" id="text">

			</div>
			<div id="btn-go2next" class="mui-col-xs-2" style="height: 50px;background-color: red;">

			</div>

		</div>

		<script type="text/javascript">
			$(function() {
				$.ajax({
					type: "get",
					url: "getUser",
					async: true,
					success: function(r) {
						var names = JSON.parse(r);
						for (i = 0; i < names.length; i++) {
							$("#text").append("<p>" + names[i] + "</p>");
						};
						window.sessionStorage.names = JSON.stringify(names);
						
					},
				});
				
				$("#btn-go2next").click(function(){
					window.location = "../Main/index";
				});
			});
		</script>

	</body>

</html>