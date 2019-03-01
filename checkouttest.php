$product':{
1:{'sku':'ipd','name':'super ipad','price':$549.99},
2:{'sku':'mbp','name':'mavbook pro','price':$1399.99},
3:{'sku':'atv','name':'Apple TV','price':$109.50},
4:{'sku':'vga','name':'VGA adapter','price':$30.00}
};

$checkout ={
'checkoutrules':[
{'rule_id':'1','Name':'buy 3 get price of 2','sku':'atv','price':'219','purchase_qty':3},
{'rule_id':'2','Name':'buy more than 4 get price of each 499.99','sku':'ipd','price':'499','purchase_qty':4},
{'rule_id':'3','Name':'buy mbp get vga','sku':'vga','price':'0','purchase_qty':1,'required_sku':'mbp'}
]
}



function scan($order_item){
$total_items+=1;
$product_id=$order_item('id');
$product_sku=$order_item('sku');
$ordered_item[$product_id]+=1;
$ordered_item_price=$checkout['product'][$product_id]['price'];


foreach($rules as $checkout['checkoutrules']){
if($rules['sku']==$product_sku && $rules['purchase_qty']==$ordered_item[$product_id]){
$total_ordered_amount[$product_id]=$rules['price'];//vga=0
}else{
$total_ordered_amount[$product_id]+=$ordered_item_price;//mbp=1399.99+ipd=549.99
}
}
}