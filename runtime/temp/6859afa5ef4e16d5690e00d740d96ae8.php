<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"C:\PHP\php11\WWW\Patient/Admin/patient\view\patient\fileinfo.html";i:1524014465;s:75:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\meta.html";i:1521619099;s:77:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
	<nav class="breadcrumb"><a href="<?php echo url('file'); ?>"><i class="Hui-iconfont">&#xe66b;</i> 返回</a><a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<input type="text" class="input-text" style="width:250px" placeholder="输入用户名、姓名" id="search" name="value">
				<button type="button" class="btn btn-success radius" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><!-- <a href="javascript:;" onclick="datadel()" class="btn btn-secondary radius"><i class="Hui-iconfont">&#xe640;</i> 批量下载</a> --> <a href="javascript:;" onclick="upload('<?php echo url('upload',['pash'=>$pash]); ?>')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加文件</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
			<form action="" id="info">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort" id="">
					<thead>
						<tr class="text-c">
							<th><input type="checkbox" name="" id="checkbox"></th>
							<th>文件名</th>
							<th>上次更新时间</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c">
							<td width="25">
							<input type="checkbox" value="<?php echo $vo['file_id']; ?>" name="delete[]" >
							</td>
							<td><?php echo $vo['file_name']; ?></td>
							<td><?php echo date('Y-m-d h:m:s',$vo['create_time']); ?></td>
							<td><a title="下载" href="<?php echo url('filedown',['id'=>$vo['file_id']]); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe640;</i></a>
							<a title="重命名" href="javascript:;" onclick="member_edit('<?php echo $vo['file_name']; ?>',<?php echo $vo['file_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe60c;</i></a>
							 <a title="删除" href="javascript:;" onclick="member_del(<?php echo $vo['file_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
							</td>
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
function upload(url){
		layer.open({
  type: 2 //Page层类型
  ,area: ['770px', '580px']
  ,title: '文件上传'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: url
}); 
}
/*用户-搜索*/
function search(){
	var search = $('#search').val();
	// if(search==''){
	// 	layer.msg('请输入关键字。');
	// }else{
		window.location.href='searchuser?value='+search;
	// }
	// $.post("<?php echo url('user/searchuser'); ?>",{value:search});
}
/*客户-编辑*/
function member_edit(text,id){
	//默认prompt
layer.prompt({
  formType: 0,
  value: text,
  title: '重命名',
}, function(value, index, elem){
	$.post("<?php echo url('filerename'); ?>",{id:id,name:value},function(data){
			layer.msg(data.message,{icon:1,time:1000});
			setTimeout("location.reload()",1000);
			// console.log(data.message);
		});
  // layer.msg(value); //得到value
  // layer.close(index);
});
}
/*用户-删除*/
function member_del(id){
	layer.confirm('确认要删除吗？',function(){
		$.post("<?php echo url('filedel'); ?>",{id:id},function(data){
			layer.msg(data.message,{icon:1,time:1000});
			if(data.status==1){
				setTimeout("location.reload()",500);
			}
		});
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