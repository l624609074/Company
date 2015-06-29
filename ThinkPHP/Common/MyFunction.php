<?php

//在线交易订单支付处理函数
 //函数功能：根据支付接口传回的数据判断该订单是否已经支付成功；
 //返回值：如果订单已经成功支付，返回true，否则返回false；
 function checkorderstatus($ordid){
	 $system=session("system");    //支付的产品类型，选择对应的数据库
	C('DB_NAME',$system);
    $Ord=M('orderlist');
	$where["ordid"]=$ordid;
    $ordstatusRes=$Ord->where($where)->find();
    if($ordstatusRes["ordstatus"]==1){
        return true;
    }else{
        return false;    
    }
 }
 
 
 //处理订单函数
 //更新订单状态，写入订单支付后返回的数据
 function orderhandle($parameter){
	 $system=session("system");    //支付的产品类型，选择对应的数据库
	 C('DB_NAME',$system);
    //更新支付宝详细表
	$ordid=$parameter['out_trade_no'];
    $data['payment_trade_no']=$parameter['trade_no'];
    $data['payment_trade_status']=$parameter['trade_status'];
    $data['payment_notify_id']=$parameter['notify_id'];
    $data['payment_notify_time']=$parameter['notify_time'];
    $data['payment_buyer_email']=$parameter['buyer_email'];
    $data['ordstatus']=1;
    $Ord=M('orderlist');
	$OrderlistWhere["ordid"]=$ordid;
    $bool=$Ord->where($OrderlistWhere)->save($data);
	
	//更新订单表
	if(!empty($bool)){
		
			$order=M("order");
			$sql="update tp_order set status=1 where ordernum='{$ordid}'";
			$order->execute($sql);
			
	}
	
 } 
function alipayFaild($ordernum){
	$system=session("system");    //支付的产品类型，选择对应的数据库
	C('DB_NAME',$system);
	//支付宝支付失败，删除数据库对应订单号
	$contact=M("contact");
	$where["ordernum"]=$ordernum;
	$contact->where($where)->delete();
	$order=M("order");
	$order->where($where)->delete();
	$orderList=M("orderlist");
	$orderList->where($where)->delete();
	
}