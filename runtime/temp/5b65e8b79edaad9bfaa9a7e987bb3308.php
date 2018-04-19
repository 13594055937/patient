<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"C:\PHP\php11\WWW\Patient/Admin/patient\view\patient\infoedit.html";i:1524128584;s:77:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />
<link href="__STATIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="__STATIC__/bootstrap-fileinput-master/css/fileinput.css" />
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>	
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
    <input type="hidden" value="<?php echo $list['customer_id']; ?>" name="id">
	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>客户姓名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['customer_name']; ?>" id="customer_name" name="customer_name">
			</div>
		</div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>性别：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="nex" type="radio" id="sex-1" value="1" <?php if(($list['nex'] == 1)): ?>checked<?php endif; ?>>
                    <label for="sex-1">男</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="sex-2" name="nex" value="0" <?php if(($list['nex'] == 0)): ?>checked<?php endif; ?>>
                    <label for="sex-2">女</label>
                </div>
            </div>
        </div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">所属区域：</label>
			  <div class="formControls col-xs-8 col-sm-9"> 
            <span class="select-box" style="width:27%">
                <select class="select" size="1" name="province" id="province">
                <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['name']; ?>" <?php if(($list['province'] == $vo['name'])): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                </span>&nbsp;--
                <span class="select-box" style="width:27%">
                <select class="select" size="1" name="city" id='cityinfo'>
                <if condition="empty($data['city'])">
                <option value="<?php echo $list['city']; ?>"><?php echo $list['city']; ?></option>
                </if>
                </select>
                </span>&nbsp;--
                <span class="select-box" style="width:27%">
                <select class="select" size="1" name="area" id="areainfo">
                <if condition="empty($data['area'])">
                <option value="<?php echo $list['area']; ?>"><?php echo $list['area']; ?></option>
                </if>
                </select>
                </span> </div>
        </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>年龄：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['age']; ?>" id="age" name="age">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>体重：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['weight']; ?>" id="weight" name="weight">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>身高：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['height']; ?>" id="height" name="height">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>联系方式：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $list['tel']; ?>" placeholder="" id="tel" name="tel">
			</div>
		</div>
         <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>糖尿病：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
             <div class="radio-box">
                    <input name="is" type="radio" id="sex-1" value="2" <?php if(($list['diabetes'] == 2)): ?>checked<?php endif; ?>>
                    <label for="sex-1">未知</label>
                </div>
                <div class="radio-box">
                    <input name="is" type="radio" id="sex-1" value="1" <?php if(($list['diabetes'] == 1)): ?>checked<?php endif; ?>>
                    <label for="sex-1">有</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="sex-2" name="is" value="0" <?php if(($list['diabetes'] == 0)): ?>checked<?php endif; ?>>
                    <label for="sex-2">无</label>
                </div>
            </div>
        </div>
			<br> 
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



<!-- 请在下方写此页面业务相关的脚本 -->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="__STATIC__/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__STATIC__/bootstrap-fileinput-master/js/fileinput.min.js"></script>
<script type="text/javascript" src="__STATIC__/bootstrap-fileinput-master/js/locales/zh.js"></script>
<script type="text/javascript">
//地区三级联动
$(document).ready(function() {
        $("#province").change(function(){
            var uu = $(this).find('option:selected').val();
            $.ajax({
            type:"POST",
            // url:'getcityinfo',
            url:"<?php echo url('com/Cityarea/getcityinfo'); ?>",
            data:{'province':uu},
            success:function(msg){
         // console.log(msg);
          $("#cityinfo").html(msg);
            }
        })
        });
        $("#cityinfo").change(function(){
            var uu = $(this).find('option:selected').val();
             var province = $('#province').find('option:selected').val();
            $.ajax({
                // url  :'getareainfo',
                url:"<?php echo url('com/Cityarea/getareainfo'); ?>",
                data :{'city':uu,'province':province},
                type :'POST',
                success:function(msg){
                    $("#areainfo").html(msg);
                }
            })
        });
    })
//日期选择函数
function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd'})}
    }
 }
    // 表单提交
$("#form-member-add").validate({
        rules:{
            customer_name:{
                required:true,
            },
            province:{
                required:true,
            },
            city:{
                required:true,
            },
            area:{
                required:true,
            },
             time:{
                required:true,
            }, 
            weight:{
                required:true,
            }, 
            result:{
                required:true,
            }, 
            tel:{
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
        url: "<?php echo url('infoedit'); ?>",
        type: 'post',
        success: function(data) {
            layer.msg(data.message);
            if(data.status==1){
                setTimeout("parent.location.reload()",1000);
            }
       
        }
     }
















function submit_form(){
    console.log(pash);
    console.log(file_name);
    //     $.ajax({
    //         type:"POST",
    //         url:"<?php echo url('infoadd'); ?>",
    //         // url:url,
    //         data:$("form").serialize(),//将表单序列化
    //         dataType:'json',
    //         success:function(data){
    //         	layer.msg(data.message);
    // //             if(data.status==1){
    // //                 setTimeout("parent.location.reload()",1000);
				// // }
    //         }
    //     })
    }
</script> 
<!-- /请在上方写此页面业务相关的脚本 -->
</body>
</html> 