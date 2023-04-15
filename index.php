<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>N A O K I</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css"> 
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
<body class="vertical-layout" text-center style="background-color:#000000;" data-color="bg-gradient-x-grey-black">   
  <style>
		h5,h4{
			color:white;
                        text-shadow: 2px 2px 4px #000000;
		}
		.text-center{
			background-color:#000000;
                        text-shadow: 2px 2px 4px #000000;
			border:none;
			border-radius:5px;
		}
		textarea{
			color:white;
                        text-shadow: 2px 2px 4px #000000;
			resize: none;
		}
		.text-center::placeholder{
			color:solid white;
                        text-shadow: 2px 2px 4px #000000;
		}
		.text-center:focus{
			background-color: black;
			border:2px solif #FFFFFF;
		}
		textarea::-webkit-scrollbar {
  			width: 5px;
 			background-color: #0000000; 
		}
		textarea::-webkit-scrollbar-thumb {
 			border-radius: 10px;
			border:none;
                        text-shadow:2px 2px 4px #000000;
  			background-color: #0000000; 
		}
		.lista_reprovadass{
			color:#000000; 
                        text-shadow: 2px 2px 4px #000000;
			border:2px solid #FFFFFF;
		}
		.card-body{
			background-color:#000000; 
                        text-shadow: 2px 2px 4px #000000;
			border:1px solid #FFFFFF;
			border-radius:5px;
		}
		.text-center{
			border:2px solid #FFFFFF;
                        text-shadow: 2px 2px 4px #000000;
			shadow:none;
		}
		.badge-success,.btn-success{
			background-color:#000000;
			color: white	;
                        text-shadow: 2px 2px 4px #000000;
		}
		.btn-success:hover{
			background-color: #00000;
			color: white ;
		}
		.aprovadas{
			background-color: #000000;
			color: white	;
                        text-shadow: 2px 2px 4px #000000;
		}
		.badge-danger{
			background-color: #000000;
			color: white	;
                        text-shadow: 2px 2px 4px #000000;
		}
		.html body .content .content-wrapper{
			background-color: #0000000;
			border: 2px solid #FFFFFFF;
		}
		.btn-bg-gradient {
   			 margin: 5px;
			 width:49%;
    		padding: 10px 40px;
    		text-align: left;
                text-shadow: 2px 2px 4px #000000;
    		text-transform: uppercase;
    		transition: 0.5s;
    		background-size: 100% auto;
    		color: white;            
    		box-shadow: 0 0 0 20px #fff;
    		border-radius: 5px;
    		display: block;
			-webkit-box-shadow: 0 0 0 0 #fff;
  		}
  		.btn-bg-gradient:hover {
   			background-position: right center;
    		color: #fff;
                text-shadow: 2px 2px 4px #000000;
  		}
			
            text-align: left;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
			-webkit-box-shadow: 0 0 0 0 #FFFFFF;
  		}
  	     .btn-bg-gradient-x:hover {
             background-position: right center;
             text-shadow: 2px 2px 4px #000000;
  		}
		  .statusbar{
			height:100px;
			padding-top:20px;
                        text-shadow: 2px 2px 4px #000000;
		  }
		  .hr-statusbar{
			border:none;
			height:2px;
			background-color:#FFFFFF;
		  }
		
                 .icon-bar {
                 width: 100%; 
                background-color: #555; 
                overflow: auto; 
                 }
.icon-bar a {
  float: left;
  text-align: center; 
  width: 20%; 
  padding: 7px 0;
  transition: all 0.3s ease; 
  color: white; 
  font-size: 20px; 
}
.icon-bar a:hover {
  background-color: #000; 
}
.active {
  background-color: #555; 
}
 box-sizing: border-box;
}
		  option { 
    /* Whatever color  you want */
    background-color: #000000;
	color: white;
        text-shadow: 2px 2px 4px #000000;
	}
	</style>
	
    <div class="app-content content" text-shadow="2px 2px 4px #000000" style=display:block;">
      <div class="content-wrapper" style="background-color:#000000;">
<br>
	  <div class="text-center text-shadow:"2px 2px 4px #000000" style=background-color:#000000;">
