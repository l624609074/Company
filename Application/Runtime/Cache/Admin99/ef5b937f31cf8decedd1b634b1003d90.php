<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-<?php echo ($System); ?>后台管理</title>
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/Public/Admin/css/float.css">
    <link rel="stylesheet" href="/Public/Admin/css/pagination.css">
  
    <script src="/Public/Js/jq.js"></script>

    <script src="/Public/Admin/js/respond.js"></script>

    <script src="/Public/Admin/js/order.js"></script>
   <script type="text/javascript"> 
			//显示灰色 jQuery 遮罩层 
		function showBg(ordernum,orderid) { 
			var bh = $("body").height(); 
			var bw = $("body").width(); 
			$("#fullbg").css({ 
					height:bh, 
					width:bw, 
					display:"block" 
			}); 
			$("#dialog").show(); 
			$("input[name='ordernumHidden']").val(ordernum);            //赋上隐形的  ordernum值
			$("input[name='orderidHidden']").val(orderid);             //赋上隐形的  orderid值
			$("#add").text("订单["+ordernum+"]--------------------");
			} 
			//关闭灰色 jQuery 遮罩 
			function closeBg() { 
				$("#fullbg,#dialog").hide(); 
				$("#ordernumHidden").val("");
				$("#orderidHidden").val("");
				$("#add").text("");
			} 
</script>
    <script>
			SelectArr=[];
			$(function(){
			//全选
					$("#SelectAllBtn").on("click",function(){
							//将数组置空 ，防止出现 异议
							SelectArr=[];
							$("input[name='buyinfoid']").each(function(){
									
									$(this).attr("checked",true);
									var val=$(this).val();
									SelectArr.push(val);
							}
							)
							
					}
					);
					//取消全选
				$("#CannelAllBtn").on("click",function(){
					
							$("input[name='buyinfoid']").each(function(){
									
									$(this).attr("checked",false);
								}
							);
							SelectArr=[];
							
					}
				);
			
			//excel导出交互，传过去 需要导出来的 orderi值
			
			$.ajax({
					url:"/admin99/Order/Export",
					data:"",
					success:function(){
					
					}
				
			
			});
			
			
			
			});
	
	
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
<p class="close"><span id="add"></span><a href="#" onClick="closeBg();">关闭</a>  </p>
<div><center>
	<table>
			<tr><td>快递公司:&nbsp;&nbsp;</td><td><input type="text" name="expressName" /></td></tr>
			<tr><td>快递单号:&nbsp;&nbsp;</td><td><input type="text" name="expressNum" /></td></tr>
			
		
			<input type="hidden" name="orderidHidden" value="" />
	</table>
<br/>
<br/>
<input type="button" value="提交" onClick="orderAction('','','sent','/admin99/Order','<?php echo ($System); ?>')" />
</center>

