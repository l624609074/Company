<?php
	namespace Ej99\Controller;
	use Think\Controller;
	Class SubOrderController extends Controller{
			//该类是前台提交订单类
			function submit(){
			
				//获取 自定义的 验证规则
				$verify=D("Verify"); 

				if(!$verify->create()){
					$this->error($verify->getError());	
			
				}   
				
				//验证通过了。现在插入数据
				
				$Products=I("post.product");
			        //只获取出  产品的订购信息
			/* 	$Products=array(
					"71"=>array(
						"num"=>1,
						"num_two"=>10
					),
					"72"=>array(
						"num"=>3,
						"num_two"=>11
					),
					"73"=>array(
						"num"=>2,
						"num_two"=>12
					),
				
				);
				

				
				 */
				$ProductsStr="";         //组成的id范围，用作待会提取数据
				//$key 为产品的id ，num_two 为该产品 的数量
				foreach($Products as $key => $v){
				
					$Num=$v["num_two"];         //订购的数量
					if($Num==0){
						
						continue;
						
					}else{
						
					
						$ProductsStr.=$key.",";
					}
					
					
					
				}
			
				
				$ProductsStr=rtrim($ProductsStr,",");
		
				//取出 产品的属性，名字，价格
				$product=M("products");
				
				$BuyProducts=$product->where("id in ({$ProductsStr})")->select();
					
				foreach($BuyProducts as $v){
					// 判断与 购买的数据 对等的 产品id  ，获取对应的信息
					$id=$v["id"];
					$Num=$Products[$id]["num_two"];       //订购的数量
					$Total=$Num*$v["price"];            //  总价格
					//拼接显示   产品名字*盒数--总价格
					
					$Str.="【".$v["producttype"]."--".$v["productname"]."<font color='red'>*{$Num}件</font>"."--".$Total."】<br/>";
					
				}
			
				
				$rules=array(
						  
						  array('status','0'), 
				
						
						
				);
				$order=M("order");
				if($order->auto($rules)->create()){        //采用自动完成
					$randNum=rand(0,9999999999999);
					$time=time();
					$str=$randNum.$time;
					$orderid=substr(md5($str),1,12);
					$order->ordertime=NOW_TIME;
					$order->orderid=$orderid;
					$order->productid=$ProductsStr;
					$order->buyinfo=$Str;			
					
					$id=$order->add();
					if($id){
						$this->success("您的订单已经提交\n您的订单号是【{$orderid}】\n我们将在1个工作日和您联系！",'',4);
						
						
					}	
					
				}else{
					
					$this->error("提交订单失败，请联系管理员！");
					
				}
				
				
				
			}
			function SubAdvisory(){
				//提交美容咨询
							$Advisory=D("Advisory");
							$verify=D("Verify"); 
							if(!$verify->create()){
									
									$this->error($verify->getError());	
							
							}
							
							$rules=array(
									  
									  array('lefttime',NOW_TIME), 
									
							);
							
							
							if($Advisory->auto($rules)->create()){
								if($Advisory->add()){
										$this->success("您提交的美容咨询内容已经成功提交，我们将在1个工作日和您联系！",'',4);
						
									
									}else{
										$this->error("提交咨询的内容失败，请联系管理员！");
								
									}
								
							}else{
								$this->error("提交咨询的内容失败，请联系管理员！");
								
							}
							
				} 
				
			
		
		
		
	}
	
	
	