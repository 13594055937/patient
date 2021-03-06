<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"C:\PHP\php11\WWW\Patient/Admin/patient\view\patient\info.html";i:1524129684;s:75:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\meta.html";i:1521619099;s:77:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 用户列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<input type="text" class="input-text" style="width:250px" placeholder="输入客户名关键字" id="search" name="value">
				<button type="button" class="btn btn-success radius" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜客户</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="add()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加客户</a> <!-- <a href="javascript:;" onclick="print()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 打印</a> --></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
			<form action="" id="info">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort" id="">
					<thead>
						<tr class="text-c">
							<th><input type="checkbox" name="" id="checkbox"></th>
							<th>客户姓名</th>
							<th>性别</th>					
							<th>体重(kg)</th>
							<th>年龄</th>
							<th>所属区域</th>
							<th>联系方式</th>
							<th>身高(cm)</th>
							<th>糖尿病</th>
							<th>创建时间</th>
							<th>修改时间</th>
							<th >操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c">
							<td width="25">
							<input type="checkbox" value="<?php echo $vo['customer_id']; ?>" name="delete[]" >
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
							<td><?php echo date('Y-m-d h:m:s',$vo['update_time']); ?></td>
							<td class="td-manage">
							<a title="编辑" href="javascript:;" onclick="member_edit('<?php echo url('infoedit',['id'=>$vo['customer_id']]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="member_del(<?php echo $vo['customer_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
// 用户添加
function add(){
		layer.open({
  type: 2 //Page层类型
  ,area: ['770px', '580px']
  ,title: '客户添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: 'infoadd.html'
}); 
}
/*用户-搜索*/
function search(){
	var search = $('#search').val();
	window.location.href='searchuser?value='+search;
}
/*客户-编辑*/
function member_edit(url){
	layer.open({
  type: 2 //Page层类型
  ,area: ['770px', '540px']
  ,title: '客户编辑'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: url
}); 
}
/*用户-删除*/
function member_del(id){
	layer.confirm('确认要删除吗？',function(){
		$.get("<?php echo url('infodel'); ?>",{id:id},function(data){
			layer.msg(data.message);
			if(data.status==1){
				setTimeout("location.reload()",1000);
			}
		});
	});
}
// 打印
function print(){
	
}


</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>