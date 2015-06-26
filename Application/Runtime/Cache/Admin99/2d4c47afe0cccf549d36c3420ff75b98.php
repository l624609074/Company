<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-后台搜索管理</title>
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/Public/Admin/css/float.css">
   
    <link rel="stylesheet" href="/Public/Admin/css/pagination.css">
    <script src="/Public/Js/jq.js"></script>
    <script src="/Public/Admin/js/pintuer.js"></script>
    <script src="/Public/Admin/js/respond.js"></script>
    <script src="/Public/Admin/js/admin.js"></script>
    <script src="/Public/Admin/js/order.js"></script>
   <script type="text/javascript"> 
			//显示灰色 jQuery 遮罩层 
		function showBg(orderid) { 
			var bh = $("body").height(); 
			var bw = $("body").width(); 
			$("#fullbg").css({ 
					height:bh, 
					width:bw, 
					display:"block" 
			}); 
			$("#dialog").show(); 
			$("input[name='orderIdHidden']").val(orderid);
			$("#add").text("订单["+orderid+"]--------------------");
			} 
			//关闭灰色 jQuery 遮罩 
			function closeBg() { 
				$("#fullbg,#dialog").hide(); 
				$("#orderIdHidden").val("");
				$("#add").text("");
			} 
</script>


    
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/Public/Admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="">网站首页</a>
                <a class="button button-little bg-yellow" href="/admin99/Login/LoginOut">注销登录</a>
            </span>
                <ul class="nav nav-inline admin-nav">
              
              
                <li class="active"><a href="/admin99/User/index/System/Maka" class="icon-shopping-cart" class="icon-file-text" >玛卡订单管理</a>
					<ul>
					
					<li><a href="#"> </a></li><li class="active"><a href="/admin99/User/Index/System/<?php echo ($System); ?>">订单管理</a><li><a href="/admin99/Order/Search/System/<?php echo ($System); ?>">订单搜索</a><li><a href="/admin99/Product/All/System/<?php echo ($System); ?>" >产品设定</a></li><li><a href="/admin99/Advisory/Index/System/<?php echo ($System); ?>" >美容测试</a></li>
					 <?php if(strtolower($System) == 'ejiao'): ?><li><a href="/admin99/News/Index/System/<?php echo ($System); ?>">新闻资讯管理</a></li> 
															<?php else: endif; ?>
					
					
					
					</ul>
                </li>
					  <li class="active"  ><a href="/admin99/User/index/System/Ejiao" class="icon-shopping-cart"  style="margin-left:300px;background:white;border:1px solid #09c;border-bottom:none;color:#09c" class="icon-file-text" >阿胶订单管理</a></li>
               
            </ul> 
        </div>
        <div class="admin-bread">
            <span>您好，<font style="color:red" ><?php echo (session('useradmin')); ?> </font>，欢迎您。</span>
            <ul class="bread">
                 <li><a href="/admin99/User/index/System/<?php echo ($System); ?>" class="icon-home"> 开始</a></li>
                
                <li>订单管理</li>
            </ul>
        </div>
    </div>
</div>
<div style="text-align:center">
<div id="fullbg"></div> 
<div id="dialog"> 
<p class="close"><span id="add"></span><a href="#" onclick="closeBg();">关闭</a>  </p>
<div><center>
	<table>
			<tr><td>快递公司:&nbsp;&nbsp;</td><td><input type="text" name="expressName" /></td></tr>
			<tr><td>快递单号:&nbsp;&nbsp;</td><td><input type="text" name="expressNum" /></td></tr>
			
			<input type="hidden" name="orderIdHidden" value="" />
	</table>
<br/>
<br/>
<input type="button" value="提交" onclick="orderAction('sent','','/admin99/Order','<?php echo ($System); ?>')" />
</center>

</div> 
</div> 
</div> 
<div class="admin">
	<center>
	<h2>订单搜索页面</h2><br/><br/><br/>
		<form method="get" action="/admin99/Order/DoSearch/System/<?php echo ($System); ?>">
					<select name="SearchType">
						
						<option value="ordernum" >订单号</option>
						<option value="NoConfirm" >未确定</option>
							<option value="Confirm" >确定</option>
						<option value="Sented" >已发货</option>
					
						<option value="ExpressNum" >快递单号</option>
						<option value="Phone" >电话</option>
						<option value="Name" >姓名</option>
						<option value="Date" >日期筛选</option>
						
			
						
					</select><br/>
		<input type="text" name="ordernum" placeholder="订单号"/><br/>
		<input type="text" name="ExpressNum" placeholder="快递单号"/><br/>
		<input type="text" name="Phone" placeholder="电话"/><br/>
		<input type="text" name="Name" placeholder="姓名"/><br/>
		开始日期<input type="text" name="Start" placeholder="请输入格式2015-01-01"/>结束日期<input type="text" name="End" placeholder="请输入格式2015-01-01"/>
		<input type="submit" />
		</form>

</center>


    <br />

    <p class="text-center">Power By Blues &copy; 2015</p>
</div>


</body>
</html>