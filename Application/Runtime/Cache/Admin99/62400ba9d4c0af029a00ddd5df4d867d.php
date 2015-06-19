<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-后台订单修改管理</title>
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/Public/Admin/css/float.css">
   
    <link rel="stylesheet" href="/Public/Admin/css/pagination.css">
    <script src="/Public/Js/jq.js"></script>
    <script src="/Public/Admin/js/pintuer.js"></script>
    <script src="/Public/Admin/js/respond.js"></script>
    <script src="/Public/Admin/js/admin.js"></script>

    <script>
			$(function(){
					$("#num").on("blur",function(){
					
							var num=$("#num").val();
							var productid=$("#productid").val();
							var price=$("#price"+productid+"").val();
							var total=price*num;
						
							$("#total").val(total);
							
					});
			
			//如果修改了 非 用户信息的状态
			
				$(".flag").on("blur",function(){
						$("#bool").val(1);
				
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
        <div class="admin-bread" >
            <span>您好，<font style="color:red" ><?php echo (session('useradmin')); ?> </font>，欢迎您。</span>
            <ul class="bread">
                <li><a href="/admin99/User/index/System/<?php echo ($System); ?>" class="icon-home"> 开始</a></li>
                
                <li>订单信息修改</li>
            </ul>
			    
			
        </div>
    </div>
</div>

<div class="admin">
	
    <div class="panel admin-panel">
	<form  name="form1" id="form1" action="/admin99/Order/DoModify/System/<?php echo ($System); ?>" method="POST">
	
				  <table class="table table-hover" border=1 style="text-align:center">
        	
				
            
            	<input type="hidden" value="<?php echo (session('useradmin')); ?>" name="operator" />
            
         
				
			
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr><td width="50%" >订单号</td><td><?php echo ($vo["ordernum"]); ?></td></tr>
			
			<tr><td width="50%">产品名字*盒数--总价格</td>
						<?php if(is_array($productData)): foreach($productData as $key=>$v): ?><input type="hidden" value="<?php echo ($v["price"]); ?>" name="price<?php echo ($v["id"]); ?>" id="price<?php echo ($v["id"]); ?>" /><?php endforeach; endif; ?>
			<td>
			<select name="productid"id="productid">
			
	
										<?php if(is_array($productData)): foreach($productData as $key=>$v): if($vo['productid'] == $v['id']): ?><option  selected value="<?php echo ($v["id"]); ?>">已选中--<?php echo ($v["productname"]); ?>/￥<?php echo ($v["price"]); ?></option>
											
											<?php else: ?>
											<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["productname"]); ?>/￥<?php echo ($v["price"]); ?></option><?php endif; endforeach; endif; ?>
							</select>
						</td></tr>
						<input type="hidden" value="<?php echo ($vo["num"]); ?>" name="oldnum"  />
					
						<input type="hidden" value="<?php echo ($vo["name"]); ?>" name="oldname" />
						<input type="hidden" value="<?php echo ($vo["address"]); ?>" name="oldaddress" />
						<input type="hidden" value="<?php echo ($vo["phone"]); ?>" name="oldphone" />
						   	<input type="hidden" value="<?php echo ($vo["total"]); ?>" name="total" id="total" />
						   	<input type="hidden" value="0" name="bool" id="bool"  />
						  
			<tr><td width="50%">购买数量</td><td><input type="text" value="<?php echo ($vo["num"]); ?>" name="num" id="num" class="flag" /></td></tr>
			<tr><td width="50%">客户名</td><td><input type="text" value="<?php echo ($vo["name"]); ?>" name="name" class="flag" /></td></tr>
			<tr><td width="50%">联系电话</td><td><input type="text" value="<?php echo ($vo["phone"]); ?>" name="phone" class="flag" /></td></tr>
			<tr><td width="50%">联系地址</td><td><input type="text" value="<?php echo ($vo["address"]); ?>" name="address" class="flag" /></td></tr>
			<tr><td width="50%">用户留言</td><td><textarea name="word" class="flag" ><?php echo ($vo["word"]); ?></textarea></td></tr>
			<tr><td width="50%">付款方式</td><td><?php echo ($vo["payment"]); ?></td></tr>
			<tr><td width="50%">下单时间</td><td><?php echo (date("Y-m-d h:i:s",$vo["ordertime"])); ?></td></tr>
			<tr><td width="50%">订单状态</td><td>
			<select name="status" class="flag">
							
						
					
					    <?php switch($vo["status"]): case "0": ?><option value="0">--已选中--未确认</option><?php break;?>
								<?php case "1": ?><option value="1">--已选中--已确认</option><?php break;?>
								<?php case "2": ?><option value="2">--已选中--已发货</option><?php break;?>
								<?php default: endswitch;?>
							<option value="0">
									--未确认--
							
							</option>
							<option value="1">
									--已确认--
							
							</option>
							<option value="2">
									--已发货--
							
							</option>
					
					
						</select></td></tr>
			<tr><td width="50%">快递公司</td><td><input  name="expressname" value="<?php echo ($vo["expressname"]); ?>" class="flag"/></td></tr>
			<tr><td width="50%">快递单号</td><td><input  name="expressnum" value="<?php echo ($vo["expressnum"]); ?>" class="flag"/></td></tr>
			<tr><td width="50%">操作</td><td><input type="submit"  value="确认修改" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="javascript:history.go(-1);" value="返回" /> </td></tr>
				
	
						<input type="hidden" value="<?php echo ($vo["ordernum"]); ?>" name="ordernum"/>
						<input type="hidden" value="<?php echo ($vo["orderid"]); ?>" name="orderid"/>
						<input type="hidden" value="<?php echo ($System); ?>" name="System"/>
				
					<input type="hidden" value="" name="price" id="price" /><?php endforeach; endif; ?>
		

		
		</table>
		    </form>
    </div>

    <br />

    <p class="text-center">Power By Blues &copy; 2015</p>
</div>


</body>
</html>