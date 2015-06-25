<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>培元阿胶含片官网</title>
<link href="/Public/Appejiao/css/style.css" rel="stylesheet" type="text/css">
<script src="/Public/js/jq.js"></script>
<style>
	.maka10_b div{display:block; width:30%; margin-left:2%; height:100%; float:left; }
.maka10_b  div a{display:block; width:100%;  height:100%; }

.float{width:100px; height:30px; position:fixed; bottom:150px; left:0px;}

</style>
</head>

<body>
<div class="bg">
  <div class="ej1">
    <img src="/Public/Appejiao/images/ej1.jpg" style="width:100%;" />
    <div class="ej1_t">
       <a href="#ej2"></a>
       <a href="#ej12"></a>
       <a href="#ej3"></a>
       <a href="#ej4"></a>
       <a href="#ej5"></a>
       <a href="#ej7"></a>
       <a href="#ej6"></a>
       <a href="#ej10"></a>
    </div>
  </div>
  <div id="ej2"><img src="/Public/Appejiao/images/ej2.jpg" style="width:100%;" /></div>
  <div id="ej12"><img src="/Public/Appejiao/images/ej12.jpg" style="width:100%;" /></div>
  <div id="ej3"><img src="/Public/Appejiao/images/ej3.jpg" style="width:100%;" /></div>
  <div id="ej4"><img src="/Public/Appejiao/images/ej4.jpg" style="width:100%;" /></div>
  <div id="ej5"><img src="/Public/Appejiao/images/ej5.jpg" style="width:100%;" /></div>
  <div id="ej6">
    <img src="/Public/Appejiao/images/ej6.jpg" style="width:100%;" />
    <div class="ej6_t">
      <a href="#ej9"></a>
      <a href="#ej9" style="margin-top:50%;"></a>
      <a href="#ej9" style="margin-top:55%;"></a>
      <a href="#ej9" style="margin-top:55%;"></a>
    </div>
  </div>
  <div id="ej7"><img src="/Public/Appejiao/images/ej7.jpg" style="width:100%;" /></div>
  <div id="ej8"><img src="/Public/Appejiao/images/ej8.jpg" style="width:100%;" /></div>
  <div id="ej9">  
    <img src="/Public/Appejiao/images/ej9.jpg" style="width:100%;" />
    <div class="ej9_t">
       <form method="post" action="/appejiao/SubOrder/submit"  style="height:80%; width:60%; padding-left:35%; padding-top:20%;">
            <div style="width:68%; height:6%; overflow:hidden; padding-top:10%; padding-left:0.5%;">
			<input type="hidden" name="client" value="Phone" />
            <select name="productid" id="productid" style="width:100%; height:100%; font-size:180%; color:#a30c1f; overflow:hidden;" autofocus autocomplete="off" x-webkit-speech x-webkit-grammar="builtin:translate">
                  <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" style="color:#000000;"><?php echo ($vo["productname"]); ?>  ￥<?php echo ($vo["price"]); ?></option><?php endforeach; endif; ?>
            </select>
            </div>
            <div style="width:73%;height:6%; padding-top:3.5%; padding-left:0.5%; overflow:hidden;">
            <input type="summary" name="name" value="" style="width:84%; padding:0px 2%;  border:none; background:none; height:100%; font-size:300%;"  id="name" class="summary-input"  autofocus autocomplete="off" x-webkit-speech x-webkit-grammar="builtin:translate" />
            </div>
            <div style="width:73%; padding-left:0.5%; height:6%; overflow:hidden; padding-top:4%;">
            <input type="text" name="contact" id="contact" value=""   style="width:84%; background:none;  padding:0px 2%; border:none; height:100%; font-size:300%;" autofocus autocomplete="off" x-webkit-speech x-webkit-grammar="builtin:translate"/>     
             </div>
             <div style="clear:both;"></div>
             <div style="width:73%; padding-left:0.5%; height:6%; padding-top:4.5%; overflow:hidden;">
            <input type="text" name="address" id="address" value=""  style="width:84%; background:none;  padding:0px 2%; border:none; height:100%; font-size:300%;" autofocus autocomplete="off" x-webkit-speech x-webkit-grammar="builtin:translate" />
            <input type="text" name="ddhh" id="ddhh" value=""  style=" display:none;" />
            </div>
            <div style="clear:both;"></div>

            <div style="width:70%; padding-left:5%; height:5%; overflow:hidden; padding-top:7%;">
                <input type="radio" name="payment" id="payment" value="货到付款" checked style=" border:none; background:#000;"/>
               
            </div>
            <div style="clear:both;"></div>
            <div style="width:94.5%; margin-left:1%; height:36%;padding-top:3%;">
              <textarea name="word" id="word" style="background:none; width:64%; padding:2%; height:92%; border:0px; font-size:250%; line-height:120%;"></textarea>
            </div>
            <div style="clear:both;"></div>
            <div style="width:100%; margin:0 auto; height:9%; padding-top:5%;">
            <input type="submit" onclick="return mycheck()" name="Submit" value="" style=" width:25%; margin-left:5%; height:70%; border:none; background:none;" />
            <input type="reset" name="Submit2" value="" style=" width:25%; margin-left:1%; height:60%; border:none; background:none;" />
            </div>
       </form>
     </div>
  </div>
  <div id="ej10"><img src="/Public/Appejiao/images/ej10.jpg" style="width:100%;" /></div>
  <div id="bottomContent">
    <img src="/Public/Appejiao/images/ej11.png" style="width:100%;" />
     <div class="maka10_b" > 
		<div  id="LR_User_Icon0" style="width:30%"></div>
		<div><a href="#ej9"></a> </div>
		<div><a href="tel:400-666-5145"></a> </div>
	
		
	</div>
  </div>
