var POI=[];
var map;

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
  
  
  
  $("#l"+page).addClass("active");
  
  $("#form1").submit(function(event){
  event.preventDefault();
   $.post("phpapi/api1.php?query=1",$("#form1").serialize(), function(res)
   {
	if(res=="true")
	{
	 $("#form1").hide(1000);
		$("#message").html("<div class='alert alert-success'>Account Created</div>");
	}
	else
	{
		$("#message").html("<div class='alert alert-danger'>This username or email exists</div>");
	}
	});
  });
  
  
  
  
  $("#form2").submit(function(event){
  event.preventDefault();
   $.post("phpapi/api1.php?query=2",$("#form2").serialize(), function(res)
   {
	if(res=="true")
	{
	 window.location.href='user.php';
	}
	else
	{
		$("#message").html("<div class='alert alert-danger'>Error username or password</div>");
	}
	});
  });
  
  
  $("#form3").submit(function(event){
  event.preventDefault();
   $.post("phpapi/api1.php?query=3",$("#form3").serialize(), function(res)
   {
	if(res=="true")
	{
	 window.location.href='admin.php';
	}
	else
	{
		$("#message").html("<div class='alert alert-danger'>Error username or password</div>");
	}
	});
  });
  
  
   $("#form4").submit(function(event){
 
	event.preventDefault();
    var fd = new FormData();
    var file= $('#file1')[0].files[0];
	fd.append('file1',file);
    $("#message").html("<center><h3>Please Wait !!!</h3><br><img src='images/1.gif' width=100px></center>");
    $.ajax({
              url: 'phpapi/api2.php?query=1',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(res){
			  
			  
                 if(res=="true"){
				 
					$("#form4").hide(1000);
                   $("#message").html("<div class='alert alert-success'>Upload Success</div>");
                 }else{
                    $("#message").html("<div class='alert alert-danger'>Upload Failed</div>"+res);
                 }
              },
           });
      
    });
  
  
  
  
  $("#category").change(function(){
	for(i=0;i<POI.length;i++)
		{
			POI[i].setMap(null);
		}
	POI=[];
	
	cat=$("#category").val();
	
	 $.get("phpapi/api3.php?query=3&tp="+cat,function(res){
	var js=JSON.parse(res);
	for (var i=0;i<js.length;i++)
	{
	
		var ps={ lat: js[i].lat/1, lng: js[i].lng/1 };
		POI.push(new google.maps.Marker({
			position: ps,
			map,
			title: js[i].name,
		  }));
		 
	}
	console.log(POI);
	
  });
	
	
  });
  
  
})



function initMap() {
  const myLatLng = { lat: 38.240617362002524, lng: 21.73916901764607 };
   map = new google.maps.Map(document.getElementById("map"), {
    zoom: 14,
    center: myLatLng,
  });
  $.get("phpapi/api3.php?query=1",function(res){
	var js=JSON.parse(res);
	for (var i=0;i<js.length;i++)
	{
	
		var ps={ lat: js[i].lat/1, lng: js[i].lng/1 };
		POI.push(new google.maps.Marker({
			position: ps,
			map,
			title: js[i].name,
		  }));
	}
	
  });
  
}

function alltypes()
{
	 $.get("phpapi/api3.php?query=2",function(res){
			 var js=JSON.parse(res);
			 s="<option></option>";
			 for (var i=0;i<js.length;i++)
			{
			s=s+"<option>"+js[i].type+"</option>";
			}
			$("#category").html(s);
	 });
	
}
