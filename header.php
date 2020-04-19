<?php //echo $this->load->view('mixpanel','',true); ?>
<?php 
		$trackSession   =  md5(md5(date('Y-m-d h:i:s')));
		$get_ips        =  array_map('current',$this->mastermodel->selectAllData('ip_list',$condition="",$order_by="",$limit="",$min="",$max="","ip_address"));
 		$block_country  =  array_map('current',$this->mastermodel->selectAllData('block_country',$condition="",$order_by="",$limit="",$min="",$max="","countryCode"));
 		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
		$url 		= "https://ipinfo.io/$ipaddress";
	    $ch 		= curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $output 	= curl_exec($ch);
	    curl_close($ch);
		$output  	        = json_decode($output);
		$blog_country_name  = $output->country;
		$user_country_data  = $this->mastermodel->selectAllData('countries_new',array('countryCode'=>$blog_country_name));
		$this->session->set_userdata('blog_country_name',$blog_country_name);
		

		// if( (($output->country=="CA") && (!in_array($ipaddress, $get_ips))) ){
			// redirect(base_url().'home/coming_soon');
		// }else if(in_array($output->country,$block_country)){
			// redirect(base_url().'home/coming_soon');
		// }
// 		
		// if(in_array($output->country,$block_country)){
			// redirect(base_url().'home/coming_soon');
		// }
// 		
		
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	if( $this->uri->segment(1)=='home')
	{
		$keyword='Canadian Parcel forwarder';
		
	}else if($this->uri->segment(1)=='how_it_works')
	{
		$keyword='Ship from Canada to USA';
	}
	else if($this->uri->segment(1)=='price')
	{
		$keyword='Ship Parcels from Canada';
	}
	else if($this->uri->segment(1)=='login')
	{
		$keyword='Canadian Address';
	}
	else if($this->uri->segment(1)=='my_account')
	{
		$keyword='Free Canadian Address';
	}
	else if($this->uri->segment(1)=='contact')
	{
		$keyword='Canada Parcel Forwarder';
	}
	else{
		$keyword='Canada Parcel Forwarder';
	}
	?>
	<title><?php echo $keyword; ?> - ShipByMail</title>
	    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta property="og:type" content="website" />
		<meta property="fb:app_id" content="1144515482380168" />
		<meta property="og:url" content="<?php echo base_url(); ?>" />
		<meta property="og:title" content="<?php echo $keyword; ?> - ShipByMail" />
		<meta property="og:description" content="ShipByMail is an affordable Canadian Parcel Forwarder which gives you a free Canadian Address to shop your favourite Canadian merchant. Sign up now and start shipping from Canada to the USA and internationally.Pay the merchant yourself or use our BuyForMe Service" />
		<meta property="og:image" content="<?php echo base_url(); ?>assets/front/image/new-img/ship_logo.png" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="mobile-web-app-capable" content="yes">
	    <link rel="apple-touch-icon" sizes="57x57" href="assets/front/image/new-img/splash57-57.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="assets/front/image/new-img/splash72-72.png">
		<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
		<meta name="description" content="ShipByMail is an affordable Canadian Parcel Forwarder which gives you a free Canadian Address to shop your favourite Canadian merchant. Sign up now and start shipping from Canada to the USA and internationally.Pay the merchant yourself or use our BuyForMe Service" /> 
		<meta name="keywords" content="Canadian Parcel forwarder,Ship from Canada to USA,Ship Parcels from Canada,Canadian Address,Free Canadian Address,Ship from Canada,Canada Parcel Forwarder ,Shop and ship from Canada,Ship worldwide from Canada,Ship goods from Canada,International Shipping from Canada,Package Forwarder from Canada,Package Forwarding Canada" />
		<meta name="google-site-verification" content="1z1tslGAFxcT8hFhv8LLx41etpjbCcB41Z8ULbEhjUY" />	
	    <meta name="theme-color" content="#1F497D"/>
	    <meta http-equiv="Cache-Control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<?php if($this->mastermodel->is_live()){ ?>
			<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-PC93QJQ');</script>
			<!-- End Google Tag Manager -->
		<?php } ?>	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/flags/flags.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/flags/flags.min.css" />
    	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/front/image/new-img/shipbox_logo.png"  />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/bootstrap.min.css?v=<?php echo $file_version; ?>" />
		<?php if( $this->uri->segment(1)=='toysrus' || $this->uri->segment(1)=='black_friday_user' || $this->uri->segment(1)=='black_friday'){ ?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/css/components.min.css?v=<?php echo $file_version; ?>" /> 
			<link  rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/front/shipbymail_html/style.css?v=<?php echo $file_version; ?>">
		<?php } ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/font-awesome.min.css?v=<?php echo $file_version; ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/owl.carousel.css?v=<?php echo $file_version; ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatable/css/dataTables.min.css?v=<?php echo $file_version; ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatable/css/responsive.dataTables.min.css?v=<?php echo $file_version; ?>"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css?v=<?php echo $file_version; ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/style.css?v=<?php echo $file_version; ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom_css/site.css?v=<?php echo $file_version; ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom_css/custom.css?v=<?php echo $file_version; ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom_css/showhide.css?v=<?php echo $file_version; ?>" />
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
		<script src="<?php echo base_url();?>assets/front/js/jquery.min.js?v=<?php echo $file_version; ?>"></script>
		<script src="<?php echo base_url();?>assets/js/offer_user.js?v=<?php echo $file_version; ?>"></script>
		<script src="<?php echo base_url();?>assets/js/offer_tracking.js?v=<?php echo $file_version; ?>"></script>
		<script async   src="<?php echo base_url(); ?>assets/js/config.js?v=<?php echo $file_version; ?>"></script>
		<script async  src="<?php echo base_url(); ?>assets/js/shippingCharge.js?v=<?php echo $file_version; ?>"></script>
		<script async  src="<?php echo base_url(); ?>assets/js/site.js?v=<?php echo $file_version; ?>"></script>
	    <?php if($this->mastermodel->is_live()){ ?>
		    <script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
				
				ga('create', 'UA-100877869-1', 'auto');
				ga('send', 'pageview');
			</script> 
		<?php } ?>
		<!-- start share this script  -->
		<?php if($this->mastermodel->is_live()){ ?>
			<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5da6ff74af9b970012ee9aec&product=inline-share-buttons' async='async'></script>
		<?php }else{ ?>
			<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5da6fb0c30109f001244707c&product=inline-share-buttons' async='async'></script>
		<?php } ?>
