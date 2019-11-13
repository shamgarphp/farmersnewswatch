$(document).ready(function(){
    $("#minus").click(function(){
       //alert('gfg');
		 $("#minus").hide();
		 $("#plus").show();
		 
		 $("#data_user").hide(1300);
		 
		
    });
    $("#plus").click(function(){
         $("#plus").hide();
		 $("#minus").show();
		 
		 
		 $("#data_user").show(1300);
    });
	
	   $("#minus1").click(function(){
       //alert('gfg');
		 $("#minus1").hide();
		 $("#plus1").show();
		 
		 $("#data_user1").hide(1300);
		 
		
    });
    $("#plus1").click(function(){
         $("#plus1").hide();
		 $("#minus1").show();
		 
		 
		 $("#data_user1").show(1300);
    });
	
	
	
	
	  $("#minus2").click(function(){
       //alert('gfg');
		 $("#minus2").hide();
		 $("#plus2").show();
		 
		 $("#data_user2").hide(1300);
		 
		
    });
    $("#plus2").click(function(){
         $("#plus2").hide();
		 $("#minus2").show();
		 
		 
		 $("#data_user2").show(1300);
    });
	
	
	  $("#minus3").click(function(){
       //alert('gfg');
		 $("#minus3").hide();
		 $("#plus3").show();
		 
		 $("#data_user3").hide(1300);
		 
		
    });
    $("#plus3").click(function(){
         $("#plus3").hide();
		 $("#minus3").show();
		 
		 
		 $("#data_user3").show(1300);
    });


    $("#pt1").click(function(){
         $("#cash").show(1300);
		 $("#dd").hide();
		 $("#neft").hide();
		 $("#cheque").hide();
		 window.scrollTo(1800,1800);
		 
    });
	
	
    $("#pt2").click(function(){
         $("#dd").show(1300);
		 $("#cash").hide();
		 $("#neft").hide();
		 $("#cheque").hide();
		 window.scrollTo(1800,1800);
		 
    });
	
		
    $("#pt3").click(function(){
         $("#neft").show(1300);
		 $("#cash").hide();
		 $("#dd").hide();
		 $("#cheque").hide();
		 window.scrollTo(1800,1800);
		 
    });
		
    $("#pt4").click(function(){
		
         $("#cheque").show(1300);
		 $("#cash").hide();
		 $("#neft").hide();
		 $("#dd").hide();
		 window.scrollTo(1800,1800);
		 
    });
	
	
	
});


function ab1()
            {
                var numb= document.getElementById("h2").value;
                if(numb==" ")
                {
                    alert("please enter numbers");
                    document.ac4.f1.focus();
                    return false;
                }
                if(numb.length>10)
                {
                    alert("number should't exceed 10 digits");
                    document.ac4.f1.focus();
                    return false;
                }
                 if(numb.length<10)
                {
                    alert("number should be 10 digits");
                    document.ac4.f1.focus();
                    return false;
                }
                 if(isNaN(numb))
                {
                    alert("please enter numbers");
                    document.ac4.f1.focus();
                    return false;
                }
                }


function ab2()
{

   var email=document.getElementById('h3').value;
   if(email=="")
   {
     alert("Not empty");
     document.f1.ac3.focus();
     return false;
   }
   if(email.indexOf("@",0)<0)
   {
     alert("Valid address Needed");
     document.f1.ac3.focus();
     return false;
   }
   if(email.indexOf(".",0)<0)
   {
     alert("Proper mail id");
     document.f1.ac3.focus();
     return false;
   }
}

function getstates(countryid) {	
//alert(countryid);
	
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
			
				var  somex2=xmlhttp.responseText;
	//alert(somex2);
	var thg=somex2.split("@");
     document.getElementById("usr_state").innerHTML=thg[0];
	 document.getElementById("ccode").value=thg[1];
	 


																
            }
        }
        xmlhttp.open("GET", "states_adding.php?countryids="+ countryid, true);
        xmlhttp.send();
			
	}

	
	function getcities(stateid) {	
//alert(countryid);
	
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
			
				var  somex2=xmlhttp.responseText;
	//alert(somex2);
     document.getElementById("usr_city").innerHTML=somex2;


																
            }
        }
        xmlhttp.open("GET", "cities_adding.php?stateids="+ stateid, true);
        xmlhttp.send();
			
	}


	
	
	
		function price(edu_id) {	
//alert(countryid);
	
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
			
				var  somex2=xmlhttp.responseText;
	//alert(somex2);
    var ress=somex2.split("#");
	document.getElementById("mgmt").value=ress[0];
	document.getElementById("mgmt_stu").value=ress[1];
	document.getElementById("mgmt_fac").value=ress[2];
	document.getElementById("mgmt_name").value=ress[3];
	
document.getElementById("ordname").innerHTML=ress[3];
document.getElementById("ordnum").innerHTML="1 x "+ress[0];
document.getElementById("ordprice").innerHTML=ress[0];
document.getElementById("ordprice4").innerHTML=ress[0];

	

																
            }
        }
        xmlhttp.open("GET", "edu_price.php?eduids="+ edu_id, true);
        xmlhttp.send();
			
	}
	
	
	
	
	
	
	
	
	

      function initAutocomplete() 
	  {
       

        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
alert(places);
          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }
