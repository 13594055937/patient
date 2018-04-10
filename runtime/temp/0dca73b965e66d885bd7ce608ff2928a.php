<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"C:\PHP\php11\WWW\Patient/Admin/system\view\node\index.html";i:1519615806;s:74:"C:\PHP\php11\WWW\Patient/Admin/system\view\..\..\com\view\public\meta.html";i:1521619099;s:76:"C:\PHP\php11\WWW\Patient/Admin/system\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />
<title>新建网站角色 - 管理员管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 基础数据管理 <span class="c-gray en">&gt;</span> 节点管理<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="" id='btn_getCk' class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除支点</a> <a href="javascript:;" onclick="add()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加节点</a><!--  <a href="javascript:;" onclick="updata()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 修改节点</a> --></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
<article class="cl pd-20">
	<form action="" method="post" class="layui-form form form-horizontal" id="form-admin-role-add">
			<label class="form-label col-xs-4 col-sm-3">支点管理：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list">
					<dt>
						<label>支点列表</label>
					</dt><hr>

 <div id="layui-xtree-demo1" style="margin:20px;"></div>
<!--         <input type="button" value="获取全部选中的checkbox" id="btn_getCk" />
 -->				</dl>
			</div>
		</div>
	</form>
</div>
		</article>
	</div>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="__STATIC__/layui/layui-xtree.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>
<script type="text/javascript">
 //tree数据结构
   var json =<?php echo $json; ?>;

    layui.use('form', function () {
        var form = layui.form;

        //创建tree
        var xtree = new layuiXtree({
            elem: 'layui-xtree-demo1' //放xtree的容器（必填）
             , form: form              //layui form对象 （必填）
             , data: json              //数据，结构请参照下面 （必填）
             , isopen: false            //初次加载时全部展开，默认true （选填）
             , color: "#000"           //图标颜色 （选填）
             , icon: {                 //图标样式 （选填）
                 open: "&#xe7a0;"      //节点打开的图标
                 , close: "&#xe622;"   //节点关闭的图标
                 , end: "&#xe621;"     //末尾节点的图标
             }
        });

        document.getElementById('btn_getCk').onclick = function () {
            var oCks = xtree.GetChecked(); //获取全部选中的末级节点checkbox对象
            // console.log(oCks);
            var id=[];
            if(oCks.length==0){
            	layer.msg('没有选中任何节点。');
            }else{
            		for (var i = 0; i < oCks.length; i++) {
                 	id[i]=oCks[i].value;
            		}
				layer.confirm('确认要删除这'+oCks.length+'个末级节点吗？',function(){
				$.post("<?php echo url('system/node/deletenode'); ?>",{id:id},function(data){
				 // console.log(id);	
				layer.msg(data.message);
				});
				setTimeout("location.reload()",1000);
				});
			}
        }
    });
// 添加支点
    function add(){
		layer.open({
  type: 2 //Page层类型
  ,area: ['770px', '580px']
  ,title: '用户添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: 'nodeadd.html'
}); 
}
//修改节点
function updata(){
	var oCks = xtree.GetChecked();
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>