<?php if (!defined('THINK_PATH')) exit();?><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form method="post">
	<table class="dv-table" style="width: 100%; border: 1px solid #ccc; padding: 5px; margin-top: 5px;">
		<tr>
			<td>名称</td>
			<td>
				<input name="name" class="easyui-validatebox" required="true" style="width: 25%" value=""></input>
			</td>
		</tr>
	</table>
	<div style="padding: 5px 0; text-align: right; padding-right: 30px">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="saveItem(<?php echo ($index); ?>)" disabled="true">保存</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="cancelItem(<?php echo ($index); ?>)">取消</a>
	</div>
</form>