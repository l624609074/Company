<?php
	namespace Appejiao\Controller;
	use Think\Controller;
	Class SubOrderController extends Controller{
			//该类是前台提交订单类
			function submit(){
				
				//获取 自定义的 验证规则
				$verify=D("Verify"); 

				if(!$verify->create()){
				$this->error($verify->getError());	
			
				} 
				$rules=array(
						  
						  array('status','0'), 
						
				);
				$order=M("order");
				if($order->create()){        //采用自动完成
					$randNum=rand(0,9999999999999);
					$time=time();
					$str=$randNum.$time;
					$orderid=substr(md5($str),1,12);
					$order->ordertime=NOW_TIME;
					$order->orderid=$orderid;
					$id=$order->auto($rules)->add();
					if($id){
						$this->success("您的订单已经提交\n您的订单号是【{$orderid}】\n我们将在1个工作日和您联系！",'',4);
						
						
					}	
					
				}else{
					
					$this->error("提交订单失败，请联系管理员！");
					
				}
				
				
				
			}
		
		
		
	}
	
	
	