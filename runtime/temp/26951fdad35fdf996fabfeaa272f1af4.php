<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"C:\PHP\php11\WWW\Patient/Admin/patient\view\patient\infoadd.html";i:1523351936;s:79:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\cityarea.html";i:1523171571;s:77:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
<style type="text/css">
.progress{
	width: 100%;
}
</style>
</head>
<body>	
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>客户姓名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="3到15位字符由字母开头、数字组合" id="customer_name" name="customer_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">所属区域：</label>
					  <div class="formControls col-xs-8 col-sm-9"> 
			<span class="select-box" style="width:27%">
				<select class="select" size="1" name="province" id="province">
				<if condition="empty($data['province'])">
    			<option value="">请选择省市</option>
    			</if>
				<?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>&nbsp;--
				<span class="select-box" style="width:27%">
				<select class="select" size="1" name="city" id='cityinfo'>
				<if condition="empty($data['city'])">
				<option value="">请选择市</option>
				</if>
				</select>
				</span>&nbsp;--
				<span class="select-box" style="width:27%">
				<select class="select" size="1" name="area" id="areainfo">
				<if condition="empty($data['area'])">
				<option value="">请选择城区</option>
				</if>
				</select>
				</span> </div>
		</div>
<script type="text/javascript">
//select监听事件
    // $(document).ready(function() {
    //     $("#province").change(function(){
    //         var uu = $(this).find('option:selected').val();
    //         $.ajax({
    //         type:"POST",
    //         // url:'getcityinfo',
    //         url:"<?php echo url('home/Cityarea/getcityinfo'); ?>",
    //         data:{'province':uu},
    //         success:function(msg){
    //      // console.log(msg);
    //       $("#cityinfo").html(msg);
    //         }
    //     })
    //     });
    //     $("#cityinfo").change(function(){
    //         var uu = $(this).find('option:selected').val();
    			// var uu = $('province').find('option:selected').val();
    //         $.ajax({
    //             // url  :'getareainfo',
    //             url:"<?php echo url('home/Cityarea/getareainfo'); ?>",
    //             data :{'city':uu},
    //             type :'POST',
    //             success:function(msg){
    //                 $("#areainfo").html(msg);
    //             }
    //         })
    //     });
    // })
</script> 

		</div>
        <input type="hidden" name="pash" value="" id="pash">
        <input type="hidden" name="file_name" value="" id='file_name'>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>出生日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="time" id="countTimestart" onfocus="selecttime(1)" value="" size="17" class="date input-text Wdate" id="logmax" readonly>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>体重：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="单位为kg" id="weight" name="weight">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="nex" type="radio" id="sex-1" value="1" checked>
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="nex" value="0">
					<label for="sex-2">女</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>诊断结果：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="result" name="result">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>联系方式：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="tel" name="tel">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>资料上传：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input id="file-1" type="file" class="file" name="file" multiple >
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
 //文件上传
var file_name='';
var pash;
$("#file-1").fileinput({
        language: 'zh', //设置语言
        theme: 'explorer-fa',//主题
        uploadUrl: "<?php echo url('info_file'); ?>", // you must set a valid URL here else you will get an error
        // allowedFileTypes: ['image', 'video', 'flash'], //文件类型
        // allowedFileExtensions: ['jpg', 'png', 'gif','xlsx'],
        // previewFileType:['video','image'],//预览文件类型,内置['image', 'html', 'text', 'video', 'audio', 'flash', 'object',‘other‘]等格式
        // uploadExtraData:$("form").serializeArray(),
        showPreview:true, //是否显示预览区域
        showRemove:false, //是否显示移除
        dropZoneEnabled:false,   //是否显示拖拽区域
        showUpload: true,   //是否显示上传按钮
        browseClass:"btn btn-primary", //按钮样式 
        initialPreviewAsData: true,
        overwriteInitial: false,
         fileActionSettings : {
            showRemove: true,
            showUpload: false,
            }//设置预览图片的显示样式   
    }).on("fileuploaded", function (data,index) { //上传成功
        layer.msg(index.response.message,{icon:1,time:1000});
        file_name=file_name+index.response.name+'/';
        pash=index.response.pash;
    })
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
            if(file_name=='' || pash==''){
                layer.msg('请上传文件。');
                return false;
            }else{
                $('#pash').val(pash);
                $('#file_name').val(file_name);
            }
            $(form).ajaxSubmit(options);
            return false;
        }
    });
    var options = {
        url: "<?php echo url('infoadd'); ?>",
        type: 'post',
        success: function(data) {
            layer.msg(data.message);
            if(data.status==1){
                // setTimeout("parent.layer.closeAll();",1000);
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