<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\PHP\php11\WWW\Patient/Admin/score\view\score\metapedesedit.html";i:1523930685;s:73:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\meta.html";i:1521619099;s:75:"C:\PHP\php11\WWW\Patient/Admin/score\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
	<span class="ml-30">客户名:<b><?php echo $list['customer_name']; ?></b></span>
	<hr>
		<input type="hidden" value="<?php echo $list['metapedes_id']; ?>" name="metapedes_id">
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
			<label for="name" class="lh-30 ml-30"><strong>二、功能（50分）  </strong></label><br>
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
			<label for="name" class="lh-30 ml-40"><strong>最大行走距离（街区，1街区约200米）： </strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="distance" value="5" <?php if(($list['distance']==5)): ?>checked<?php endif; ?>>1、大于6街区（约1200米） 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="distance" value="4" <?php if(($list['distance']==4)): ?>checked<?php endif; ?>>2、 4-6街区 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="distance" value="2" <?php if(($list['distance']==2)): ?>checked<?php endif; ?>>3、1-3街区
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="distance" value="0" <?php if(($list['distance']==0)): ?>checked<?php endif; ?>>4、小于1 街区
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>行走路面：</strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="pavement" value="5" <?php if(($list['pavement']==5)): ?>checked<?php endif; ?>>1、任何路面无困难 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="pavement" value="3" <?php if(($list['pavement']==3)): ?>checked<?php endif; ?>>2、不平路面、台阶、下坡、梯子有一些困难 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="pavement" value="0" <?php if(($list['pavement']==0)): ?>checked<?php endif; ?>>3、不平路面、台阶、下坡、梯子严重受限 
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>步态异常： </strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="gait" value="8" <?php if(($list['gait']==8)): ?>checked<?php endif; ?>>1、大于6街区（约1200米） 
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="gait" value="4" <?php if(($list['gait']==4)): ?>checked<?php endif; ?>>2、有明显异常
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="gait" value="0" <?php if(($list['gait']==0)): ?>checked<?php endif; ?>>3、存在显著的病理步态 
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>矢状面活动（屈与伸活动度之和）： </strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Sagittal" value="8" <?php if(($list['sagittal']==8)): ?>checked<?php endif; ?>>1、正常或轻度受限（30度或更大）
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Sagittal" value="4" <?php if(($list['sagittal']==4)): ?>checked<?php endif; ?>>2、中度受限（15度-29度）	
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Sagittal" value="0" <?php if(($list['sagittal']==0)): ?>checked<?php endif; ?>>3、严重受限（小于15度）
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>后足活动度（内翻与外翻之和）： </strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="foot" value="6" <?php if(($list['foot']==6)): ?>checked<?php endif; ?>>1、正常或轻度受限（正常活动度的75%-100%）
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="foot" value="3" <?php if(($list['foot']==3)): ?>checked<?php endif; ?>>2、中度受限（正常活动度的25%-74%）
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="foot" value="0" <?php if(($list['foot']==0)): ?>checked<?php endif; ?>>3、严重受限（小于正常活动度的25%）
				</label><br>
			<label for="name" class="lh-30 ml-40"><strong>踝与后足的稳定性（前后，内外翻）： </strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="stability" value="8" <?php if(($list['stability']==8)): ?>checked<?php endif; ?>>1、稳定
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="stability" value="0" <?php if(($list['stability']==0)): ?>checked<?php endif; ?>>2、不稳定
				</label><br>
			<label for="name" class="lh-30 ml-30"><strong>三、力线（10分）</strong></label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Line_of_force" value="10" <?php if(($list['line_of_force']==10)): ?>checked<?php endif; ?>>1、好，跖行足，后足对线好
				</label><br>
				<label class="radio-inline ml-50 lh-26">
					<input type="radio" name="Line_of_force" value="5" <?php if(($list['line_of_force']==5)): ?>checked<?php endif; ?>>2、一般，跖行足，后足有一些力线不正，无症状
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
		if(len==9){
			var pain = $('input[name="pain"]:checked ').val();
			var auxiliary = $('input[name="auxiliary"]:checked ').val();
			var distance = $('input[name="distance"]:checked ').val();
			var pavement = $('input[name="pavement"]:checked ').val();
			var gait = $('input[name="gait"]:checked ').val();
			var Sagittal = $('input[name="Sagittal"]:checked ').val();
			var foot = $('input[name="foot"]:checked ').val();
			var stability = $('input[name="stability"]:checked ').val();
			var Line_of_force = $('input[name="Line_of_force"]:checked ').val();
			var Total=parseInt(stability)+parseInt(Line_of_force)+parseInt(pain)+parseInt(auxiliary)+parseInt(distance)+parseInt(pavement)+parseInt(gait)+parseInt(Sagittal)+parseInt(foot);
			layer.confirm('合计得分：'+Total+'<br>点击【确定】将保存该次调研。', function(){
				 $.ajax({
            		type:"POST",
            		url:"<?php echo url('score/score/metapedesedit'); ?>",
            		data:$("form").serialize(),//将表单序列化
            		dataType:'json',
            		success:function(data){
            			layer.msg(data.message);
                    	setTimeout("parent.location.reload()",1000);
            			}
        			})
				});
			}
		else{
		len=9-len;
		layer.msg('你还有'+len+'个问题未回答。');
		}
	}
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>