</head>
<body>
	<?php if($this->mastermodel->is_live()){ ?>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC93QJQ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
    <?php } ?>
	<?php if(($this->uri->segment(1)=="shipping_details")){ ?>
	<div id="preloader"><div id="status">&nbsp;</div></div> 
	<!-- ========================  Preloader End  ============================ -->
	 <script>
	      var $preload = $('#preloader');
	      if ($preload.length > 0) {
	        $(window).on('load', function() {
	          $preload.children().fadeOut(5);
	          $preload.delay(2).fadeOut(5);
	          $('body').delay(2).css({'overflow':'visible'});
	        });
	      }
	</script>
	<?php  } ?>
	
	<!-- ======================== navbar ============================ -->
	<nav class="navbar navbar-default navbar-custom navbar-fixed-top" data-spy="affix" data-offset-top="100">
		<div class="bottom-nav">
			<div class="container">
				<div class="">
					<div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" title="Ship from Canada to USA" href="<?php echo base_url().'home' ?>"><img alt="ship_logo" src="<?php echo base_url();?>assets/front/image/new-img/ship_logo.png" srcset="<?php echo base_url();?>assets/front/image/new-img/ship_logo.png 1x, <?php echo base_url();?>assets/front/image/new-img/ship_logo.png 2x"></a>
				    </div>
				    <?php 
				    //$checked_payment = $this->mastermodel->selectAllData('payments',array('user_id'=>$this->session->userdata('user_id'),'payment_type'=>1)); 
				    ?>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav ">
						<?php
						$currenturl   = current_url();
						$http_referer = $_SERVER['HTTP_REFERER'];
						if(isset($_GET['aff'])){
					      $affiliate_id  = $_GET['aff'];
						  $this->session->set_userdata('affiliate_id',$affiliate_id);
					    }
						?>
				        <input type="hidden" id="http_referer" value="<?php echo $http_referer; ?>">
				        <input type="hidden" id="currenturl" value="<?php echo $currenturl; ?>">
				        <input type="hidden" id="trackSession" value="<?php echo $trackSession; ?>">
						<?php 
						$currentcountry = $this -> session -> userdata('blog_country_name');
						$currentcountry = strtolower($currentcountry);
						?>
						<?php if($user_country_data[0]['welcome_msg']){ ?>
						<li><a title="<?php echo  'Ship from Canada to '.$currentcountry; ?>" href="<?php echo base_url().'/'.$currentcountry; ?>"><span class="flag-text"><?php echo $user_country_data[0]['welcome_msg']; ?></span><i class="flag flag-<?php echo $currentcountry; ?>"></i></a></li>
						<?php } ?>
						<?php if(!$this->session->userdata('user_id')){ ?>
						<li><a title="Ship from Canada to USA"  href="<?php echo base_url().'home' ?>">home</a></li>
						<?php } ?>
						<li><a title="Ship from Canada to USA" href="<?php echo base_url().'myaccount/mailBox'; ?>">Dashboard</a></li>
						<li><a title="Ship from Canada to USA" href="<?php echo base_url().'howitworks' ?>">How It Works</a></li>
						<li><a title="Ship from Canada to USA" href="<?php echo base_url().'price';?>">Pricing</a></li>
						<?php 
						  if($this -> session -> userdata('user_id')){ 
						  	if($this->uri->segment(1)=='tickets'){
						  		$active='active';
						  	}
						  	$this -> db -> select('*');
							$this -> db -> from('user');
							$this -> db -> where('user_id',$this -> session -> userdata('user_id'));
							$result = $this -> db -> get()-> result_array(); ?>
						  	<!-- <li><a href="<?php echo base_url().'shipping_details' ?>">Shipping Details</a></li> -->
						  	<!-- <li><a href="<?php echo base_url().'feedback' ?>">Survey</a></li> -->
						    <!-- <li><a href="<?php echo base_url().'my_account' ?>">My Account </a></li> -->
						  	<li class="<?php echo 'dropdown '.$active; ?>">
								<a  href="<?php echo base_url().'tickets'; ?>" class="dropdown-toggle">Support <i class="fa fa-angle-down fa-4" aria-hidden="true"></i></a>
								<ul class="dropdown-menu dropdown">
									<li><a href="<?php echo base_url().'tickets/create-ticket'; ?>">Submit Ticket</a></li>
									<li><a href="<?php echo base_url().'tickets'; ?>">View Tickets</a></li>
								</ul>
						    </li>
						  	<li><a title="Ship from Canada to USA"  href="javascript:void(0);" class="down-angle-icon ">
								  <?php $user_name = $result[0]['f_name'].' '.$result[0]['l_name']; 
								  echo  substr($user_name,0,16); ?><i class="down-angle-icon fa fa-angle-down fa-4" aria-hidden="true"></i></a>
							  	<div>
									<div class="popover fade bottom in addr_user ">
										<!-- <div class="arrow"></div> -->
										<h3 class="popover-title">SHIP YOUR <br> PACKAGES TO:</h3>
										<div class="popover-content">
									 		<ul class="unstyled">
									 	 		<div class="notify300">
									 				<li data-alert_id="1" class="alert_li">
									 					<div class="pop-text-new">
									 						<?php echo ucfirst($result[0]['f_name']).' '.ucfirst($result[0]['l_name']); ?>
									 					</div>
									 					<?php //if(!empty($checked_payment)) { ?>
					                                    <div class="pop-text-new">
					                                    	3130 580 Seaborne Avenue
					                                    </div>
					                                    <div class="pop-text-new">
					                                    	<?php if($result){ echo $result[0]['suite_id']; }  ?>
					                                    </div>
					                                    <div class="pop-text-new">
					                                    	Port Coquitlam, B.C.
					                                    </div>
					                                    <div class="pop-text-new">
					                                    	V3B 0M3
					                                    </div>
					                                    <div class="pop-text-new">
					                                    	CANADA
					                                    </div>
					                                    <div class="pop-text-new">
					                                    	Tel: +1 778-727-1427
					                                    </div>
					                                    <?php //} ?>
					                                    <div class="pop-text-new acount_sec">
					                                    	<a  title="Ship from Canada to USA" href="<?php echo base_url().'my_account/profile' ?>">	<i class="fa fa-cog"></i><span class="toggle_pro">ACCOUNT</span></a>
					                                    </div>
					                                    <?php $walletData  = $this->mastermodel->selectAllData('wallet',array('user_id'=>$this->session->userdata('user_id'))); ?>
					                                    <div class="account-wallet-div pop-text-new"><span class="wallet-text"><i class="fas fa-wallet"></i>Wallet Amount: </span><span class="wallet-val">CDN$<?php echo $this->mastermodel->round_to_2dp($walletData[0]['amount']); ?></span></div>
									 					<div class="clearfix"></div>
									 				</li>
									 			</div>	
									 	 	</ul>
										</div>
										<div class="center">
											<i class="down-up-icon pop-icon-new fa fa-angle-up fa-4" aria-hidden="true"></i>
										</div>
									</div>
							  	</div>
						  	</li>
						  	<li><a  title="Ship from Canada to USA" class="btn btn-quote trns-btn solid-btn-theam" href="<?php echo base_url().'login/logout' ?>">Logout</a></li>
						  <?php }else{ ?>
						  	<li><a title="Ship from Canada to USA" href="<?php echo base_url().'tickets/create-ticket'; ?>">Support</a></li>
						  	<!-- <li><a  title="Ship from Canada to USA" href="<?php echo base_url().'contact' ?>">Support</a></li> -->
						  	<li><a  title="Ship from Canada to USA" class="btn btn-quote trns-btn solid-btn-theam" href="<?php echo base_url().'login' ?>">SIGN IN</a></li>
						    <li><a  title="Ship from Canada to USA" class="btn btn-quote trns-btn solid-btn-theam orange-color" href="<?php echo base_url().'registration' ?>">SIGN UP</a></li>
						<?php } ?>
					</ul>
					</div>    
				</div>
			</div>
		</div>
	</nav>
	<style>
    	.acount_sec a{
    		padding-left:0px !important;
    	}
    </style>
	<!----click to enlarge image section ---->
	<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>
