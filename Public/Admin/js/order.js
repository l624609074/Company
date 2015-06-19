function orderAction(ordernum,orderid,fun,Controller,SystemModule){
	switch (fun){
			case "Confirm":
				
				var str="确认订单";
				url=Controller+"/"+fun+"/System/"+SystemModule+"/orderid/"+orderid;
			break;	
			case "sent":
				
				//还需拼接值进行传递
				var expressName=$("input[name='expressName']").val();
				var expressNum=$("input[name='expressNum']").val();
				var orderid=$("input[name='orderidHidden']").val();
				var url=Controller+"/"+fun+"/orderid/"+orderid+"/expressName/"+expressName+"/expressNum/"+expressNum+"/System/"+SystemModule;
				var str="发货";
			break;	
			case "Delete":
				
				var str="删除";
				 url=Controller+"/"+fun+"/System/"+SystemModule+"/orderid/"+orderid;
			break;
			
		
	}
	/* /web/index.php/Admin99/Order/Confirm/System/Ejiao/orderid=967b8cefa419 */

	
	//alert(url);
		 //确认
		$.ajax({
					url:url,
					
					success:function(data){
					
							if(data!=0){
							
									alert(str+"成功！");
									if(str=="确认订单"){
										$("#"+data+"").html("");
									$("#"+data+"").html("<font color='blue'>已确认</font>");
										
										
										
									}
									 if(str=="发货"){
											closeBg();
											
									}
								
							
							}else{
								
									alert("error,"+str+"失败！");
								
							} 
								var orderid=$("input[name='orderIdHidden']").val("");
		$("#add").text("");
	window.location.reload(); 
							
					}
		
		});
		
	
	}
