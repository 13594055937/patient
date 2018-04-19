<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"C:\PHP\php11\WWW\Patient/Admin/manage\view\devicesurface\index.html";i:1524101660;s:74:"C:\PHP\php11\WWW\Patient/Admin/manage\view\..\..\com\view\public\meta.html";i:1521619099;s:76:"C:\PHP\php11\WWW\Patient/Admin/manage\view\..\..\com\view\public\footer.html";i:1523166087;}*/ ?>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 用户列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
		<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a class="btn btn-primary radius" href="javascript:;" onclick="role_add()"><i class="Hui-iconfont">&#xe632;</i> 保存数据</a> </span> </div>
			<form action="" id="info">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort" id="">
					<tr class="text-c">
						<th scope="col" colspan="7"><b><h3>艾 尚 艾 德 足 踝 健 康 管 理 中 心 用 户 信 息 表（支辅具)</h3></b></th>
					</tr>
					<tr class="text-c">
						<th scope="col" colspan="7">Asia-add Foot and Ankle Healthcare Management Center Patient Registration Form </th>
					</tr>
					<tr class="text-c">
						<td>编号</td>
						<td>定制/复查日期</td>
						<td>姓名</td>
						<td>转诊医院</td>
						<td>转诊医生</td>
						<td>医生诊断</td>
						<td>糖尿病</td>
					</tr>
					<tr class="text-c">
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>大客服</td>
						<td>技师</td>
						<td>方案类型</td>
						<td scope="col" colspan="2">支具（足踝）</td>
						<td colspan="2">支具（其它）</td>
					</tr>
					<tr class="text-c">
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td colspan="2"><input type="text" class="input-text radius size-M"></td>
						<td colspan="2"><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>联系方式</td>
						<td>性别</td>
						<td>年龄</td>
						<td>体重（KG)</td>
						<td>身高（cm）</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="text-c">
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="text-c">
						<td>主诉</td>
						<td colspan="6"><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>先病史</td>
						<td colspan="6"><textarea class="textarea radius" name="" id="" cols="30" rows="10"></textarea></td>
					</tr>
					<tr class="text-c">
						<td>查体（影像资料）</td>
						<td colspan="6"><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>测量(cm)</td>
						<td>左</td>
						<td>右</td>
						<td>备注</td>
						<td colspan="3">矫形方案（调整方案）</td>
					</tr>
					<tr class="text-c">
						<td>上肢全长</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td rowspan="13" colspan="3"><img  class="img-responsive" style="height:70%;" src="__STATIC__/images/device.png" alt="图片加载中..."></td>
					</tr>
					<tr class="text-c">
						<td>掌指关节围长</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>上臂2/3围长</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>前臂2/3围长</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>前臂至掌指长度</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>腰围</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>后颈高</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>前颈高</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>颈围</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>2/3大腿周径</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>2/3小腿周径</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>2/3下肢长度</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>跖趾关节处周径</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td>腓骨小头至跖趾关节的长度</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td>板材型号</td>
						<td>预定下次复查时间</td>
						<td>预定下次随访时间</td>
					</tr>
					<tr class="text-c">
						<td>双髁间距 </td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td>双踝间距</td>
						<td><input type="text" class="input-text radius size-M"></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="text-c">
						<td>矫形支具方案</td>
						<td colspan="6"><input type="text" class="input-text radius size-M"></td>
					</tr>
					<tr class="text-c">
						<td rowspan="2">矫形后技师评估与建议</td>
						<td rowspan="2" colspan="4"><textarea class="textarea radius" style="height:60px;" name="" id="" cols="20" rows="5"></textarea></td>
						<td>技师签字</td>
						<td></td>
					</tr>	
					<tr class="text-c">
						<td>复核签字</td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2" class="text-c">我已阅读《矫形辅具用户告知》</td>
						<td colspan="3"> &emsp;用户签名：</td>
						<td class="text-c">日期</td>
						<td></td>
					</tr>			
				</table>
				</form>
			</div>
		</article>
	</div>
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="__STATIC__/js/LodopFuncs.js"></script>
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>