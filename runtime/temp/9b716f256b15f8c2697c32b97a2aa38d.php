<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"C:\PHP\php11\WWW\Patient/Admin/patient\view\patient\data.html";i:1523236089;s:75:"C:\PHP\php11\WWW\Patient/Admin/patient\view\..\..\com\view\public\meta.html";i:1521619099;}*/ ?>
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
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 患者信息管理 <span class="c-gray en">&gt;</span> 资料收集 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="Hui-article">
    <article class="cl pd-20">
    <div class="cl pd-5 bg-1 bk-gray"> <span class="l">  <a class="btn btn-primary radius" href="javascript:;" onclick="role_add()"><i class="Hui-iconfont">&#xe632</i>  保存</a>  <a class="btn btn-primary radius" href="javascript:;" onclick="print1()"><i class="Hui-iconfont">&#xe632</i> 保存并打印</a> </span></div><br>
    <script type="text/javascript" src="__STATIC__/case/dist/js/sde.editor.js"></script>
    <div id="myEditor" style="width:1000px;height:1000px;margin:0 auto;">
    <?php echo $list['content']; ?>
    </div>
    </div></article>
    <script type="text/javascript">
        // window.onload = function() {
            var sde = new SDE({
                id: "myEditor",
                title: '', //自定义title
                mode: 'EDITOR',//配置模式
                width: 980,//病历中内部页面宽度
                 print: {
                     title: '',
            header: function(index, count, page) {
              var h = document.createElement('div')
              h.style.backgroundColor = "red"
              h.innerHTML = 'header:<br/>Page ' + (index + 1) + ' <br/>of ' + count
              return h;
            },
            footer: function(index, count, page) {
              var f = document.createElement('div')
              f.innerHTML = 'footer:<br/>Page ' + (index + 1) + ' <br/>of ' + count
              return f;
            },
            height: 1142,
            header_height: 100,
            footer_height: 45
                 }
            });

            function print1(){
                sde.print({},{},'html');
            }
        //         sde.print(//打印页面渲染时的表头回调，需要返回一个Element对象，其中index为第几页（从零开始），count为一共有多少页，page为当年页面的Element对象
        //       //       footer:function(index, count, page){
        //       //           var f = document.createElement('div')
        //       // f.innerHTML = 'footer:<br/>Page ' + (index + 1) + ' <br/>of ' + count
        //       // return f;
        //       //       },//打印页面渲染时的页脚回调，参数参考header
        //             height: 20,//每一页的高度，建议固定该值，单位px
        //             header_height: 35,//打印表头的高度，单位px
        //             footer_height: 35 //打印页脚的高度，单位px
        //             // }
        //             );
        //     }
        // };
    </script>
</body>
</html>