<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>多媒体教室管理</title>
		<link rel="stylesheet" type="text/css" href="/app_tjufe/Easy_UI/themes/metro/easyui.css">
		<link rel="stylesheet" type="text/css" href="/app_tjufe/Easy_UI/themes/icon.css">
		<link rel="stylesheet" type="text/css" href="/app_tjufe/Easy_UI/demo/demo.css">

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="/app_tjufe/Easy_UI/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="/app_tjufe/Easy_UI/extension/jquery-easyui-datagridview/datagrid-detailview.js"></script>
		<script type="text/javascript" src="/app_tjufe/Easy_UI/locale/easyui-lang-zh_CN.js"></script>
		<style>
			html,
			body {
				height: 100%;
				padding: 0;
			}
			
			form {
				margin: 0;
				padding: 0;
			}
			
			.dv-table td {
				border: 0;
			}
			
			.dv-table input {
				border: 1px solid #ccc;
			}
		</style>
	</head>

	<body>

		<table id="dg" style="height: 100%;width: 100%;margin: 20px;" title="多媒体教室" url="/app_tjufe/index.php/Admin/Classroom/select" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
				<tr>
					<th field="name" width="50">名称</th>
				</tr>
			</thead>
		</table>
		<div id="toolbar">
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="" plain="true" onclick="">导入</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="" plain="true" onclick="">停用</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="" plain="true" onclick="">启用</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="" plain="true" onclick="" disabled="true">删除</a>
		</div>

		<script type="text/javascript">
			$(function() {
				$('#dg').datagrid({
					view: detailview,
					detailFormatter: function(index, row) {
						return '<div class="ddv"></div>';
					},
					onExpandRow: function(index, row) {
						var ddv = $(this).datagrid('getRowDetail', index).find('div.ddv');
						ddv.panel({
							border: false,
							cache: true,
							href: '/app_tjufe/index.php/Admin/Classroom/showForm/?index=' + index,
							onLoad: function() {
								$('#dg').datagrid('fixDetailRowHeight', index);
								$('#dg').datagrid('selectRow', index);
								$('#dg').datagrid('getRowDetail', index).find('form').form('load', row);
							}
						});
						$('#dg').datagrid('fixDetailRowHeight', index);
					}
				});
			});
			//
			//			function saveItem(index) {
			//				var row = $('#dg').datagrid('getRows')[index];
			//				var url = row.isNewRecord ? 'BikeType/save_bike_type' : 'BikeType/update_bike_type/?type_id=' + row.type_id;
			//				$('#dg').datagrid('getRowDetail', index).find('form').form('submit', {
			//					url: url,
			//					onSubmit: function() {
			//						return $(this).form('validate');
			//					},
			//					success: function(data) {
			//						data = eval('(' + data + ')');
			//						data.isNewRecord = false;
			//						$('#dg').datagrid('collapseRow', index);
			//						$('#dg').datagrid('updateRow', {
			//							index: index,
			//							row: data
			//						});
			//					}
			//				});
			//			}
			//
			function cancelItem(index) {
				var row = $('#dg').datagrid('getRows')[index];
				if (row.isNewRecord) {
					$('#dg').datagrid('deleteRow', index);
				} else {
					$('#dg').datagrid('collapseRow', index);
				}
			}
			//
			//			function destroyItem() {
			//				var row = $('#dg').datagrid('getSelected');
			//				if (row) {
			//					$.messager.confirm('确认', '确定删除这项自行车类型吗？', function(r) {
			//						if (r) {
			//							var index = $('#dg').datagrid('getRowIndex', row);
			//							$.post('BikeType/destroy_bike_type', {
			//								type_id: row.type_id
			//							}, function() {
			//								$('#dg').datagrid('deleteRow', index);
			//							});
			//						}
			//					});
			//				}
			//			}
			//
			//			function newItem() {
			//				$('#dg').datagrid('appendRow', {
			//					isNewRecord: true
			//				});
			//				var index = $('#dg').datagrid('getRows').length - 1;
			//				$('#dg').datagrid('expandRow', index);
			//				$('#dg').datagrid('selectRow', index);
			//			}
		</script>

	</body>

</html>