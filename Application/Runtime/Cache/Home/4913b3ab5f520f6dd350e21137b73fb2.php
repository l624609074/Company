<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta http-equiv="refresh" content="0.1;url=http://www.99peiyuan.com/ejiao/"> -->
<title>315认证网站</title>
<link href="/Public/pcmaka/images/css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />
<script src="/Public/pcmaka/images/js/jquery.min.js"></script>
<script src="/Public/pcmaka/images/js/lrtk.js"></script>
<script src="/Public/pcmaka/images/js/jscarousel.js" type="text/javascript"></script>
<script src="/Public/pcmaka/images/js/Area.js" type="text/javascript"></script>
<script src="/Public/pcmaka/images/js/AreaData_min.js" type="text/javascript"></script>
</head>
<body >
<DIV class="nav" >
  <DIV class="nav1 float" id="pf_nav">
    <DIV class="xl_xq_a"> <A title="首页" href="#" >首页</A>| <A title="秘鲁玛卡"  href="#blmk">秘鲁玛卡</A>| <A title="玛卡益康"  href="#mkyk">玛卡益康</A>| <A title="玛卡功效"  href="#mkykgx">玛卡功效</A>| <A title="强肾原理"  href="#qsyl">强肾原理</A><!-- | <A title="玛卡适用人群"  href="#syrq">玛卡适用人群</A>| <A title="专家答疑"  href="#zjdy">专家答疑</A>|  --><A title="权威认证"  href="#qwrz">权威认证</A>| <A title="专家说"  href="#zjs">专家说</A>| <A title="值得信赖"  href="#zdxl">值得信赖</A> | 
	   <a href="/home/Index/Test/Flag/ContactUs">联系我们</a>|
    <a href="/home/Index/Test/Flag/AboutUs">关于我们</a>|
     <a href="/home/Index/Test/Flag/Company">公司简介</a>
	
	
	
	
	
	<!-- <A title="在线订购"  href="#wyhp">在线订购</A> --> </DIV>
  </DIV>
</DIV>
<SCRIPT type="text/javascript">
window.onscroll=function(){
	if ($(document).scrollTop() > 47)
	{
		//$("#pf_nav").show();
		$("#pf_nav").addClass('float');
	}else{
		//$("#pf_nav").hide();
		$("#pf_nav").removeClass('float');
	}
}
</SCRIPT>
<script type="text/javascript">
$(document).ready(function() {
	$('#jsCarousel').jsCarousel({ onthumbnailclick: function(src) { 
	// 可在这里加入点击图片之后触发的效果
	$("#overlay_pic").attr('src', src);
	$(".overlay").show();
	}, autoscroll: true });
	
	$(".overlay").click(function(){
		$(this).hide();
	});
});
</script>
<!-- <div class="banner" style="background:none;"></div> -->
<SCRIPT language=javascript>
function charLeftAll(n)
{
    if(n < 10)
        return "0" + n;
    else
        return n;
}
function show_student163_time(){
 window.setTimeout("show_student163_time()", 1000);
 BirthDay=new Date("08-11-2015");//改成你的计时日期
 today=new Date();
 timeold=(BirthDay.getTime()-today.getTime());
 sectimeold=timeold/1000
 secondsold=Math.floor(sectimeold);
 msPerDay=24*60*60*1000
 e_daysold=timeold/msPerDay
 daysold=Math.floor(e_daysold);
 e_hrsold=(e_daysold-daysold)*24;
 hrsold=Math.floor(e_hrsold);
 e_minsold=(e_hrsold-hrsold)*60;
 minsold=Math.floor((e_hrsold-hrsold)*60);
 seconds=Math.floor((e_minsold-minsold)*60);
 $('#span_dt_dt').html("<em>"+charLeftAll(daysold)+"</em><em>"+charLeftAll(hrsold)+"</em><em>"+charLeftAll(minsold)+"</em><em>"+charLeftAll(seconds)+"</em>");
 
}
show_student163_time();
</SCRIPT>
<!-- <div class="activity"> -->
 <!--  <div class="titlebar">
   <h1>玛卡益康，过年回家，爽到底！平均3.65元/粒！限时抢购！</h1> 
  </div> -->
<!--   <div class="content">
    <div class="countdown">
      <div class="time"> <span id="span_dt_dt"></span> </div>
    </div>
    <div class="yd"> <img title="药店有售" src="/Public/pcmaka/images/activity_01.jpg" /> <img title="天猫药店同款" src="/Public/pcmaka/images/activity_02.jpg" /> </div>
  </div> -->
  
<!-- </div> -->
<div class="contain">
		<center>	<h1><?php echo ($title); ?></h1>
				<pre><?php echo ($content); ?></pre>
		</center>
</div>
<div class="footer">		  <a href="/home/Index/Test/Flag/ContactUs">联系我们</a>|
    <a href="/home/Index/Test/Flag/AboutUs">关于我们</a>|
     <a href="/home/Index/Test/Flag/Company">公司简介</a><br/>
	 Copyright &copy; 深圳市石岩镇水田第三工业区民营路4号201 &nbsp;2011-2015 版权所有 翻版必究 &nbsp;&nbsp;&nbsp; <?php echo ($ICP); ?>  电话：0755-29684314 29683115

	


</div>
<?php echo ($MonitorCode); ?>
<a href="#0" class="cd-top">Top</a>
<div class="buttom"></div>
<!-- WPA Button Begin -->
<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAxNjc4Nl8yNTU2ODhfNDAwODg1NjgzNl8"></script>
<!-- WPA Button End -->
<script language=javascript>
var LiveAutoInvite0='您好，来自%IP%的朋友';
var LiveAutoInvite1='来自首页的对话';
var LiveAutoInvite2=' 网站商务通 主要功能：<br>1、主动邀请<br>2、即时沟通<br>3、查看即时访问动态<br>4、访问轨迹跟踪<br>5、内部对话<br>6、不安装任何插件也实现双向文件传输<br><br><b>如果您有任何问题请接受此邀请以开始即时沟通</b>';
</script>
<!-- <script language="javascript" src="http://ala.zoossoft.com/JS/LsJS.aspx?siteid=ALA96738846&float=1&lng=cn"></script> -->
</body>
</html>