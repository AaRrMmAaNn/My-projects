<!DOCTYPE html>

<html>
<head>
	<title>Monster Energy</title>
<link href="https://fonts.googleapis.com/css?family=Tillana:400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">  
	

<script src="jquery-3.3.1.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

      


    $(".meniToggle").click(function(){
        $(".sidenav").slideToggle("slow");

    }); 

    $(".submeni").hide();

    $(".kontaktKlik").mouseenter(function(){
        $(".submeni").slideToggle("slow"); 
    });

    $(".kontaktKlik").mouseleave(function(){
        $(".submeni").slideToggle("slow"); 
    });

    $(".galerija-slika").mouseenter(function(){
    	var src = $(this).attr('src');
    	$(".glavna").attr("src", src);


      

    });



    //$(".kontaktKlik").click(function() {
    //  $(".submeni").css("visibility", "unset");
    //});
      
});

function results() {
            var ime = document.getElementById('ime').value;
            var prezime = document.getElementById('prezime').value;
            var email = document.getElementById('email').value;
            var pitanje = document.getElementById('pitanje').value;
            
var text="Vaše ime: "+ ime + "<br>" +"Vaše prezime: " +prezime + "<br>" + "Vaš email: "+email + "<br>" + "Vaše pitanje: " +pitanje + "<br>";
            document.getElementById("kontaktna").innerHTML = text;
         

}




</script>


</head>	

 

 <body> 


<header class="header">
<img src="slike/monster.gif" style="height: 150px" width="250px">

<div class="clearfix"></div>

</header>

<div class="clearfix"></div>
<?php include 'navigacija.php'; ?> 
<div class="stranica">