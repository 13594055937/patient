<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"C:\PHP\php11\WWW\Patient/Admin/file\view\ibcfile\ibcfileadd.html";i:1522389460;}*/ ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="__STATIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="__STATIC__/bootstrap-fileinput-master/css/fileinput.css" />
	<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
	<script type="text/javascript" src="__STATIC__/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="__STATIC__/bootstrap-fileinput-master/js/fileinput.min.js"></script>
	<script type="text/javascript" src="__STATIC__/bootstrap-fileinput-master/js/locales/zh.js"></script>
    <script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
</head>
<body>
  <div class="form-group" style="width:80%;height:64%;margin:50px auto;">
            <div class="file-loading">
                <input id="file-1" type="file" class="file" name="file" multiple >
            </div>
        </div>
</body>
</html>
<script>
$("#file-1").fileinput({
        language: 'zh', //设置语言
        theme: 'explorer-fa',//主题
        uploadUrl: "<?php echo url('file/ibcfile/ibcfileadd'); ?>", // you must set a valid URL here else you will get an error
        // allowedFileTypes: ['image', 'video', 'flash'], //文件类型
        // allowedFileExtensions: ['jpg', 'png', 'gif','xlsx'],
        // previewFileType:['video','image'],//预览文件类型,内置['image', 'html', 'text', 'video', 'audio', 'flash', 'object',‘other‘]等格式
        showPreview:true, //是否显示预览区域
        dropZoneEnabled:false,   //是否显示拖拽区域
        showUpload: true,   //是否显示上传按钮
        browseClass:"btn btn-primary", //按钮样式 
        initialPreviewAsData: true,
        overwriteInitial: false,
         fileActionSettings : {
            showRemove: false,
            showUpload: false,
            }//设置预览图片的显示样式   
    }).on("fileuploaded", function (data,index) { //上传成功
        layer.msg(index.response.message+' 上传成功。',{icon:1,time:1000});
        // console.log(index);
    })


</script>