<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>ASHHH</title></title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body class="vertical-layout" data-color="bg-gradient-x-purple-blue">   
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before mb-300">        	
        </div>        
  <div class="content-body">
  	<div class="mt-2"></div>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body text-center">
					<h4 class="mb-2"><strong>Ash's checker <br<Ash</br></strong></h4>
					<textarea rows="14" class="form-control text-center form-checker mb-2" placeholder="𝙋𝙐𝙏 𝘾𝘾 𝙃𝙀𝙍𝙀"></textarea>	
					
					<textarea rows="1" class="form-control text-center" style="width:100%; float: left ;"  id="sec" placeholder="𝙎𝙆_𝙇𝙄𝙑𝙀_𝙓𝙓𝙍𝘾𝙓"></textarea></br>
								
					
					          <select name="gate" id="gate" class="form-control" style="margin-top: 0px;">
					<option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd1.php">𝗖𝗩𝗩 𝗖𝗛𝗔𝗥𝗚𝗘𝗗 $𝟭</option>
					<option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/eur1.php">𝗖𝗩𝗩 𝗖𝗛𝗔𝗥𝗚𝗘𝗗 €𝟭</option>
						<option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/chk.php">𝗖𝗩𝗩 𝗖𝗛𝗔𝗥𝗚𝗘𝗗 ₹𝟱𝟬</option>
                </select>
<b class="card-body p-md-0 text-center">  <b class="mt-0 text-=black">
           <div class="">
               <br>
		<button class="btn btn-success btn-play text-white" style="width: 40%; float: left;"><i class="fa fa-play"></i> 𝙎𝙏𝘼𝙍𝙏</button>
					<button class="btn btn-danger btn-stop text-white" style="width: 40%; float: right;" disabled><i class="fa fa-stop"></i> 𝙎𝙏𝙊𝙋</button>
				</div>
			</div>
		</div>
<div class="col-md-4">
  <div class="card mb-2">
  	<div class="card-body">
<h5>𝙏𝙊𝙏𝘼𝙇:<span class="badge badge-dark float-right carregadas">0</span></h5><hr>

<h5>𝘾𝙃𝘼𝙍𝙂𝙀𝘿:<span class="badge badge-success float-right charge">0</span></h5><hr>

<h5>𝘾𝙑𝙑:<span class="badge badge-info float-right cvvs">0</span></h5><hr>

<h5>𝘾𝘾𝙉:<span class="badge badge-primary float-right aprovadas">0</span></h5><hr>

<h5>𝘿𝙀𝘼𝘿:<span class="badge badge-danger float-right reprovadas">0</span></h5>
                  </div> 
                </div>
              </div>
            
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> Charged</h4>					
			<div id='lista_charge'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-live"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy2"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check-square text-success"></i> Cvvs</h4>					
			<div id='lista_cvvs'></div>
				</div>				
			</div>
		</div>
		
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-plus text-success"></i> CCN</h4>					
			<div id='lista_aprovadas'></div>
				</div>				
			</div>
		</div>
		
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
					<button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> Deads</h4>		
						<div style='display: none;' id='lista_reprovadas'></div>
				</div>				
			</div>
		</div>
</section>
        </div>
      </div>
    </div>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>

footer {text-align: middle;}
#copyright, ul {display: inline-block;}
ul {list-style: none; margin: 0; padding: 0;}
li {display: inline-block; padding-left: 6px; margin-left: 5px; border-left: 1px solid #000;}
li:first-child {border: none; padding-left: 0;}
a {text-transform: uppercase; color: #FD6258; text-decoration: none;}


</style>
</head>
<body>

<footer>





<li><a href=http://t.me/rcxtm>GROUP</a></li>
<li><a href=http://t.me/rcxtm>CHANNEL</a></li>
</ul> 

</footer>

</body>
</html>


</section>
        </div>
      </div>
    </div>
 
    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){



$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#lista_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-live').click(function(){
var type = $('.show-live').attr('type');
$('#lista_cvvs').slideToggle();
if(type == 'show'){
$('.show-live').html('<i class="fa fa-eye"></i>');
$('.show-live').attr('type', 'hidden');
}else{
$('.show-live').html('<i class="fa fa-eye-slash"></i>');
$('.show-live').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#lista_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#lista_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
	Swal.fire({title: 'REMOVED', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 1000});
$('#lista_reprovadas').text('');
});

$('.btn-copy1').click(function(){
	Swal.fire({title: 'Copied Charged.', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 1000});
var lista_charge = document.getElementById('lista_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy2').click(function(){
	Swal.fire({title: 'Copied Cvvs', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 1000});
var lista_live = document.getElementById('lista_cvvs').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_live;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy').click(function(){
	Swal.fire({title: 'Copied Ccns', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 1000});
var lista_lives = document.getElementById('lista_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){
var sec = $("#sec").val();
var e = document.getElementById("gate");
var gate = e.options[e.selectedIndex].value;
var lista = $('.form-checker').val().trim();
var array = lista.split('\n');
var charge = 0, live = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!lista){
	Swal.fire({title: 'Invalid or Empty Fields', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}



Swal.fire({title: 'Checking...', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 900});

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
if(total >99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999){
  Swal.fire({title: 'Hehehe im limited to only 5000 checks!!!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.forEach(function(data){
var callBack = $.ajax({
	url: gate + '?lista=' + data + '&sec=' + sec,
	success: function(retorno){
		if(retorno.indexOf("CHARGED") >= 0){
			$('#lista_charge').append(retorno);
			removelinha();
			charge = charge +1;
			Swal.fire({title: '+1 LIVE', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});}
			else if(retorno.indexOf("CVV") >= 0){
			$('#lista_cvvs').append(retorno);
			removelinha();
			live = live +1;
		    Swal.fire({title: '+1 Cvv', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});}
			else if(retorno.indexOf("CCN") >= 0){
			$('#lista_aprovadas').append(retorno);
			removelinha();
			lives = lives +1;
		    Swal.fire({title: '+1 Ccn', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});}
		    else if(retorno.indexOf("SK_DIE") >= 0){
Swal.fire({title: 'Your SK is invalid!!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
			callBack.abort();
      	return false;
		    }else if(retorno.indexOf("SK_INVALID") >= 0){
Swal.fire({title: 'Sk Invalid!!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
			callBack.abort();
      	return false;
		    }else{
			$('#lista_reprovadas').append(retorno);
			removelinha();
			dies = dies +1;
		}
		testadas = charge + live + lives + dies;
	    $('.charge').text(charge);
	    $('.cvvs').text(live);
		$('.aprovadas').text(lives);
		$('.reprovadas').text(dies);
		$('.testadas').text(testadas);
		
		if(testadas == total){
			Swal.fire({title: 'Completed!!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
		}
        }
      });
      $('.btn-stop').click(function(){
      Swal.fire({title: 'PAUSED', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);      
      	callBack.abort();
      	return false;
      });
    });
  });
});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}



	
</script>

  </body>
</html>
