<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>培元阿胶含片官网</title>
<meta name="Keywords" content="培元阿胶含片官网"/>
<meta name="Description" content="培元阿胶含片官网" />
<meta name="author" content="培元阿胶含片官网" />
<meta name="Copyright" content="培元阿胶含片官网" />
<link rel="stylesheet" href="/Public/PcEjhp/css/news/Common.css" type="text/css">
</head>
<body>
<!-- 头部 -->
<div class="head"></div>
<div class="nav">
  <div class="m-1200">
    <h1 class="logo"><a href="" title="培元阿胶含片官网"><img src="/Public/PcEjhp/images/news/logo.jpg"></a></h1>
    <ul>
      <li><a href="/ejhp/Index/Index#"><span class="ch">首页</span><span class="en">home page</span></a></li>
      <li><a href="/ejhp/Index/Index#brand"><span class="ch">培元品牌</span><span class="en">Periyuan Brand</span></a></li>
      <li><a href="/ejhp/Index/Index#harm"><span class="ch">贫血危害</span><span class="en">Anemia hazard</span></a></li>
      <li><a href="/ejhp/Index/Index#news"><span class="ch">最新优惠</span><span class="en">Latest offer</span></a></li>
      <li><a href="/ejhp/Index/Index#details"><span class="ch">产品详情</span><span class="en">Product details</span></a></li>
      <li><a href="/ejhp/Index/Index#test"><span class="ch">贫血测试</span><span class="en">Anemia test</span></a></li>
      <li><a href="/ejhp/Index/Index#news"><span class="ch">补血问答</span><span class="en">Ask the blood</span></a></li>
      <li><a href="/ejhp/Index/Index#dg"><span class="ch">立即订购</span><span class="en">Immediate order</span></a></li>
    </ul>
  </div>
</div>
<!-- 头部结束 -->
<div class="m-1000">
  <div class="list_title">
    <h2>补血资讯</h2>
    <a href="javascript:void(0)"  class="fr">在线咨询</a> </div>
	

	
	
  <div class="list_centent">
<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="place"><span>当前位置：</span><a href="/ejhp/Index/Index">首页</a>&nbsp;>&nbsp;<a href="/ejhp/News/NewsList">补血资讯</a>&nbsp;>&nbsp;<?php echo ($vo["title"]); ?></div>

			<h1 class="title"><?php echo ($vo["title"]); ?></h1>
			<div class="info"> 
				<span>作者：<?php echo ($vo["author"]); ?></span> 
				<span>发布时间：<?php echo (date("Y-d-m",$vo["pushtime"])); ?></span>
				<a href="/ejhp/Index/Index"><返回首页</a>
		   </div>
			<div class="content">
				<?php echo html_entity_decode($vo["content"]); ?>
			</div><?php endforeach; endif; ?>
	<div class="context">
        <ul>
          <li>上一篇：
				<a href="/ejhp/News/Detail/id/<?php echo ($nextId); ?>"><?php echo ($nextTitle); ?></a> 
		  </li>
          <li>下一篇：
				<a href="/ejhp/News/Detail/id/<?php echo ($prexId); ?>"><?php echo ($prexTitle); ?></a>
			</li>
        </ul>
      </div>
	  <div class="both"></div>
  </div>


</div>
<div class="both"></div>
<div class="footer">
  <div class="m-1000">
    <div class="footer_logo fl"> <a href="/ejhp/Index/Index#"><img src="/Public/PcEjhp/images/76.jpg" alt="99培元"></a>
      <p>培元出品  品质保证</p>
      <p>补血，认准培元牌阿胶含片！</p>
    </div>
    <div class="footer_info fl">
      <p>郑重声明：</p>
      <p>未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任</p>
      <p>ICP备案号：粤ICP备14090790号</p>
      <p>全国免费订购热线： </p>
      <p class="tel">400-885-6836</p>
    </div>
  </div>
</div>
</body>
</html>