</div>
     <script>   
		 
   function mycheck()
      {
		  
	var isMobile = /^(?:13\d|15\d|18\d)\d{5}(\d{3}|\*{3})$/; //手机号码验证规则
	var isPhone = /^((0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;   //座机验证规则
	var tel = $("#contact").val();
	var name=$("#name").val();
	var address=$("#address").val();
	if(name ==""){
		alert("您的姓名不能为空！");
		$("#name").focus();
		return false;
	}
	if(tel ==""){
		alert("联系电话不能为空！");
		$("#contact").focus();
		return false;
	}
	if(!isMobile.test(tel) && !isPhone.test(tel)){ //如果用户输入的值不同时满足手机号和座机号的正则
		alert("请正确填写电话号码，例如:13415764179或020-61396139");  //就弹出提示信息
		$("#contact").focus();
		return false; //返回一个错误，不向下执行
	}
		if(address==""){
				alert("地址不能为空！");
				$("#address").focus();
				return false;
		}
        
      }
    </script>
	<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></HTML>之后,这样在服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
	<script language="javascript" src="http://ala.zoossoft.com/JS/LsJS.aspx?siteid=ALA96738846&float=1&lng=big5"></script>
<script language="javascript">
<!--
if(typeof(LiveReceptionCode_isonline)!='undefined')
{
	if(LiveReceptionCode_isonline)
		LR_GetObj('LR_User_Icon0').innerHTML='<a '+LiveReceptionCode_BuildChatWin('传递给客服人员的文本,请修改','客服人员在线,欢迎点击咨询')+'></a>';
	else
		LR_GetObj('LR_User_Icon0').innerHTML='<a '+LiveReceptionCode_BuildChatWin('传递给客服人员的文本,请修改','客服人员不在线,请点击留言')+'></a>';
}
//-->
</script>
<!-- <div class="float"><script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAxNjc4Nl8yNzU2NzBfNDAwODg1NjgzNl8"></script></div> -->
<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></HTML>之后,这样在服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
<script language=javascript>
var LiveAutoInvite0='您好，来自%IP%的朋友';
var LiveAutoInvite1='来自首页的对话';
var LiveAutoInvite2=' 网站商务通 主要功能：<br>1、主动邀请<br>2、即时沟通<br>3、查看即时访问动态<br>4、访问轨迹跟踪<br>5、内部对话<br>6、不安装任何插件也实现双向文件传输<br><br><b>如果您有任何问题请接受此邀请以开始即时沟通</b>';
</script>



</body>
</html>