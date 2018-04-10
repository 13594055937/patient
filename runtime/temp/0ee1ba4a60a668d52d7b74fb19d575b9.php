<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"C:\PHP\php11\WWW\Patient/Admin/system\view\casedesign\data.html";i:1523174425;s:74:"C:\PHP\php11\WWW\Patient/Admin/system\view\..\..\com\view\public\meta.html";i:1521619099;s:76:"C:\PHP\php11\WWW\Patient/Admin/system\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
 <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 患者信息管理 <span class="c-gray en">&gt;</span> 患者信息管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <script type="text/javascript" src="__STATIC__/case/sde.config.js"></script>
    <link rel="stylesheet" href="__STATIC__/case/ueditor/themes/default/css/ueditor.css" />
    <script type="text/javascript" src="__STATIC__/case/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" src="__STATIC__/case/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript"  src="__STATIC__/case/dist/js/sde.design.js"></script>
    <script id="myEditor" type="text/plain">
    <?php echo $list['content']; ?>
    </script>
</body>
</html>
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>


<script type="text/javascript">
        // window.onload = function() {
            var toolbarext = [
  {
    name: 'sde-toolbar-test',
    title: '保存',
    init: function(option) {
      var div = document.createElement('div');
      div.className = 'tab-content-item';
      div.setAttribute('id', 'sde-toolbar-test');
      var btn1 = document.createElement('div');
      btn1.className = 'tab-content-item-panel';
      btn1.innerHTML =
        ' <div class="tab-content-item-panel-label">按钮</div>' +
        '<div class="tab-content-item-panel-content">' +
        '<div style="float:left;">' +
        '<div class="tab-content-item-panel-content-control" onclick="save()" title="保存">' +
        '<div class="sde-icon sde-icon-emrdesign" style="width: 64px;height: 32px;"></div>' +
        '<div style="text-align: center;">保存</div>' +
        ' </div>' +
        '</div>' +
        '</div>';
      div.appendChild(btn1);
      return div;
    },
  },
];
            var sde = new SDE({
                id: "myEditor",
                title: '',
                footer: "用户信息表设计器",//编辑器底部的footer
                width:980,
                 toolbars: {
                    // 'sde-toolbar-file': 'file',//文件
                    'sde-toolbar-editor': ['history', 'clipboard', 'fonts', 'paragraphs', 'styles'],//编辑
                    'sde-toolbar-insert': ['horizontal', 'spechars', 'link', 'img', 'map', 'code', 'table', 'formula', 'comment'],//插入
                    'sde-toolbar-tables': ['table', 'blockmergecells', 'alignmergecells'],//表格
                    // 'sde-toolbar-views': ['directory', 'showcomment', 'preview'],//视图
                    'sde-toolbar-tools': ['drafts', 'print', 'searchreplace', 'wordcount'],//工具
                    'sde-toolbar-records': ['sdetemplate', 'sdecontrols']//病历控件
                },
                toolbar_plugins: toolbarext, //给该实例扩展的toolbar
                mode: 'DESIGN',
                ready:function(){
                     $(".sde-editor").css("height","790px");
                    //sde为异步渲染，若想在sde加载完成后 设置html或修改模式等，可在这里触发
                }
            });
// }
        function save(){
            layer.confirm('确认要保存模板吗？',function(){
        $.post("<?php echo url('Casedesign/info'); ?>",{text:sde.html()},function(data){
        layer.msg(data.message);
        // setTimeout("location.reload()",500);
        });
    });
            // console.log();
        }
    </script>
