

function fill(thisValue) { 
$('#txt1').val(thisValue); 
setTimeout("$('#txtHint').hide();", 200); 

} 

function showAgain(){
	$('#suggestions').show();
	$('#txtHint').show();
}


