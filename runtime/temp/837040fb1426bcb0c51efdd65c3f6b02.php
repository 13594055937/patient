<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"C:\PHP\php11\WWW\Patient/Admin/system\view\diagnosis\index.html";i:1523865239;s:74:"C:\PHP\php11\WWW\Patient/Admin/system\view\..\..\com\view\public\meta.html";i:1521619099;s:76:"C:\PHP\php11\WWW\Patient/Admin/system\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	系统管理
	<span class="c-gray en">&gt;</span>
	诊断管理
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<input type="text" name="value" id="value" placeholder="请输入搜索诊断名的关键字" style="width:250px" class="input-text">
		<button onclick="member_search()" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a href="javascript:;" onclick="member_datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		<a href="javascript:;" onclick="submit_add()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加诊断</a>
		</span>
		<span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
	</div> <br>
	<span class="select-box inline">
		<select name="" class="select" id="select">
			<option value="2" <?php if(($difference == 2)): ?>selected<?php endif; ?>>显示全部数据</option>
			<option value="0" <?php if(($difference == 0)): ?>selected<?php endif; ?>>仅显示医生数据</option>
			<option value="1" <?php if(($difference == 1)): ?>selected<?php endif; ?>>仅显示技师数据</option>
		</select>
		</span><br><br>
	<form action="" id="form">
	<table class="table table-border table-bordered table-bg table-hover table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" id="checkbox"></th>
				<th width="">诊断名</th>
				<th width="20%">所属职称</th>
				<th width="15%">创建时间</th>
				<th width="15%">更新时间</th>
				<th width="10%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td width="25"><input type="checkbox" value="<?php echo $vo['diagnosis_id']; ?>" name="delete[]" ></td>
				<td><b><?php echo $vo['diagnosis_name']; ?></b></td>
				<td><?php echo $vo['difference']; ?></td>
				<td><?php echo $vo['create_time']; ?></td>
				<td><?php echo $vo['update_time']; ?></td>
				<td><a title="编辑" href="javascript:;" onclick="member_edit('<?php echo url('diagnosisedit',['id'=>$vo['diagnosis_id']]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				 <a title="删除" href="javascript:;" onclick="member_del(<?php echo $vo['diagnosis_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	</form>
	<div id="pageNav" class="pageNav"></div>
	<?php echo $list->render(); ?>
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
<!-- <script type="text/javascript" src="__STATIC__/js/ajax_layer.js"></script> -->
<script type="text/javascript">
  $("#select").change(function(){
	 var value = $(this).find('option:selected').val();
	 window.location.href='index/difference/'+value;
  	})
function submit_add(){
	var url='<?php echo url('system/diagnosis/diagnosisadd'); ?>';
	layer.open({
  type: 2 //Page层类型
  ,area: ['50%','30%']
  ,title: '诊断信息添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content:url
}); 
}
function member_edit(url){
	layer.open({
  type: 2 //Page层类型
  ,area: ['55%','30%']
  ,title: '诊断信息添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: url
}); 
}
function member_del(id){
	layer.confirm('确认要删除吗？',function(){
		$.post("<?php echo url('diagnosisdel'); ?>",{id:id},function(data){
			layer.msg(data.message);
		});
	setTimeout("location.reload()",1000);
	});
}
function member_datadel(){
	var len=$("input:checkbox:checked").length;
	if($('#checkbox').prop('checked') ){
		len = len-1
	}
	 if(len==0){
	 layer.msg("没有选中诊断。");
	}
	 else{
	 	layer.confirm('确定要删除这'+len+'条数据吗？',function(){
	 	$.post("<?php echo url('diagnosisdelete'); ?>",$('form').serializeArray(),
	 	 function(data){
	 		layer.msg(data.message);
	 		setTimeout("location.reload()",1000);
	 	});
	 })
	}
}
function member_search()
{
	var text=$('#value').val();
	window.location.href='diagnosissearch?text='+text;
}
</script>
</body>
</html>