</div> 
</div> 
</div> 
<div class="admin">
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>订单列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall"   id="SelectAllBtn" value="全选" /> &nbsp;&nbsp;&nbsp;
			<input type="button" class="button button-small checkall"   id="CannelAllBtn" value="取消全选" />
			 <input type="button" class="button button-small border-blue" value="批量确认" />
            <input type="button" class="button button-small border-green" value="批量发货" />
            <input type="button" class="button button-small border-yellow" value="批量删除" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" class="button button-small border-yellow" value="添加新订单" onClick="window.location.href='/admin99/Order/Add/System/<?php echo ($System); ?>'" />
           
        </div>
	
        <table class="table table-hover" border=1 style="text-align:center" id="FormTable" >
        	<tr><th width="35">选择</th>
			<th width="10%">订单号</th><th width="120">产品名字*盒数--总价格</th><th width="30">客户名</th><th width="100">联系电话</th><th width="100">联系地址</th><th width="20">付款方式</th><th width="100">用户留言</th><th width="20">下单时间</th><th width="60">订单状态</th><th>客户端</th><th width="100">快递公司--单号</th><th width="100">操作</th><th>客服</th></tr>
          

				<?php if(is_array($test)): foreach($test as $ordernum=>$v): if(is_array($v)): foreach($v as $key=>$vo): ?><tr>	
						<td><input type="checkbox" name="buyinfoid" value="<?php echo ($vo["orderid"]); ?>" /></td>
						<td><?php echo ($vo["ordernum"]); ?></td><td>
					
								
								<?php echo ($vo["productname"]); ?>-<font color="Red"><?php echo ($vo["num"]); ?>件</font>-<?php echo ($vo[price]*$vo[num]); ?><br/>
								<span style="text-align:right;color:orange" >总价格：<input type="text" class="<?php echo ($vo["ordernum"]); ?>"  value="<?php echo ($vo["total"]); ?>" readonly /></span>
						
						</td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["phone"]); ?></td><td><?php echo ($vo["address"]); ?></td><td><?php echo ($vo["payment"]); ?></td><td>
						
							<?php if(strlen($vo['word']) > 30 ): echo (substr($vo["word"],0,30)); ?><a href="/admin99/Order/Modify/ordernum/<?php echo ($vo["buyinfoid"]); ?>/System/<?php echo ($System); ?>" ><font color="red">...查看更多</font></a>
							<?php else: ?> 
									<?php echo ($vo["word"]); endif; ?>
					
						
				</td><td><?php echo (date("Y-m-d H:i:s",$vo["ordertime"])); ?></td>
				<td >
					
					    <?php switch($vo["status"]): case "0": ?><span id="<?php echo ($vo["ordernum"]); ?>" ><font color="red">未确认</font></span><?php break;?>
								<?php case "1": ?><span id="<?php echo ($vo["ordernum"]); ?>" ><font color="blue">已确认</font></span><?php break;?>
								<?php case "2": ?><span id="<?php echo ($vo["ordernum"]); ?>" ><font color="green">已发货</font></span><?php break;?>
								<?php default: endswitch;?>
					
				</td>
				<td width=50><?php echo ($vo["client"]); ?></td>
				<td><?php echo ($vo["expressname"]); ?>--<?php echo ($vo["expressnum"]); ?></td>		
						<td>
							<a class="button border-blue button-little" href="#" onClick="orderAction('','<?php echo ($vo["orderid"]); ?>','Confirm','/admin99/Order','<?php echo ($System); ?>')" >确认</a> <a class="button border-green button-little" href="#" onClick="showBg('<?php echo ($vo["ordernum"]); ?>','<?php echo ($vo["orderid"]); ?>')" >发货</a>
							<a class="button border-yellow button-little" href="/admin99/Order/Modify/orderid/<?php echo ($vo["orderid"]); ?>/ordernum/<?php echo ($vo["ordernum"]); ?>/System/<?php echo ($System); ?>"  onclick="" >修改</a>
							<a class="button border-red button-little" href="javascript:orderAction('','<?php echo ($vo["orderid"]); ?>','Delete','/admin99/Order','<?php echo ($System); ?>')" onClick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
							
			
						</td>
						
					<td width="50"><?php echo ($vo["operator"]); ?></td>
				
		
			</tr><?php endforeach; endif; ?>
					<?php if(is_array($total)): foreach($total as $ordernum2=>$v2): if($ordernum2 == $ordernum): ?><tr><td colspan="14"><p style="text-align:right">该订单总价格：<input id="total" value="<?php echo ($v2); ?>" type="text" class="flag" readonly /></p></td></tr><?php endif; endforeach; endif; endforeach; endif; ?>
			
        
		
		
		</table>
		
		
		
        <div class="panel-foot text-center">
			  <div class="pagination pagination-large"><?php echo ($show); ?></div>
		
        
        </div>
    </div>
    </form>
    <br />

    <p class="text-center">Power By Blues &copy; 2015</p>
</div>


</body>
</html>