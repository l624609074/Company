<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-产品信息管理</title>
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/Public/Admin/css/float.css">
   
    <link rel="stylesheet" href="/Public/Admin/css/pagination.css">
    <script src="/Public/Js/jq.js"></script>
    <script src="/Public/Admin/js/pintuer.js"></script>
    <script src="/Public/Admin/js/respond.js"></script>
    <script src="/Public/Admin/js/admin.js"></script>

    
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
                
                <li>产品信息列表</li>
            </ul>
			    
			
        </div>
    </div>
</div>

<div class="admin">
	
    <div class="panel admin-panel">
 <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
			 <input type="button" class="button button-small border-blue" value="添加新的" onclick="javascript:window.location.href='/admin99/Product/Add/System/<?php echo ($System); ?>'" />
      
            <input type="button" class="button button-small border-yellow" value="批量删除" />
           
        </div>
	<center>
	   	<div class="panel-head"><strong>产品信息列表</strong></div>
       
				  <table class="table table-hover" border=1 style="text-align:center">
        	
				
            
            	<input type="hidden" value="<?php echo (session('useradmin')); ?>" name="operator" />
				<tr><td width="100">选择</td><td >产品名字</td><td>套餐名字</td><td>产品价格</td><td>赠送优惠</td><td>产品图片</td><td>操作</td></tr>
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
			<td><input type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>" /></td><td><?php echo ($vo["productname"]); ?></td><td><?php echo ($vo["producttype"]); ?></td><td>¥ <?php echo ($vo["price"]); ?></td><td><?php echo ($vo["preferential"]); ?></td><td><?php echo ($vo["picsrc"]); ?></td>	
			<td>

							<a class="button border-yellow button-little" href="javascript:window.location.href='/admin99/Product/Modify/id/<?php echo ($vo["id"]); ?>/System/<?php echo ($System); ?>'"  onclick="" >修改</a>
							<a class="button border-red button-little" href="javascript:window.location.href='/admin99/Product/Delete/id/<?php echo ($vo["id"]); ?>/System/<?php echo ($System); ?>'" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
							
			
						</td>
				
							
							
							
								
				
	
						</tr><?php endforeach; endif; ?>
			
			
			
			
			
        
		
		
		</table>
		
	</center>

    </div>

    <br />
 <div class="panel-foot text-center">
			  <div class="pagination pagination-large"><?php echo ($show); ?></div>
		
        
        </div>
    <p class="text-center">Power By Blues &copy; 2015</p>
</div>


</body>
</html>