<br>
      <h4 class="mb-2"><strong>N A O K I</strong></h4>
    <div class="form-group";>
CHARGED: <span class="badge badge-success charge">0</span>
LIVE: <span class="badge badge-success aprovadas"> 0</span>
DEAD: <span class="badge badge-danger reprovadas"> 0</span>
TOTAL: <span class="badge carregadas"> 0</span>
LIMIT: <span class="badge "> 3000</span><br>
  </div>
   <div class="icon-bar">
  <a class="active" href=""><i class="fa fa-home"></i></a>
  <a href=""><i class="fa fa-search"></i></a>
  <a href=""><i class="fa fa-envelope"></i></a>
  <a href=""><i class="fa fa-globe"></i></a>
  <a href=""><i class="fa fa-trash"></i></a>
      </div>
</div>
  <div class="content-body">
  	<div class="mt-2"></div>
	          <div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body text-center text-shadow:2px 2px 4px #000000">
					<textarea rows="6" class="form-control text-center form-checker mb-2" placeholder="XXXXXXXXXXXXXXXX|XX|XXXX|XXX"></textarea>
					
					<div class="input-group mb-1">
					<input type="text" text-shadow: 2px 2px 4px #000000; style="background-color:#000000;" class="form-control" id="cslive" placeholder="CS LIVE" name="cslive">&nbsp;       
					<input type="text" text-shadow: 2px 2px 4px #000000; style="background-color:#000000;" class="form-control" id="pklive" placeholder="PK LIVE" name="pklive">     
      </div>
                                        <div class="input-group mb-1">
					<input type="number" text-shadow: 2px 2px 4px style="background-color:#000000;" class="form-control" id="xamount" placeholder="AMOUNT" name="xamount">&nbsp;
					<input type="text" text-shadow: 2px 2px 4px style="background-color:#000000;" class="form-control" id="xemail" placeholder="EMAIL" name="xemail">
  
     </div>
					<button class="btn btn-play btn-bg-black text-black" style="width: 50%; float: left;"><i class="fa fa-play"></i>START</button>
					<button class="btn btn-stop btn-bg-black text-black" style="width: 50%; float: right;" ><i class="fa fa-stop"></i>STOP</button>
                                        </div>
</div>
   </div>
                  </div>
                  <div class="content-body">
            		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right text-shadow:"2px 2px 4px #000000"">
						<button type="show" class="btn btn-sm btn-darken show-charge"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
					</div>
 
					<h4 class="card-title mb-1"><i class="text-success"></i> CHARGED <span class="badge charge">0</span></h4>					
			<div id='cards_charge'></div>
                      </div>
          </div>
</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-sm btn-darken show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="text-success"></i> LIVE <span class="badge aprovadas">0</span></h4>					
			<div id='cards_aprovadas'></div>
                      </div>
          </div>
</div>
			</div>
		<div class="col-xl-12">
			<div class="card">
				   <div class="card-body">
					<div class="float-right">
						<button type='hidden' class="btn btn-sm btn-darken show-dies"><i class="fa fa-eye"></i></button>
					<button class="btn btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="text-danger"></i> DECLINED <span class="badge reprovadas">0</span></h4>		
						<div style='display: none;' id='cards_reprovadas'></div>
               </div>
     	
	</div>
           <div class="text-center" style="color: 'white text-shadow:2px 2px 4px #000000;">
            COPYRIGHT 2023 NAOKI
	</div>
</div>
			</div>
		</div>
		
</section>
        </div>
      </div>
    </div>
 
    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
Swal.fire({ title: "N A O K I",  
            text: "閉嘴", 
            confirmButtonText: "proceed", 
            cancelButtonText: 'already joined', confirmButtonClass: 'btn btn-primary'});
