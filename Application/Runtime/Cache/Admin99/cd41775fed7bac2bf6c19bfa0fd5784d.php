<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-美容测试管理</title>
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
<script>
	function AdvisoryAction(Action,Url){
		if(Action=="Delete"){
			var str="删除";
		}else{
		
			var str="更新回答状态";
		}
	$.ajax({
				url:Url,
				success:function(data){
		
					if(data=="ok"){
						alert(str+"成功！");
							window.location.reload(); 
					}else{
						alert(str+"失败！");
						
					}
					window.location.reload();
				}
		
		});
		
		
		
	}

</script>
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
                <li><a href="/admin99/User/System/<?php echo ($System); ?>" class="icon-home"> 开始</a></li>
                
                <li>美容测试信息列表</li>
            </ul>
			    
			
        </div>
    </div>
</div>

<div class="admin">
	
    <div class="panel admin-panel">
 <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
			<!--  <input type="button" class="button button-small border-blue" value="添加新的" onclick="javascript:window.location.href='/admin99/Product/Add'" /> -->
      
            <input type="button" class="button button-small border-yellow" value="批量删除" />
           
        </div>
	<center>
	   	<div class="panel-head"><strong>美容测试信息列表</strong></div>
       
				  <table class="table table-hover" border=1 style="text-align:center">
        	
				
            
            	<input type="hidden" value="<?php echo (session('useradmin')); ?>" name="operator" />
				<tr><td width="100">选择</td><td >留言用户</td><td>年龄</td><td>联系方式</td><td>咨询问题</td><td>留言时间</td><td>回答状态</td><td>操作</td></tr>
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
			<td><input type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>" /></td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["age"]); ?></td><td> <?php echo ($vo["contact"]); ?></td><td width="45%"><?php echo ($vo["word"]); ?></td><td><?php echo (date("Y-m-d H:i:s",$vo["lefttime"])); ?></td>
			<td>
					<?php if($vo['recall'] == 1): ?><font color="green" >已回答</font>
						<?php else: ?>
						<font color="red" >未回答</font><?php endif; ?>
					
			
			
			</td>		<td>

					<!-- 		<a class="button border-yellow button-little" href="javascript:window.location.href='/admin99/Product/Modify/id/<?php echo ($vo["id"]); ?>'"  onclick="" >修改</a> -->
							<a class="button border-yellow button-little" href="javascript:AdvisoryAction('Recall','/admin99/Advisory/Recall/id/<?php echo ($vo["id"]); ?>/RecallStatus/<?php echo ($vo["recall"]); ?>/System/<?php echo ($System); ?>')"  >改变回答状态</a> 
							<a class="button border-red button-little" href="javascript:AdvisoryAction('Delete','/admin99/Advisory/Delete/id/<?php echo ($vo["id"]); ?>/System/<?php echo ($System); ?>')" onClick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
							
			
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