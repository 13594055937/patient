<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"C:\PHP\php11\WWW\Patient/Admin/login\view\login\index.html";i:1522030531;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="__STATIC__/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<title>智网云服-工单系统</title>
</head>
<body>
<div class="loginWraper">
	<div id="loginform" class="loginBox">
	<center><h3>工單管理系統</h3></center><br>
		<form class="form form-horizontal">
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
				<div class="formControls col-xs-8">
					<input name="name" type="text" placeholder="账户" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
				<div class="formControls col-xs-8">
					<input  name="password" type="password" placeholder="密码" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3" style="margin-left:29%;">
					<input style="width:220px;" onclick="submit_form()" type="button" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="footer">Copyright 南京创神星信息科技有限公司 by H-ui.admin.page.v3.0</div>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.js"></script>
<script src="__STATIC__/lib/layer/2.4/layer.js"></script>
<!-- <script type="text/javascript" src="../../../public/js/ajax.js"></script> -->
</body>
</html>
<script>
 function submit_form(url){
        $.ajax({
            type:"POST",
            url:"<?php echo url('login/login/loginvalidate'); ?>",
            data:$("form").serialize(),//将表单序列化
            dataType:'json',
            success:function(data){
            	layer.alert(data.message);
                if(data.status==1){
                	// console.log(data.info);
                window.location.href="<?php echo url('com/index/index'); ?>";
				}
                
            }
        })
    }
</script>
