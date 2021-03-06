<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:56:"C:\PHP\php11\WWW\Patient/Admin/com\view\index\index.html";i:1520390250;s:56:"C:\PHP\php11\WWW\Patient/Admin/com\view\public\meta.html";i:1521619099;s:58:"C:\PHP\php11\WWW\Patient/Admin/com\view\public\header.html";i:1524126888;s:56:"C:\PHP\php11\WWW\Patient/Admin/com\view\public\menu.html";i:1524043743;s:58:"C:\PHP\php11\WWW\Patient/Admin/com\view\public\footer.html";i:1523166087;}*/ ?>
﻿<!DOCTYPE HTML>
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
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#">工單管理系統</a> <!-- <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>  -->
            <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span> 
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <!-- <nav class="nav navbar-nav">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
                            <li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
                            <li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
                            <li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
                    </ul>
                </li>
            </ul>
        </nav> -->
        <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
            <ul class="cl">
                <li><?php echo session('role_info.name'); ?></li>
                <li class="dropDown dropDown_hover">
                    <a href="#" class="dropDown_A"><?php echo session('user_info.username'); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
                    <ul class="dropDown-menu menu radius box-shadow">
                        <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                        <li><a href="<?php echo url('login/login/outlogin'); ?>">退出</a></li>
                </ul>
            </li>
                <<!-- li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li> -->
                <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                    <ul class="dropDown-menu menu radius box-shadow">
                        <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                        <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                        <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                        <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                        <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                        <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
</header>
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('user/role/index'); ?>" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
                    <li><a data-href="<?php echo url('user/power/index'); ?>" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
                    <li><a data-href="<?php echo url('user/user/index'); ?>" data-title="管理员列表" href="javascript:void(0)">用户列表</a></li>
            </ul>
        </dd>
    </dl>
     <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe72d;</i> 患者信息管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('patient/patient/info'); ?>" data-title="患者信息管理" href="javascript:void(0)">患者信息管理</a></li>
                    <li><a data-href="<?php echo url('patient/patient/file'); ?>" data-title="资料收集表管理" href="javascript:void(0)">资料收集表管理</a></li>
                    <!-- <li><a data-href="<?php echo url('user/user/index'); ?>" data-title="管理员列表" href="javascript:void(0)">用户列表</a></li> -->
            </ul>
        </dd>
    </dl>
    <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe639;</i> 功能评估<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('score/score/metapedes'); ?>" data-title="AOFAS评分后足" href="javascript:void(0)">AOFAS评分后足</a></li>
                    <li><a data-href="<?php echo url('score/score/propodeum'); ?>" data-title="AOFAS评分前足" href="javascript:void(0)">AOFAS评分前足</a></li>
                    <li><a data-href="<?php echo url('score/score/midleg'); ?>" data-title="AOFAS评分中足" href="javascript:void(0)">AOFAS评分中足</a></li>
            </ul>
        </dd>
    </dl>
    <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe639;</i> 健康管理中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('manage/devicesurface/index'); ?>" data-title="支辅具定制表" href="javascript:void(0)">支辅具定制表</a></li>
                    <li><a data-href="<?php echo url('manage/icbsurface/index'); ?>" data-title="ICB信息表" href="javascript:void(0)">ICB信息表</a></li>
            </ul>
        </dd>
    </dl>
   <!--  <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe6f2;</i> 用户档案文件管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('file/Ibcfile/index'); ?>" data-title="ICB定制用户文件管理" href="javascript:void(0)">ICB定制用户文件管理</a></li>
                    <li><a data-href="<?php echo url('file/Ibcfile/index'); ?>" data-title="支辅具定制用户文件管理" href="javascript:void(0)">支辅具定制用户文件管理</a></li>
                    <!-- <li><a data-href="<?php echo url('user/user/index'); ?>" data-title="管理员列表" href="javascript:void(0)">用户列表</a></li> -->
         <!--    </ul>
        </dd>
    </dl> --> 
        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 基础数据管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('system/hospital/index'); ?>" data-title="医院管理" href="javascript:void(0)">医院管理</a></li>
                    <li><a data-href="<?php echo url('system/doctor/index'); ?>" data-title="医生管理" href="javascript:void(0)">医生管理</a></li>
                    <li><a data-href="<?php echo url('system/technician/index'); ?>" data-title="技师管理" href="javascript:void(0)">技师管理</a></li>
                    <li><a data-href="<?php echo url('system/diagnosis/index',['difference'=>2]); ?>" data-title="诊断管理" href="javascript:void(0)">诊断管理</a></li>
                    <li><a data-href="<?php echo url('system/other/index'); ?>" data-title="其他项目管理" href="javascript:void(0)">其他项目管理</a></li>
                    <!-- <li><a data-href="<?php echo url('system/Casedesign/info'); ?>" data-title="用户信息表设计器" href="javascript:void(0)">用户信息表设计器</a></li>
                    <!<li><a data-href="<?php echo url('system/Casedesign/data'); ?>" data-title="资料收集表设计器" href="javascript:void(0)">资料收集表设计器</a></li> -->
                    <li><a data-href="<?php echo url('system/node/index'); ?>" data-title="节点管理" href="javascript:void(0)">节点管理</a></li>
                    <li><a data-href="<?php echo url('system/Log/index'); ?>" data-title="系统日志" href="javascript:void(0)">系统日志</a></li>
            </ul>
        </dd>
    </dl>
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!-- <section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp">
            <ul id="min_title_list" class="acrossTab cl">
                <li class="active">
                    <span title="我的桌面" data-href="welcome.html">我的桌面</span>
                    <em></em></li>
        </ul>
    </div>
        <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
    <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
            <div style="display:none" class="loading"></div>
            <iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>
    </div>
</div>
</section> -->
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的桌面" data-href="<?php echo url('user/user/index'); ?>">我的桌面</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo url('user/user/index'); ?>"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>

 <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
$(function(){
	/*$("#min_title_list li").contextMenu('Huiadminmenu', {
		bindings: {
			'closethis': function(t) {
				console.log(t);
				if(t.find("i")){
					t.find("i").trigger("click");
				}		
			},
			'closeall': function(t) {
				alert('Trigger was '+t.id+'\nAction was Email');
			},
		}
	});*/
});
/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: '<div style="margin-left:30px;margin-top:20px;line-height:28px;">用户名：<?php echo session('user_info.usercode'); ?><br>姓名：<?php echo session('user_info.username'); ?><br>用户角色:<?php echo session('role_info.name'); ?><br>上一次登陆时间：<?php echo date('Y-m-d h:m:s',session('user_info.latestLogin')); ?></div>'
	});
}

/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}


</script> 

</body>
</html>