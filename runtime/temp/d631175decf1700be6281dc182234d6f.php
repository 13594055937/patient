<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"C:\PHP\php11\WWW\Patient/Admin/user\view\role\index.html";i:1519290609;s:72:"C:\PHP\php11\WWW\Patient/Admin/user\view\..\..\com\view\public\meta.html";i:1521619099;s:74:"C:\PHP\php11\WWW\Patient/Admin/user\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="javascript:;" onclick="role_add()"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
			<form action="">
			<div class="mt-10">
			<table class="table table-border table-bordered table-hover table-bg">
				<thead>
					<tr>
						<th scope="col" colspan="8">角色管理</th>
					</tr>
					<tr class="text-c">
						<th width="25"><input type="checkbox" value="" name="" id="checkbox"></th>
						<th width="">ID</th>
				<!-- 		<th width="">父ID</th> -->
						<th width="">角色名</th>
		<!-- 				<th>用户列表</th> -->
						<th width="">描述</th>
						<th>创建时间</th>
						<th>状态</th>
						<th width="">操作</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr class="text-c">
						<td><input type="checkbox" value="<?php echo $vo['role_id']; ?>" name="delete[]"></td>
						<td><?php echo $vo['role_id']; ?></td>
			<!-- 			<td><?php echo $vo['father_id']; ?></td> -->
						<td><?php echo $vo['name']; ?></td>
						<!-- <td><?php echo $vo['powerid']; ?></td> -->
						<td><?php echo $vo['bewrite']; ?></td>
						<td><?php echo $vo['create_roletime']; ?></td>
						<td class="td-status">
								<?php if($vo['role_status']==1): ?>
								<span class="label label-success radius">已启用</span>
								<?php elseif($vo['role_status']==0): ?>
								<span class="label label-defaunt radius">已停用</span>
								<?php else: ?>
								<span class="label label-defaunt radius">异常</span>'
								<?php endif; ?>
							</td>
						<td width="8%">
						<?php if($vo['role_status']==1): ?>
								<a style="text-decoration:none" onClick="member_stop(<?php echo $vo['role_id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>  
								<?php else: ?>
								<a style="text-decoration:none" onClick="member_stop(<?php echo $vo['role_id']; ?>)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a> 
								<?php endif; ?> 
						&ensp;<a title="编辑" href="javascript:;" onclick="member_edit('<?php echo url('roleedit',['role_id'=>$vo['role_id']]); ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="member_del(<?php echo $vo['role_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			</div>
			</form>
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
/*角色-添加*/
function role_add(){
		layer.open({
  type: 2 //Page层类型
  ,area: ['45%','35%']
  ,title: '角色添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: 'roleadd.html'
}); 
}
/*角色-停用/启用*/
function member_stop(id){
	layer.confirm('确认要停用/启用吗？',function(){
		$.post("<?php echo url('role/status'); ?>",{id:id},function(data){
		layer.msg(data.message);
		setTimeout("location.reload()",500);
		});
	});
}
/*角色-删除*/
function member_del(id){
	layer.confirm('确认要删除吗？删除前请确保该角色中没有用户。',function(){
		$.post("<?php echo url('role/roledel'); ?>",{role_id:id},function(data){
			layer.msg(data.message);
			if(data.status==1){
				setTimeout("location.reload()",500);
			}
		});
	});
}
function datadel(){
	var len=$("input:checkbox:checked").length;
	if($('#checkbox').prop('checked') ){
		len = len-1
	}
	 if(len==0){
	 layer.msg("没有选中角色。");
	}
	 else{
	 	layer.confirm('确定要删除这'+len+'个角色吗？',function(){
	 	$.post("<?php echo url('deleterole'); ?>",$('form').serializeArray(),
	 	 function(data){
	 		layer.msg(data.message);
	 		if(data.status){
	 		setTimeout("location.reload()",1000);
	 		}
	 	});
	 })
	}
}
/*角色-编辑*/
function member_edit(url){
	layer.open({
  type: 2 //Page层类型
  ,area: ['500px', '300px']
  ,title: '用户添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: url
}); 
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>