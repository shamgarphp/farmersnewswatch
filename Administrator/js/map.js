function ds()
{
var geocoder = new google.maps.Geocoder();
var address = document.getElementById('pac-input').value;
//alert(address);
geocoder.geocode( { 'address': address}, function(results, status) {

if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
var longitude = results[0].geometry.location.lng();
    
	document.getElementById('lt').value=latitude;
	document.getElementById('gt').value=longitude;

    } 
}); 
}

function order_sum(sa)
{
	var sts=parseInt(document.getElementById("mgmt_stu").value);
	var fcf=parseInt(document.getElementById("mgmt_fac").value);
	
	
		var mgmtp=parseInt(document.getElementById("mgmt").value);
	
	
	var student=document.getElementById("stu").value;
	var faculty=document.getElementById("stu1").value;
	var management=document.getElementById("stu2").value;
	var currency=document.getElementById("ccode").value;
	
	
	if(student!="")
	{
var redsq=(parseInt(student)*sts);
document.getElementById("ordnum1").innerHTML=student+" x "+sts;
document.getElementById("ordprice1").innerHTML=redsq;
var vb=(redsq+mgmtp);
	document.getElementById("ordprice4").innerHTML=currency+" "+vb;
	}
	if(faculty!="")
	{
var redsw=(parseInt(faculty)*fcf);
document.getElementById("ordnum2").innerHTML=faculty+" x "+fcf;
document.getElementById("ordprice2").innerHTML=redsw;
var hh=(redsq+redsw+mgmtp);
	document.getElementById("ordprice4").innerHTML=currency+" "+hh;
	}
	if(management!="")
	{
var redse=(parseInt(management)*fcf);
document.getElementById("ordnum3").innerHTML=management+" x "+fcf;
document.getElementById("ordprice3").innerHTML=redse;
var nn=(redsq+redsw+redse+mgmtp);
document.getElementById("ordprice4").innerHTML=currency+" "+nn;
	}
	
		

	
}

