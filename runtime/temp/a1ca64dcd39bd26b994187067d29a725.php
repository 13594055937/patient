<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"C:\PHP\php11\WWW\Patient/Admin/user\view\role\roleadd.html";i:1518330335;s:72:"C:\PHP\php11\WWW\Patient/Admin/user\view\..\..\com\view\public\meta.html";i:1521619099;s:74:"C:\PHP\php11\WWW\Patient/Admin/user\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="roleName" name="roleName" datatype="*4-16" nullmsg="用户账户不能为空">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="memo">
			</div>
		</div>
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网站角色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" value="" name="user-Character-0" id="user-Character-0">
							权限分配</label>
					</dt><hr>
<div class="aiui">
    <div class="ai-treenav">
        <ul>
            <li>
                <ul class="nav-trunk">
                    <li ><a  class="item-name c-f"><i></i><span class="pull-left"><div class="checkbox c-selected"><input type="checkbox"></div></span><span class="pull-left filename">用户管理</span></a>
                        <ul class="nav-trunk fold ">
                            <li ><a  class="item-name c-f" title="二级目录名称二级目录名称二级目录名称"><i></i><span class="pull-left"><div class="checkbox"><input type="checkbox"></div></span><span class="pull-left filename" >用户管理</span></a>
                                <ul class="nav-trunk fold">
                                    <li> <a  class="item-name c-f"><i></i><span class="pull-left"><div class="checkbox"><input type="checkbox"></div></span><span class="pull-left filename">三级</span></a>                   
                                    </li>
                                </ul>
                            </li>
                        </ul>
					 <li ><a  class="item-name c-f"><i></i><span class="pull-left"><div class="checkbox"><input type="checkbox"></div></span><span class="pull-left filename">一级目录名称</span></a>
                        <ul class="nav-trunk fold ">
                            <li ><a  class="item-name c-f"><i></i><span class="pull-left"><div class="checkbox"><input type="checkbox"></div></span><span class="pull-left filename">二级目录名称</span></a>
                                <ul class="nav-trunk fold">
                                    <li> <a  class="item-name  item-name-last c-f"><i></i><span class="pull-left"><div class="checkbox"><input type="checkbox"></div></span><span class="pull-left filename">三级目录名称</span></a>
                                    </li>
                                    <li> <a  class="item-name  item-name-last c-f"><i></i><span class="pull-left"><div class="checkbox"><input type="checkbox"></div></span><span class="pull-left filename">三级目录名称</span></a>
                                    </li>
                                    <li> <a  class="item-name  item-name-last c-f"><i></i><span class="pull-left"><div class="checkbox"><input type="checkbox"></div></span><span class="pull-left filename">三级目录名称</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div><br>	 -->
			<!-- 	</dl>
			</div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="status" type="radio" id="sex-1" value="1" checked>
					<label for="sex-1">启用</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="status" value="0">
					<label for="sex-2">停用</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</article>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
// $(function(){
// 	$(".permission-list dt input:checkbox").click(function(){
// 		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
// 	});
// 	$(".permission-list2 dd input:checkbox").click(function(){
// 		var l =$(this).parent().parent().find("input:checked").length;
// 		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
// 		if($(this).prop("checked")){
// 			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
// 			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
// 		}
// 		else{
// 			if(l==0){
// 				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
// 			}
// 			if(l2==0){
// 				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
// 			}
// 		}
// 	});
	
	$("#form-admin-role-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			 $(form).ajaxSubmit(options);
            return false;
		}
	});
	var options = {
	    url: "<?php echo url('role/rolesave'); ?>",
	    type: 'post',
	    success: function(data) {
	    	layer.msg(data.message);
	    	if(data.status==1){
	    		// setTimeout("parent.layer.closeAll();",1000);
	    		setTimeout("parent.location.reload()",1000);
	    	}
	   
	    }
	 }

$(function () {
    $(".item-name > i").click(function(){
        $(this).parent().parent().toggleClass("unfold")
        $(this).parent().parent().find("ul:first").slideToggle(500);
        $(this).toggleClass("unfold");
        $(this).parent().children(".filename").toggleClass("filename-open");
    });
    });
    $(function () {
        $(".checkbox").click(function (){
            $(this).toggleClass("c-selected");
        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>