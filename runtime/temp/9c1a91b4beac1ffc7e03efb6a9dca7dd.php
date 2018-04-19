<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"C:\PHP\php11\WWW\Patient/Admin/score\view\score\com.html";i:1524129740;s:73:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\meta.html";i:1521619099;s:75:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap_page.css" />
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<input type="text" class="input-text" style="width:250px" placeholder="输入用户名、姓名" id="search" name="value">
				<button type="button" class="btn btn-success radius" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜客户</button>
			</div><div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="add()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加评分</a></span> </div>
			<form action="" id="info">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort" id="">
					<thead>
						<tr class="text-c">
						<th></th>
							<th>客户姓名</th>
							<th>性别</th>					
							<th>体重(kg)</th>
							<th>年龄</th>
							<th>所属区域</th>
							<th>联系方式</th>
							<th>身高(cm)</th>
							<th>糖尿病</th>
							<th>创建时间</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c">
							<td width="15">
							<input type="radio" name="customer" value="<?php echo $vo['customer_id']; ?>">
							</td>
								<td><?php echo $vo['customer_name']; ?></td>
							<td><?php if($vo['nex']==1): ?>
								男
								<?php else: ?>
								女
								<?php endif; ?></td>
							<td><?php echo $vo['weight']; ?>kg</td>
							<td><?php echo $vo['age']; ?></td>
							<td><?php echo $vo['province']; ?>-<?php echo $vo['city']; ?>-<?php echo $vo['area']; ?></td>
							<td><?php echo $vo['tel']; ?></td>
							<td><?php echo $vo['height']; ?></td>
							<td>
							<?php if($vo['diabetes']==1): ?>
								有
								<?php elseif($vo['diabetes']==0): ?>
								无
								<?php else: ?>
								未知
								<?php endif; ?>
							</td>
							<td><?php echo date('Y-m-d h:m:s',$vo['create_time']); ?></td>
						</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
				</form>
			</div>
				<?php echo $list->render(); ?>
		</article>
	</div>
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
function search(){
	var search = $('#search').val();
	window.location.href='com?value='+search;
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>