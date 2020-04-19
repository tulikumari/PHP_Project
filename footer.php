<?php $user_data           = $this->mastermodel->selectAllData('user',array('user_id'=>$this->session->userdata('user_id'))); ?>
<?php $master_setting_info = $this->mastermodel->get_master_setting_info(); ?>
<div id="fb-root"></div>
<?php if($this->mastermodel->is_live()){ ?>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1965877200314423&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<?php }else{ ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1144515482380168&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php } ?>
	<!-- footer widget-->
	<a class="enlarge" id="enlarge" style="display:none"></a><!-- enlarge image -->
	<div class="footer-widget section-pad">
		<div class="container">
			<div class="">
				<div class="widget-container row customFooter">
					<div class="footer-col about-us col-sm-3 res-m-bttm">
						<img alt="ship_logo" src="<?php echo base_url(); ?>assets/front/image/new-img/ship_logo.png">
						<div class="new-foot-logo-txt">
							<ul class="bottom-des">
								<li class="footer-warehouse-address">
									<span>
										3130-580 Seaborne Ave<br/>
										Port Coquitlam, B.C.<br/>
										V3B 0M3<br/>
										CANADA<br/>
										Tel: +1 778-727-1427<br/>
									</span>
									<div class="local-time-div">Local Time: <span id="local-time-counter"><?php echo date('h:i:s a'); ?></span></div>
								</li>
							</ul>
						</div>
					</div>
					<!--<div class="footer-col about-us col-md-3 res-m-bttm">
						<?php if($this->session->userdata('user_id')){ ?>
						    <div class="share-this-footer-btn-div">
						    	<div class="refer-msg-title">
						    		<div class="refer-head">Refer a Friend</div>
									<div class="refer-msg">Receive CDN $<?php echo $master_setting_info['referrel_shipping_payment_amount']; ?> for each friend that creates an account on ShipByMail.com and completes their first shipment.</div>
								</div>
						    	<div data-title="sdfhsadkjf asdgfasj asdg jasdfjksa" data-image="https://s18955.pcdn.co/wp-content/uploads/2019/06/ShareThisLogo2x-1.png" data-url="<?php echo base_url().'?aff='.$this->mastermodel->encode_without_session($this->session->userdata('user_id')); ?>" class="sharethis-inline-share-buttons share-btns"></div>
						    </div>
					    <?php } ?>
					</div>-->
					<div class="footer-col service-col  col-sm-3 res-m-bttm">
						<!-- <h5 class="heading-col">Quick Links</h5> -->
						<div class="new-foot-logo-txt">
							<ul class="bottom-des anchor-tag">
								<li >
									<a class="blue_Anchor" href="<?php echo base_url().'howitworks' ?>" title="Ship from Canada to USA">How ShipByMail Works</a>
								</li>
								<li >
									<a class="blue_Anchor" href="<?php echo base_url().'countries' ?>" title="Ship from Canada to USA">Shipping & Pricing</a>
								</li>
								<li >
									<a class="blue_Anchor" href="<?php echo base_url().'faq' ?>" title="Ship from Canada to USA">FAQ</a>
								</li>
								<li>
									<a class="blue_Anchor" href="<?php echo base_url().'tickets/create-ticket'; ?>" title="Ship from Canada to USA">Support</a>
								</li>
								<li>
									<a class="blue_Anchor" href="<?php echo base_url().'faq'; ?>" title="Ship from Canada to USA">Actual vs. Volumetric Weight</a>
								</li>
							</ul>
						</div>	
					</div>
					<div class="footer-col service-col  col-sm-3 res-m-bttm">
						<!-- <h5 class="heading-col">about us</h5> -->
						<div class="new-foot-logo-txt">
							<ul class="bottom-des anchor-tag">
								<li>
									<a class="blue_Anchor" href="<?php echo base_url().'aboutus' ?>" title="Ship from Canada to USA">About ShipByMail</a>
								</li>
								<li>
									<a class="blue_Anchor" href="<?php echo base_url().'tickets/create-ticket' ?>" title="Ship from Canada to USA">Contact Us</a>
								</li>
								<li>
									<a class="blue_Anchor"  href="<?php echo base_url().'partner-us' ?>" title="Ship from Canada to USA">Become a Partner </a>
								</li>
								<li>
									<a href="<?php echo base_url().'sitemap' ?>">SiteMap</a>
								</li>
								<li>
									<a class="blue_Anchor" href="<?php echo base_url().'blog' ?>" title="Ship from Canada to USA">Blog</a>
								</li>
							</ul>
						</div>
				    </div>		
					<div class="footer-col contact col-sm-3">
						<div class="fot_international">
							<div class="text-center">
								<div class="fot_growth_txt">2019 Country Growth Leader</div>
								<div class="UnitImgLogo">
									<img src="<?php echo base_url(); ?>assets/front/image/new-img/international_ship.png" alt="Address">
								</div>
								<div class="fot_int_ship">International Shipping</div>
							</div>
						</div>
						<div class="for_read_review">
							<div class="text-center"><b>Read our reviews on:</b></div>
							<div>
								<a target="_blank" href="https://www.facebook.com/pg/shipbymail/reviews/"><img src="<?php echo base_url(); ?>assets/front/image/new-img/facebook_share1.png" alt="" /></a>
								&nbsp;&nbsp;
								<a target="_blank" href="https://www.trustpilot.com/review/www.shipbymail.com"><img src="<?php echo base_url(); ?>assets/front/image/new-img/trustpilot.png" alt="" /></a>
						    </div>
						</div>
					</div>
					<style>
						.footer_img{ margin-top: 38px;}
						.socail_media_share{float:left;}
					    .footer_log{ padding-top: 20px;}
						.right_immg {border: none !important;}
						.right_immg p{margin-top: 12px; font-size: 14px;font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;}
					    .right_immg{min-height: 200px;}
						.right_immg img {margin-top: 0px;}
						#u_0_2 { background: #3d61ad !important; }
						.copyright { background: #1f4e78; padding: 10px 0; color:#fff; font-size:15px; text-align: center; }
						.for_read_review img{ box-shadow:3px 3px 5px #999; }
						@media only screen and (min-width: 768px) and (max-width: 991px) {
							.footer-col.service-col {
								clear: none;
							}
							.fot_growth_txt {font-size: 11px; }
							.fot_international { padding-left: 0px; }
							.fot_int_ship { font-size: 15px; }
							.for_read_review img{ width:60px; }
						}
						@media screen and (max-width: 768px){
					 	.socail_media_share{float:none !important;} 
					 	}
					</style>
				</div>
				<div class="footer_log widget-container row">
					<div class="col-sm-3">
						<div class="center col-md-6 t-10">
							<a target="_blank" rel="nofollow" href="https://www.canada.ca" title="Ship from Canada to USA">
							<img class="" src="<?php echo base_url(); ?>assets/front/image/new-img/partner-img/Canada-post.png" alt="Address">
							</a>
						</div>
						<div class="center col-md-6 t-10">
							<a target="_blank"  rel="nofollow" href="http://www.dhl.com" title="Ship from Canada to USA">	
							<img  class="" src="<?php echo base_url(); ?>assets/front/image/new-img/partner-img/dhl_logo.gif" alt="Address">
							</a>
						</div>
						<div style="clear: both"></div>
						<div class="center col-md-6 t-5">
							<a target="_blank" rel="nofollow" href="http://www.fedex.com/">	
							<img class="" src="<?php echo base_url(); ?>assets/front/image/new-img/partner-img/fedex_logo.gif" alt="Address">
							</a>
						</div>
						<div class="center  col-md-6 t-5">
							<a target="_blank" rel="nofollow" href="https://www.tnt.com/" title="Ship from Canada to USA">
							<img class="" src="<?php echo base_url(); ?>assets/front/image/new-img/partner-img/TNT-logo.png" alt="Address">
							</a>
						</div>
						<div style="clear: both"></div>
						<div class="center col-md-6 t-10">
							<a target="_blank" rel="nofollow" href="https://www.usps.com/" title="Ship from Canada to USA">	
							<img class="v-align-bottom" src="<?php echo base_url(); ?>assets/front/image/new-img/partner-img/usps_logo.png" alt="Address">
							</a>
						</div>
						<div class="center col-md-6 t-10">
							<a target="_blank" rel="nofollow" href="https://www.ups.com" title="Ship from Canada to USA">	
							<img src="<?php echo base_url(); ?>assets/front/image/new-img/partner-img/UPS_logo.png" alt="Address">
							</a>
						</div>
						<div style="clear: both"></div>
						<div class="center col-md-7 paypal_btn_margin_t">
							<a target="_blank" rel="nofollow" href="https://www.paypal.com/" title="Paypal">	
							<img class="" src="<?php echo base_url(); ?>assets/front/image/paymnet-modes/Paypal-Visa-debit.png" alt="Address">
							</a>
						</div>
					</div>
					<div class="col-sm-6 t-10">
					  <div class="row">
					    <div class="col-sm-6">
						  <h5 class="heading-col">Blog</h5>
						</div>
						<div class="col-sm-6">
							<div class="socail_media_share">
								<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>	
								<?php if($this->mastermodel->is_live()){ ?>
								<div class="fb-share-button" data-href="<?php echo base_url(); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.shipbymail.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
								<?php }else{ ?>
								<div class="fb-share-button" data-href="<?php echo base_url(); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.shrinkmybox.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
								<?php } ?>
							</div>
						</div>
					  </div>
					  <div class="row">
					   <div class="col-md-12 ">
						<?php 
						    $blog_country_name  		= $this -> session -> userdata('blog_country_name');
							$sqlcountry         		= "SELECT `countryName` FROM `countries_new` where `countryCode`='".$blog_country_name."'";
							$country            		= $this->db->query($sqlcountry);
							$resultcountry      		= $country->result();
							$blog_country_name_Code     = $resultcountry[0]->countryName;
							if($blog_country_name=='CA'){
								$blog_country_wp = 'Canada';
							}else{
								$blog_country_wp =  $blog_country_name_Code;
							}
							$this->blog_db       = $this->load->database('blog', TRUE);
							$blog_sql            = "SELECT  wp_postmeta.`meta_value` as country_name, wp_postmeta.post_id,post_title,post_name FROM `wp_postmeta`  JOIN wp_posts ON wp_posts.ID = wp_postmeta.post_id WHERE meta_key = 'countryname' AND wp_postmeta.`meta_value` ='".$blog_country_wp."'  AND wp_posts.post_type = 'post' AND wp_posts.post_status='publish' order by wp_postmeta.post_id desc"; 
							$blog_query          = $this->blog_db->query($blog_sql);
							$blog_result         = $blog_query->result();
							$countblog_result    = count($blog_result);
							if($countblog_result<5){
								$all_blog_num   = 5-$countblog_result;
								$allblog_sql    = "SELECT  wp_postmeta.`meta_value` as country_name, wp_postmeta.post_id,post_title,post_name FROM `wp_postmeta`  JOIN wp_posts ON wp_posts.ID = wp_postmeta.post_id WHERE meta_key = 'countryname'  AND wp_postmeta.`meta_value` ='ALL: NoCountrySpecified'  AND wp_posts.post_type = 'post' AND wp_posts.post_status='publish'"; 
								$allblog_query  = $this->blog_db->query($allblog_sql);
								$allblog_result = $allblog_query->result();
								$blogcount      = 1;
								// get only 5 blog
								if($countblog_result){
									for($i=0;$i<$countblog_result;$i++){
										echo '<div><span class="blog-count">'.$blogcount.'. </span><a class="blue_Anchor" href="'.base_url().'blog/'.$blog_result[$i]->post_name.'">'.$blog_result[$i]->post_title.'</a></div>';
										$blogcount++;
									}
								}
								
								// get all blog 
								if($all_blog_num){
									for($j=0;$j<$all_blog_num;$j++){
										echo '<div><span class="blog-count">'.$blogcount.'. </span><a class="blue_Anchor" href="'.base_url().'blog/'.$allblog_result[$j]->post_name.'">'.$allblog_result[$j]->post_title.'</a></div>';
										$blogcount++;
									}
								}
							
							}else{
								
								//get 5  blog only
								if($countblog_result){
									for($i=0;$i<$countblog_result;$i++){
										echo '<div><span class="blog-count">'.$blogcount.'. </span><a class="blue_Anchor" href="'.base_url().'blog/'.$blog_result[$i]->post_name.'">'.$blog_result[$i]->post_title.'</a></div>';
										$blogcount++;
									}	
								}
								
							}
						?>
						<a href="<?php echo base_url().'blog'; ?>" class="blog-read-more">Read More...</a>
					  </div>
					 </div>
					</div>
					<div class="col-sm-3 right_immg">
						<a href="https://www.redcross.ca/" target="_blank" rel="nofollow"><img src="<?php echo base_url(); ?>assets/front/image/plusimg1111111.jpg" alt="support" /></a>
						<p> For every international shipment, ShipByMail will donate $1 to the Canadian Red Cross to help where it is   needed most. </p>
					</div>
			  </div>
			</div>
		</div>
	</div>
	<!-- End footer widget -->
	<!-- <div class="holiday_sec">
		<h5> Our offices will be closed on Monday 8th Oct 2018 as we celebrate Thanks giving. We will resume our shipments on 9th Oct 2018.</h5>    
	</div> -->
	
	<!-- Copyright -->
	
	<div class="copyright">
		<div class="container">
			<div>2017-2019 ShipByMail.com All Rights Reserved | XML Sitemap</div>
		</div>
	</div>
	<div class="cookie_message_div" style="display: none;">
		<p class="">Our site uses cookies. By continuing to use our site you are agreeing to our  <a style="color:#fff;text-decoration: underline;" href="<?php echo base_url().'TermsConditions'; ?>">Cookie Policy</a>. <a href="javascript:void(0);" name="accept_cookie_consent_notice" id="accept_cookie_consent_notice" style="color:#1e9cd3;">OK, I understand</a>
	</div>
	<style>
	.cookie_message_div{
		background-color: rgba(20,20,20,0.8);
		min-height: 26px;
		font-size: 14px;
		color: #ccc;
		/*padding: 28px 0px 13px;*/
		position: fixed;
		left: 0;
		right: 0;
		display: none;
		z-index: 9999;
		bottom: 0px !important;
		text-align:center;
	}
	</style>
	<Script>
	$(window).on('load',function() {
		checkAceeptConsentNotice();
		$('#accept_cookie_consent_notice').click(function() {
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
	            type: "POST",
	            url: base_url + "dashboard/cookie_consent_notice",
	            dataType: "json",
	            data: {
	                currenturl    : currenturl,  
		         	http_referer  : http_referer,
		         	trackSession  : trackSession
	            },
	            success: function(res){
	            	if(res.error){
	            		alert('There is some  error. Please try again after some time.');
	            	}else{
	            		$('.cookie_message_div').css('display','none');
	            	}
	            },
	            error:function(){
	            	alert('There is some  error. Please try again after some time.');
	            }
	        });
	    }); 
	   
	});
	</Script>

	<!-- begin olark code -->
	<script>
		;(function(o, l, a, r, k, y) {
			if (o.olark)
				return;
			r = "script";
			y = l.createElement(r);
			r = l.getElementsByTagName(r)[0];
			y.async = 1;
			y.src = "//" + a;
			r.parentNode.insertBefore(y, r);
			y = o.olark = function() {
				k.s.push(arguments);
				k.t.push(+new Date)
			};
			y.extend = function(i, j) {
				y("extend", i, j)
			};
			y.identify = function(i) {
				y("identify", k.i = i)
			};
			y.configure = function(i, j) {
				y("configure", i, j);
				k.c[i] = j
			};
			k = y._ = {
				s : [],
				t : [+new Date],
				c : {},
				l : a
			};
		})(window, document, "static.olark.com/jsclient/loader.js");
		/* custom configuration goes here (www.olark.com/documentation) */
		olark.identify('7799-264-10-6877');
    </script>
	<!-- end olark code -->
	<!-- <script src="<?php echo base_url();?>assets/front/js/jquery.min.js"></script> -->
	<script src="<?php echo base_url();?>assets/front/js/bootstrap.min.js?v=<?php echo $file_version; ?>"></script>
	<script src="<?php echo base_url();?>assets/front/js/owl.carousel.min.js?v=<?php echo $file_version; ?>"></script>
	<script src="<?php echo base_url();?>assets/front/js/parallaxie.js?v=<?php echo $file_version; ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/datatable/js/dataTables.min.js?v=<?php echo $file_version; ?>"></script>
    <script src="<?php echo base_url(); ?>assets/datatable/js/dataTables.responsive.min.js?v=<?php echo $file_version; ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js?v=<?php echo $file_version; ?>"></script>
	<!-- Theme Script init() -->
	<script src="<?php echo base_url();?>assets/front/js/script.js?v=<?php echo $file_version; ?>"></script>
	<script src="<?php echo base_url();?>assets/multiselect/jquery.multiple.select.js?v=<?php echo $file_version; ?>"></script>
	
	<!-- End script -->
	</body>
</html>
