<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
		
    public function Index(){
		$Url=__SELF__  ;             //搜索引擎代码
			
			//先获取最后一个  / 的位置 ，然后用 现在的长度减去 该位置，剩下的就是最后一个 / 后面的内容了，截取该部分即可
			
			 $LastStr=strrchr($Url,"/");
			 $UrlLength=strlen($Url);
			$LastStrLength=strlen($LastStr)-2;  //去掉  /?  占用两个字符
			$PosStrLength=$UrlLength-$LastStrLength;
			
			 $SEOCode=substr($Url,$PosStrLength,$UrlLength);
			
			//$SEOCode=substr($Url,"");
	//$appUrl=__APP__."/Appmaka/Index";
		//判断是否手机端
		$isMoblie=D("Phone");
		//var_dump($isMoblie);
		if($isMoblie->judge()){
			//手机端
			$this->redirect("/Appmaka/Index/Index/SEOCode/{$SEOCode}");
		}  
				/*    3.底部信息的给予   */
		$Host=$_SERVER['HTTP_HOST'];
		$Info=BottomInfo($Host);
		list($Company,$ICP,$MonitorCode)=$Info;

			$this->assign("Company",$Company);
		$this->assign("ICP",$ICP);
		$this->assign("MonitorCode",$MonitorCode);
	
		

				//调出产品的数据
		$product=M("products");
		$data=$product->select();
		

		$this->assign("data",$data);
        $this->display();
    }
	
	function Test(){
		//test
		 $flag=I("get.Flag");
		switch($flag){
			case "ContactUs":
					$title="联系我们";
					$str="销售咨询邓先生
手机：15118134560
ＱＱ：429488888
邮箱：
客户服务方小姐
电话：0755-26530807
传真：0755-26419477
ＱＱ：429388888
邮箱：
人力资源部李小姐
邮箱：
服务监督邮箱
公司地址深圳市福田区华强北华强广场B座81
";
			
			;
			break;
			case "AboutUs":
					$title="关于我们";
					$str="深圳市澳凌峰科技有限公司。为客户提供各种LED、保健品玛卡、广告的资源。
深圳市澳凌峰科技有限公司，是于2009年2月由深圳多家领先的广告公司集中了各自的优势资源整合而成。致力于为企业提供建站、推广、培训、咨询一体化的企业电子商务顾问服务。
搜道广告团队主要成员均有5-10年以上的互联网广告行业经验，依托自身的全系列优势资源、强大的技术开发力量和先进的广告营销理念，将一如既往地为新老客户提供最好的服务。
搜道广告，精于搜索之道，秉承商业之道，引领您的营销之道。
";
			;
			break;
			case "Company":
					$title="公司简介";
					$str="深圳市澳凌峰科技有限公司。为客户提供各种L、保健品玛卡、LED广告的资源。
深圳市澳凌峰科技有限公司，是于2009年2月由深圳多家领先的广告公司集中了各自的优势资源整合而成。致力于为企业提供建站、推广、培训、咨询一体化的企业电子商务顾问服务。
搜道广告团队主要成员均有5-10年以上的互联网、广告行业经验，依托自身的全系列优势资源、强大的技术开发力量和先进的广告营销理念，将一如既往地为新老客户提供最好的服务。
搜道广告，精于搜索之道，秉承商业之道，引领您的营销之道。
";
			;
			break;
			
			
		}
		
		
		$this->assign("title",$title);
		$this->assign("content",$str);
		
		$this->display();
		
		
		
	}
	
	
	
	
}
