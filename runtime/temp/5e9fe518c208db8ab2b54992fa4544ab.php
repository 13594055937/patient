<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\PHP\php11\WWW\Patient/Admin/score\view\score\propodeumedit.html";i:1523935362;s:73:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\meta.html";i:1521619099;s:75:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
	<span class="ml-30">客户名:<b><?php echo $list['customer_name']; ?></b></span>
	<hr>
	<input type="hidden" value="<?php echo $list['propodeum_id']; ?>" name="propodeum_id">
			<label for="name" class="lh-30 ml-30"><strong>一、疼痛（40分） </strong></label><br>
				<label class="radio-inline ml-50 lh-26 ">
					<input type="radio" name="pain" value="40" <?php if(($list['pain']==40)): ?>checked<?php endif; ?>>1、 无 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="pain" value="30" <?php if(($list['pain']==30)): ?>checked<?php endif; ?>>2、轻，偶尔 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="pain" value="20" <?php if(($list['pain']==20)): ?>checked<?php endif; ?>>3、中度，每天
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="pain" value="0" <?php if(($list['pain']==0)): ?>checked<?php endif; ?>>4、重度，一直存在
				</label><br>
			<label for="name" class="lh-30 ml-30"><strong>二、功能（45分）  </strong></label><br>
			<label for="name" class="lh-30 ml-40"><strong>活动受限，需要辅助： </strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="auxiliary" value="10" <?php if(($list['auxiliary']==10)): ?>checked<?php endif; ?>>1、无 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="auxiliary" value="7" <?php if(($list['auxiliary']==7)): ?>checked<?php endif; ?>>2、日常无受限，休闲活动受限
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="auxiliary" value="4" <?php if(($list['auxiliary']==4)): ?>checked<?php endif; ?>>3、休闲及日常活动受限 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="auxiliary" value="0" <?php if(($list['auxiliary']==0)): ?>checked<?php endif; ?>>4、休闲及日常活动严重受限，需要助行器，拐杖或是轮椅、支具 
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>穿鞋需求：</strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="shoes" value="10" <?php if(($list['shoes']==10)): ?>checked<?php endif; ?>>1、时尚、休闲，无需内垫
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="shoes" value="5" <?php if(($list['shoes']==5)): ?>checked<?php endif; ?>>2、舒适鞋，需内垫 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="shoes" value="0" <?php if(($list['shoes']==0)): ?>checked<?php endif; ?>>3、改良鞋或是支具 
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>跖趾关节活动度（跖屈和背伸）：</strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Metatarsophalangeal" value="10" <?php if(($list['metatarsophalangeal']==10)): ?>checked<?php endif; ?>>1、正常或轻度受限（75度或更大） 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Metatarsophalangeal" value="5" <?php if(($list['metatarsophalangeal']==5)): ?>checked<?php endif; ?>>2、中度受限（30度至74度） 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Metatarsophalangeal" value="0" <?php if(($list['metatarsophalangeal']==0)): ?>checked<?php endif; ?>>3、严重受限（小于30度） 
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>趾间关节活动（跖屈）： </strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Toe" value="5" <?php if(($list['toe']==5)): ?>checked<?php endif; ?>>1、无受限 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Toe" value="0" <?php if(($list['toe']==0)): ?>checked<?php endif; ?>>2、严重受限（小于10度） 
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>跖趾及趾间关节稳定性（各个方向）：</strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="stability" value="5" <?php if(($list['stability']==5)): ?>checked<?php endif; ?>>1、稳定
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="stability" value="0" <?php if(($list['stability']==0)): ?>checked<?php endif; ?>>2、明显不稳定或是可脱位
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>跖趾及趾间关节胼胝：</strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="tyloma" value="5" <?php if(($list['tyloma']==5)): ?>checked<?php endif; ?>>1、无胼胝，或是无症状的胼胝
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="tyloma" value="0" <?php if(($list['tyloma']==0)): ?>checked<?php endif; ?>>2、有胼胝，有症状
				</label><br>
			<label for="name" class="lh-30 ml-30"><strong>三、力线（10分）</strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Line_of_force" value="15" <?php if(($list['line_of_force']==15)): ?>checked<?php endif; ?>>1、好，跖行足，后足对线好
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Line_of_force" value="8" <?php if(($list['line_of_force']==8)): ?>checked<?php endif; ?>>2、一般，跖行足，后足有一些力线不正，无症状
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Line_of_force" value="0" <?php if(($list['line_of_force']==0)): ?>checked<?php endif; ?>>3、不佳，非跖行足，严重对线不良，有症状
				</label>
				<hr>
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3 ml-50">
				<input class="btn btn-primary radius" type="button" onclick="submit_form()" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
	</form>
</article>
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
function submit_form(){
	var len=$("input:radio:checked").length;
		if(len==8){
			var pain = $('input[name="pain"]:checked ').val();
			var auxiliary = $('input[name="auxiliary"]:checked ').val();
			var Metatarsophalangeal = $('input[name="Metatarsophalangeal"]:checked ').val();
			var Toe = $('input[name="Toe"]:checked ').val();
			var stability = $('input[name="stability"]:checked ').val();
			var tyloma = $('input[name="tyloma"]:checked ').val();
			var shoes = $('input[name="shoes"]:checked ').val();
			var Line_of_force = $('input[name="Line_of_force"]:checked ').val();
			var Total=parseInt(Line_of_force)+parseInt(pain)+parseInt(auxiliary)+parseInt(Metatarsophalangeal)+parseInt(Toe)+parseInt(stability)+parseInt(shoes)+parseInt(tyloma);
			layer.confirm('合计得分：'+Total+'<br>点击【确定】将保存该次调研。', function(){
				 $.ajax({
            		type:"POST",
            		url:"<?php echo url('propodeumedit'); ?>",
            		data:$("form").serialize(),//将表单序列化
            		dataType:'json',
            		success:function(data){
            			layer.msg(data.message);
            			console.log(data.message);        
                    		setTimeout("parent.location.reload()",1000);						
            			}
        			})
				});
			}
		else{
		len=8-len;
		layer.msg('你还有'+len+'个问题未回答。');
		}
	}
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>