<!----click to enlarge image section ---->
<!-- track session --> 
<script>
$(document).ready(function(){
	   	var trackSession  = "";
		var currenturl    = $("#currenturl").val();
		var http_referer  = $("#http_referer").val();
		if(localStorage.getItem('trackSession')){
			trackSession  = localStorage.getItem('trackSession');
		}else{
			trackSession  = $("#trackSession").val();
			localStorage.setItem('trackSession',trackSession);
		}
		$.ajax({
	         type     : 'POST',
	         dataType : 'json',
	         url      : '<?php echo base_url(); ?>customer_journey',
	         data     : {
	         	currenturl    : currenturl,  
	         	http_referer  : http_referer,
	         	trackSession  : trackSession
	         },
	         success:function(response){}
		});

		
	});
	$(document).on('click','#remember',function(){
  		if ( $('input[name="remember_me"]').is(':checked')){
  			 $('input[name="remember_me"]').val(1);
  		}else{
  			$checkbox_val = $('input[name="remember_me"]').val(0);
  		}
  		
  		//alert($('input[name="remember_me"]').val());
  		if($('input[name="remember_me"]').val()==1){
			   $.ajax({
			         type     : 'POST',
			         dataType : 'json',
			         url      : '<?php echo base_url()?>my_account/profile_cookie',
			         data     : {
			         	ajax_cookie  : 1
			         },
			        success:function(response){
			       		
			         },   
			     });
  			}
  		});
</script> 