$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#cards_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});
$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#cards_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});
$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#cards_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});
$('.btn-trash').click(function(){
	Swal.fire({title: 'REMOVED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#cards_reprovadas').text('');
});
$('.btn-copy1').click(function(){
	Swal.fire({title: 'COPIED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_charge = document.getElementById('cards_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});
$('.btn-copy').click(function(){
	Swal.fire({title: 'COPIED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_lives = document.getElementById('cards_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});
$('.btn-play').click(function(){
var cards = $('.form-checker').val().trim();
var array = cards.split('\n');
var pklive = $("#pklive").val().trim();
var cslive = $("#cslive").val().trim();
var xamount = $("#xamount").val().trim();
var xemail = $("#xemail").val().trim();
var charge = 0, lives = 0, dies = 0, testadas = 0, txt = '';
if(!cards){
	Swal.fire({title: 'add a card!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
if(!pklive){
	Swal.fire({title: 'add a pk live!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
if(!cslive){
	Swal.fire({title: 'add a cs live!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
if(!xamount){
	Swal.fire({title: 'add an amount!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
if(!xemail){
	Swal.fire({title: 'add an email!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
Swal.fire({title: 'wait for the card to be processed, buds!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var line = array.filter(function(value){
if(value.trim() !== ""){
	txt += value.trim() + '\n';
	return value.trim();
}
});
/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/
var total = line.length;
/*
line.forEach(function(value){
txt += value + '\n';
});
*/
$('.form-checker').val(txt.trim());
// ảo ma hả, đừng lấy code chứ !!
if(total > 30000){
  Swal.fire({title: 'limit cards are 3000 only!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}
$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);
line.every(function(data, index){
setTimeout(
function() {
var callBack = $.ajax({
  url: 'checkout.php?cards=' + data + '&cslive=' + cslive + '&pklive=' + pklive + '&xamount=' + xamount + '&xemail=' + xemail + '&referrer=Auth',
  success: function(retorno){
    if(retorno.indexOf("CHARGED") >= 0){
      Swal.fire({title: '+1 CHARGE', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('#cards_charge').append(retorno);
      removelinha();
      charge = charge +1;
      }
      else if(retorno.indexOf("LIVE") >= 0){
      Swal.fire({title: '+1 INSUFFICIENT', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('#cards_aprovadas').append(retorno);
      removelinha();
      lives = lives +1;
        }else{
      $('#cards_reprovadas').append(retorno);
      removelinha();
      dies = dies +1;
    }
    testadas = charge + lives + dies;
      $('.charge').text(charge);
    $('.aprovadas').text(lives);
    $('.reprovadas').text(dies);
    $('.testadas').text(testadas);
    
    if(testadas == total){
      Swal.fire({title: 'ALL CARDS HAS BEEN CHECKED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);
    }
        }
      });
    }, 10000 * index);
    return true;
    });
  });
});
//line.forEach(function(data){
//var callBack = $.ajax({
//	url: 'kmart.php?cards=' + data + '&kcookie=' + kcookie + '&referrer=Auth',
//	success: function(retorno){
//		if(retorno.indexOf("CHARGED") >= 0){
//			Swal.fire({title: '+1 CHARGED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//			$('#cards_charge').append(retorno);
//			removelinha();
//			charge = charge +1;
//			}
//			else if(retorno.indexOf("LIVE") >= 0){
//			Swal.fire({title: '+1 INSUFFICIENT', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//			$('#cards_aprovadas').append(retorno);
//			removelinha();
//			lives = lives +1;
//		    }else{
//			$('#cards_reprovadas').append(retorno);
//			removelinha();
//			dies = dies +1;
//		}
//		testadas = charge + lives + dies;
//	    $('.charge').text(charge);
//		$('.aprovadas').text(lives);
//		$('.reprovadas').text(dies);
//		$('.testadas').text(testadas);
//		
//		if(testadas == total){
//			Swal.fire({title: 'ALL CARDS HAS BEEN CHECKED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//			$('.btn-play').attr('disabled', false);
//			$('.btn-stop').attr('disabled', true);
//		}
//        }
//      });
//      $('.btn-stop').click(function(){
//      Swal.fire({title: 'PAUSED!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//      $('.btn-play').attr('disabled', false);
//      $('.btn-stop').attr('disabled', true);      
//      	callBack.abort();
//      	return false;
//      });
//    });
//  });
//});
function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}
var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    var d = new Date();
    document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
}
  
	
</script>
  </body>
</html>