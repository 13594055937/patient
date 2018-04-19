<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"C:\PHP\php11\WWW\Patient/Admin/score\view\score\metapedes.html";i:1524129461;s:73:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\meta.html";i:1521619099;s:75:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 功能评估 <span class="c-gray en">&gt;</span> AOFAS评分后足<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<input type="text" class="input-text" style="width:250px" placeholder="输入客户名的关键字" id="search" name="value">
				<button type="button" class="btn btn-success radius" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="add()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i>后足AOFAS评分</a> </span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
			<form action="" id="info">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort" id="">
					<thead>
						<tr class="text-c">
							<th><input type="checkbox" name="" id="checkbox"></th>
							<th>客户名</th>
							<th>疼痛</th>					
							<th>活动受限，需要辅助</th>
							<th>最大行走距离</th>
							<th >行走路面</th>
							<th>步态异常</th>
							<th>矢状面活动</th>
							<th>后足活动度</th>
							<th>踝与后足的稳定性</th>
							<th>力线</th>
							<th>合计</th>
							<th>创建时间</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c">
							<td width="25">
							<input type="checkbox" value="<?php echo $vo['metapedes_id']; ?>" name="delete[]" >
							</td>
							<td><?php echo $vo['customer_name']; ?></td>
							<td><?php echo $vo['pain']; ?>分</td>
							<td><?php echo $vo['auxiliary']; ?>分</td>
							<td><?php echo $vo['distance']; ?>分</td>
							<td><?php echo $vo['pavement']; ?>分</td>
							<td><?php echo $vo['gait']; ?>分</td>
							<td><?php echo $vo['sagittal']; ?>分</td>
							<td><?php echo $vo['foot']; ?>分</td>
							<td><?php echo $vo['stability']; ?>分</td>
							<td><?php echo $vo['line_of_force']; ?>分</td>
							<td><?php echo $vo['pain']+$vo['auxiliary']+$vo['distance']+$vo['pavement']+$vo['gait']+$vo['sagittal']+$vo['foot']+$vo['stability']+$vo['line_of_force']; ?>分</td>
							<td><?php echo date('Y-m-d h:m:s',$vo['metapedescreate_time']); ?></td>
							<td class="td-manage">
							<a title="编辑" href="javascript:;" onclick="member_edit('<?php echo url('metapedesedit',['id'=>$vo['metapedes_id']]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
							</a> <a title="删除" href="javascript:;" onclick="member_del(<?php echo $vo['metapedes_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
<script type="text/javascript" src="__STATIC__/js/LodopFuncs.js"></script>
<script type="text/javascript">
// 后足AOFAS评分
function add(){
		layer.open({
  type: 2 //Page层类型
  ,area: ['80%', '70%']
  ,title: '客户选择'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: 'com.html'
}); 
}
/*用户-搜索*/
function search(){
	var search = $('#search').val();
	window.location.href='metapedesearch?value='+search;
}

/*用户-停用*/
function member_stop(id){
	layer.confirm('确认要停用/启用吗？',function(){
		$.post("<?php echo url('user/status'); ?>",{user_id:id},function(data){
		layer.msg(data.message);
		setTimeout("location.reload()",500);
		});
	});
}
/*用户-编辑*/
function member_edit(url){
	layer.open({
  type: 2 //Page层类型
  ,area: ['770px', '540px']
  ,title: '用户添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: url
}); 
}
/*用户-删除*/
function member_del(id){
	layer.confirm('确认要删除吗？',function(){
		$.get("<?php echo url('metapededel'); ?>",{id:id},function(data){
			layer.msg(data.message);
		});
	setTimeout("location.reload()",1000);
	});
}
//批量删除
function datadel(){
	var len=$("input:checkbox:checked").length;
	if($('#checkbox').prop('checked') ){
		len = len-1
	}
	 if(len==0){
	 layer.msg("没有选中用户。");
	}
	 else{
	 	layer.confirm('确定要删除这'+len+'名用户吗？',function(){
	 	$.post("<?php echo url('user/deleteuser'); ?>",$('form').serializeArray(),
	 	 function(data){
	 		layer.msg(data.message);
	 		setTimeout("location.reload()",1000);
	 	});
	 })
	}
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>