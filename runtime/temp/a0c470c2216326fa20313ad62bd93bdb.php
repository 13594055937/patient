<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"C:\PHP\php11\WWW\Patient/Admin/user\view\power\poweredit.html";i:1521514971;s:72:"C:\PHP\php11\WWW\Patient/Admin/user\view\..\..\com\view\public\meta.html";i:1521619099;s:74:"C:\PHP\php11\WWW\Patient/Admin/user\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
  <div class="Hui-article">
<article class="cl pd-20">
  <form action="" method="post" class="layui-form form form-horizontal" id="form-admin-role-add">
  <input type="hidden" value="<?php echo $list['role_id']; ?>" id="role_id">
      <label class="form-label col-xs-4 col-sm-3">当前角色：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <dl class="permission-list">
          <dt>
            <label><?php echo $list['name']; ?></label>
          </dt>
                        <div id="xtree" style="margin:20px;"></div>
        </dl>
      </div>
  </form>
  <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3" style="margin-top:10px;">
        <input class="btn btn-primary radius" type="button" id="btn_getCk" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </article>
  </div>
</body>
</html>
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>


<!--先引用layui的js-->
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>
<!--引用xtree-->
<script type="text/javascript" src="__STATIC__/layui/layui-xtree.js"></script>
<script type="text/javascript">
        //json数据
        var json = <?php echo $json; ?>;
        // console.log(json);

        layui.use(['form'], function () {
        var form = layui.form;
        var xtree1 = new layuiXtree({
            elem: 'xtree'   //(必填) 放置xtree的容器id，不要带#号
          , form: form     //(必填) layui 的 from
          , data: json     //(必填) json数组（数据格式在下面）
          , isopen: true  //加载完毕后的展开状态，默认值：true
          , icon: {        //三种图标样式，更改几个都可以，用的是layui的图标
                open: "&#xe7a0;"       //节点打开的图标
                , close: "&#xe622;"    //节点关闭的图标
                , end: "&#xe621;"      //末尾节点的图标
            }
            // , click: function (data) {  //节点选中状态改变事件监听，全选框有自己的监听事件
            //     console.log(data.elem); //得到checkbox原始DOM对象
            //     console.log(data.elem.checked); //开关是否开启，true或者false
            //     console.log(data.value); //开关value值，也可以通过data.elem.value得到
            //     console.log(data.othis); //得到美化后的DOM对象
            // }
        });
          document.getElementById('btn_getCk').onclick = function () {
            var oCks = xtree1.GetChecked(); //获取全部选中的末级节点checkbox对象
            // console.log(oCks);
            var role_id=$('#role_id').val();
            var id=[];
            if(oCks.length==0){
              layer.msg('没有选中任何节点。');
            }else{
                for (var i = 0; i < oCks.length; i++) {
                  id[i]=oCks[i].value;
                }
        $.post("<?php echo url('user/power/addpower'); ?>",{id:id,role_id:role_id},function(data){
         // console.log(id); 
        layer.msg(data.message);
        });
        if(data.status){
           setTimeout("location.reload()",1000);
        }
       
      }
        }
    });
</script>
