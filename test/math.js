function getSubTotal(tr){
    var tds=tr.cells;
    var price=pasreInt(trd[3].innerHTML);
    var count=pasreInt(tr.getElementsByTagName("input")[0].value);
    var SubTotal=parseInt(price*count);
    tds[5].innerHTML=SubTotal;
}

function getTotal(tr){
    for(i=0;i<tr.length;i++){
    var totalPrice+=tr[i][5];
}
    getElementById("total").innerHTML=totalPrice;
    
}

function delete(tr){
    this.parentNode.removeChild(this);
    tr.innerHTML="";

}