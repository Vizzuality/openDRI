			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="wrap cf">
					<div class="-ft-content">
						<div class="-ft-coorporate">
							<div class="-ft-logo">
								An initiative of <a href="https://www.gfdrr.org/" title="The Global Facility for Disaster Reduction and Recovery website" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/gfdrr-logo.png" alt="The Global Facility for Disaster Reduction and Recovery logo"></a>
							</div>
							<div class="-ft-newsletter">
								<span>Sign up for our newsletter:</span> 
								<form action="//vizzuality.us10.list-manage.com/subscribe/post?u=5450ec66874ec1182c96d7ec7&amp;id=70766ac561" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="your.email@here">
									<input type="text" name="b_5450ec66874ec1182c96d7ec7_70766ac561" tabindex="-1" value="" style="display:none">
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div> 
								</form>
							</div>
							<!-- Begin MailChimp Signup Form -->
							<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
							<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						</div>
						<nav>
							<a href="<?php echo home_url(); ?>/project" class="-i-link">projects</a>
							<a href="<?php echo home_url(); ?>/resource" class="-i-link">resources</a>
							<a href="<?php echo home_url(); ?>/about" class="-i-link">about</a>
							<a href="<?php echo home_url(); ?>/category/news" class="-i-link">news</a>
						</nav>
					</div>
					<p class="source-org copyright">
						<span class="hr"></span>
					</p>
					<nav class="-ft-legal">
						<span>&copy; <?php echo date('Y'); ?> Copyright Open DRI</span>
						<a href="<?php echo home_url(); ?>/privacy-policy">Privacy Policy</a>
					</nav>
				</div>
			</footer>
			<footer class="footer mobile" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="wrap cf">
					<div class="-ft-content">
						<div class="-ft-newsletter">
							<span>Sign up for our newsletter:</span> 
							<form action="//vizzuality.us10.list-manage.com/subscribe/post?u=5450ec66874ec1182c96d7ec7&amp;id=70766ac561" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="your.email@here">
								<input type="text" name="b_5450ec66874ec1182c96d7ec7_70766ac561" tabindex="-1" value="" style="display:none">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div> 
							</form>
						</div>
						<nav>
							<a href="<?php echo home_url(); ?>/project" class="-i-link">projects</a>
							<a href="<?php echo home_url(); ?>/resource" class="-i-link">resources</a>
							<a href="<?php echo home_url(); ?>/about" class="-i-link">about</a>
							<a href="<?php echo home_url(); ?>/category/news" class="-i-link">news</a>
						</nav>
						<div class="-ft-coorporate">
							<div class="-ft-logo">
								An initiative of <a href="https://www.gfdrr.org/" title="The Global Facility for Disaster Reduction and Recovery website" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/gfdrr-logo.png" alt="The Global Facility for Disaster Reduction and Recovery logo"></a>
							</div>
							<!-- Begin MailChimp Signup Form -->
							<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
							<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js"></script>
		<script type="text/javascript">
		// set current section if any
		var checkUrl = function() {
			if 		 (location.pathname.includes('/about')) document.getElementById('menu-option-about').classList.add("current");
			else if (document.body.classList.contains('single') && !(location.pathname.includes('/project')) && !(location.pathname.includes('/resource'))) document.getElementById('menu-option-news').classList.add("current");
			else if  (location.pathname.includes('/project')) document.getElementById('menu-option-projects').classList.add("current");
			else if  (location.pathname.includes('/news')) document.getElementById('menu-option-news').classList.add("current");
			else if  (location.pathname.includes('/pillars')){
			    document.getElementById('menu-option-news').classList.add("current");
				if (location.pathname.includes('/risk-visualization')) $('.option-pillar[data-option="risk"]').addClass('current');
				else if (location.pathname.includes('/community-mapping')) $('.option-pillar[data-option="community"]').addClass('current');
				else if (location.pathname.includes('/open-data-platforms')) $('.option-pillar[data-option="open"]').addClass('current');
			}
			else if  (location.pathname.includes('/regions')) {
				document.getElementById('menu-option-news').classList.add("current");
				if (location.pathname.includes('middle')) $('#toggle-filter-region').text('middle east and north africa');
				else if (location.pathname.includes('africa')) $('#toggle-filter-region').text('africa').addClass('current');
				else if (location.pathname.includes('pacific')) $('#toggle-filter-region').text('east asia pacific').addClass('current');
				else if (location.pathname.includes('europe')) $('#toggle-filter-region').text('europe and central asia').addClass('current');
				else if (location.pathname.includes('america')) $('#toggle-filter-region').text('latin america and caribbean').addClass('current');
				else if (location.pathname.includes('countries')) $('#toggle-filter-region').text('non wb countries').addClass('current');
				else if (location.pathname.includes('asia')) $('#toggle-filter-region').text('south asia').addClass('current');
			}
			else if  (location.pathname.includes('/resource')) document.getElementById('menu-option-resources').classList.add("current");
		}
		checkUrl();
		var setURLparams = function() {
			var params = new Array(2);
			params[0] = $('#pick-region').find('li.selected').data('option') || '';
			params[1] = $('#blue-bar-pick-pillar').find('.option-pillar.current').data('option') || '';
			
			var newlocation = location.pathname + '?mapregion='+ params[0] + '&mappilar=' + params[1];
			history.pushState('', window.document.title, newlocation);
		}
		</script>
		<script type="infowindow/html" id="infowindow_template">
		  <div class="cartodb-popup v2">
		    <a href="#close" class="cartodb-popup-close-button close">x</a>
		     <div class="cartodb-popup-content-wrapper">
		       <div class="cartodb-popup-header">
		         <h1>{{content.data.name}}</h1>
		       </div>
		       <div class="cartodb-popup-content">
		         <!-- content.data contains the field info -->
		         <p>{{content.data.description}}</p>
		         <p class="meta">{{content.data.country_name}} | {{content.data.pillar}}</p>
		     	<span class="popup-link-project"><a href="<? echo home_url(); ?>/project/{{content.data.url}}">VIEW PROJECT</a></span>
		       </div>
		     </div>
		     <div class="cartodb-popup-tip-container">
		     </div>
		  </div>
		</script>
		<script>
			var createLabelIcon = function(labelClass,labelText){
			  return L.divIcon({ 
			    className: labelClass,
			    html: labelText
			  })
			}

			var map;
			var currentSublayer,
				currentRegion = '',
				currentPillar = '',
				currentCountry = '',
				$filterPosts  = $('.type-project'),
				filterRegion  = '',
				filterPillar  = '';
		    function init(){
		    	if ($(window).width() <= 768 && $('body').hasClass('archive')) {
		    		$('.blue-bar-top').remove();
		    	} else {
		    		$('.blue-bar-top-m').remove();
		    	}
		    	if ($('#map').length == 0) return;
				if ( !!LAT_VIS && !!LONG_VIS ) {
					map = new L.Map('map', {
						continuousWorld: false,
						noWrap: true,
						center : [LAT_VIS,LONG_VIS],
						zoom: 5,
						zoomControl: false, 
			        	scrollWheelZoom: false,
					})
				} else {
					map = new L.Map('map', { 
					continuousWorld: false,
					noWrap: true,
			        center: [30,15],
			        zoom: ($(window).width() <= 768) ? 1 : 3,
			        minZoom: 2,
			        zoomControl: false,
			        scrollWheelZoom: false,
			        maxBounds: [
					        [-85.0, -180.0],
					        [85.0, 180.0]
					    ]
			      })
					L.control.zoom({
					    position:'topright'
					}).addTo(map);
				}
				var marker1,marker2,marker3,marker4,marker5,marker6,marker7 = null;
				var addMarkers = function() {
					<? 
						$postsInall = new WP_Query( array( 'post_type' => 'project', 'category_name' => 'non-wb-countries' ) );
						$postsInall = $postsInall->post_count;
					?>
					var postsInall = '<? echo $postsInall ?>';
					marker1 = L.marker(new L.LatLng(0, 0), {icon:createLabelIcon(((postsInall.length > 1) ? "amount-of-posts-2" : "amount-of-posts"),postsInall)}).addTo(map);

					<? 
						$postsInAfrica = new WP_Query( array( 'post_type' => 'project', 'category_name' => 'africa' ) );
						$postsInAfrica = $postsInAfrica->post_count;
					?>
					var postsInAfrica = '<? echo $postsInAfrica ?>';
					marker2 = L.marker(new L.LatLng(7, 21), {icon:createLabelIcon((postsInAfrica.length > 1) ? "amount-of-posts-2" : "amount-of-posts",postsInAfrica)}).addTo(map);

					<? 
						$postsIneastasia = new WP_Query( array( 'post_type' => 'project', 'category_name' => 'east-asia-pacific' ) );
						$postsIneastasia = $postsIneastasia->post_count;
					?>
					var postsIneastasia = '<? echo $postsIneastasia ?>';
					marker3 = L.marker(new L.LatLng(35, 103), {icon:createLabelIcon((postsIneastasia.length > 1) ? "amount-of-posts-2" : "amount-of-posts",postsIneastasia)}).addTo(map);

					<? 
						$postsInEurope = new WP_Query( array( 'post_type' => 'project', 'category_name' => 'europe-and-central-asia' ) );
						$postsInEurope = $postsInEurope->post_count;
					?>
					var postsInEurope = '<? echo $postsInEurope ?>';
					marker4 = L.marker(new L.LatLng(55, 25), {icon:createLabelIcon((postsInEurope.length > 1) ? "amount-of-posts-2" : "amount-of-posts",postsInEurope)}).addTo(map);

					<? 
						$postsInlatam = new WP_Query( array( 'post_type' => 'project', 'category_name' => 'latin-america-and-caribbean' ) );
						$postsInlatam = $postsInlatam->post_count;
					?>
					var postsInlatam = '<? echo $postsInlatam ?>';			
					marker5 = L.marker(new L.LatLng(13, -59), {icon:createLabelIcon((postsInlatam.length > 1) ? "amount-of-posts-2" : "amount-of-posts",postsInlatam)}).addTo(map);

					<? 
						$postsInmiddleeast = new WP_Query( array( 'post_type' => 'project', 'category_name' => 'middle-east-and-north-africa' ) );
						$postsInmiddleeast = $postsInmiddleeast->post_count;
					?>
					var postsInmiddleeast = '<? echo $postsInmiddleeast ?>';
					marker6 = L.marker(new L.LatLng(29, 41), {icon:createLabelIcon((postsInmiddleeast.length > 1) ? "amount-of-posts-2" : "amount-of-posts",postsInmiddleeast)}).addTo(map);

					<? 
						$postsInsouthasia = new WP_Query( array( 'post_type' => 'project', 'category_name' => 'south-asia' ) );
						$postsInsouthasia = $postsInsouthasia->post_count;
					?>
					var postsInsouthasia = '<? echo $postsInsouthasia ?>';			
					marker7 = L.marker(new L.LatLng(27, 72), {icon:createLabelIcon((postsInsouthasia.length > 1) ? "amount-of-posts-2" : "amount-of-posts","<? echo $postsInsouthasia; ?>")}).addTo(map);
				}
				var basemap = 'https://a.tiles.mapbox.com/v4/opendri.0ouhqxkv/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoib3BlbmRyaSIsImEiOiJjaWpvZjcwbTYwMHVldG9tNXlhajMwb2dyIn0.fWimK0QhrBpQVX5Zu2bWNg';
				if (window.matchMedia("(-webkit-device-pixel-ratio: 2)").matches) {
				  basemap = 'https://a.tiles.mapbox.com/v4/opendri.0ouhqxkv/{z}/{x}/{y}@2x.png?access_token=pk.eyJ1Ijoib3BlbmRyaSIsImEiOiJjaWpvZjcwbTYwMHVldG9tNXlhajMwb2dyIn0.fWimK0QhrBpQVX5Zu2bWNg';
				}
				L.tileLayer(basemap, { noWrap: true
				}).addTo(map);
				addMarkers();


				var query 		  = "SELECT * FROM wp_projects",
					queryTemplate = query + " WHERE region = ",
					queryTPillar  = query + " WHERE pillar like ",
					visible 	  = ' AND visible = true';
				var layerUrl = 'https://opendri.cartodb.com/api/v2/viz/0e130a1a-c068-11e5-a22c-0ecd1babdde5/viz.json';
				var sublayers = [];
				cartodb.createLayer(map, layerUrl)
				.addTo(map)
				.on('done', function(layer) {
				    // change the query for the first layer
				    var subLayerOptions = {
				      sql: (! !!POST_ID || isNaN(POST_ID)) ? "SELECT * FROM wp_projects where is_region = true" : "SELECT * FROM wp_projects where visible = true AND wp_post_id = "+ POST_ID,
				      cartocss: (! !!POST_ID || isNaN(POST_ID)) ? "#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 10;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 40;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}" : "#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}"
				    }

				    var sublayer = layer.getSubLayer(0);

				    sublayer.set(subLayerOptions);

				    sublayers.push(sublayer);
				    sublayer.infowindow.set('template', $('#infowindow_template').html());
				    sublayer.on('featureClick', function(e, latlng, pos, data, subLayerIndex) {
				    	changeIn_regions(data.cartodb_id);
				    });
					cartodb.createLayer(map, {
									user_name: 'opendri',
									type: 'cartodb',
									cartodb_logo: false,
									sublayers: [{
									  sql: "SELECT * FROM country_mask",
									  cartocss: ""
									}]
								})
					.addTo(map)
					.on('done',function(layer){
						sublayers.push(layer.getSubLayer(0));
					var checkUrlParams = function (){
						var params = location.search.split('&');
						if (params.length < 2) return;
						params[0] = params[0].split('=')[1]; //map region
						params[1] = params[1].split('=')[1]; //map pillar

						if (params[0]) $('#pick-region').find('li[data-option="' + params[0] +'"]').trigger('click');
						if (params[1]) $('#blue-bar-pick-pillar').find('.option-pillar[data-option="' + params[1] +'"]').trigger('click');
						}
					checkUrlParams();
					});
				  }).on('error', function() {
				    console.error('Error while loading map. Please check footer file')
				  });
				// end map
				var LayerActions = {
				  reload: function() {
				  	location = '<?php echo home_url(); ?>/project';
				  	return false;
				  },
				  all: function(){
				  	$filterPosts.show();
				  	currentPillar = currentRegion = '';
				    sublayers[0].setSQL("SELECT * FROM wp_projects where is_region = true");
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 10;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 40;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				   	sublayers[1].setSQL("SELECT * FROM country_mask");
					sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-opacity: 0;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    ");
				    return true;
				  },
				  country_given: function() {
				  	$('.amount-of-posts').hide();
				  	$('#current-total-post-count').text($target.length);
						var country = $('#pick-region input').val().charAt(0).toUpperCase() + $('#pick-region input').val().slice(1);
						currentCountry = country;
						$filterPosts.hide();
					  	var $target = $('#list-content').find("a[href*='"+ $('#pick-region input').val() +"']:visible");
					  	$target = $target.closest('article');
					  	$target.show();
			  		$('#current-total-post-count').text($target.length);

					if (currentPillar.length > 0)
						sublayers[0].setSQL('SELECT * FROM wp_projects where LOWER(country_name) like \'%' + country.toLowerCase() + '%\' AND pillar LIKE \'%' + currentPillar + '%\''+ visible);
					else
						sublayers[0].setSQL('SELECT * FROM wp_projects where LOWER(country_name) like \'%' + country.toLowerCase() + '%\' AND visible = true');
					sublayers[1].setSQL("SELECT * FROM country_mask");
			    	sublayers[1].setCartoCSS(
			    			"\
							    #country_mask {\
							      polygon-fill: #000;\
							      polygon-opacity: 0.2;\
							      line-color: #999;\
							      line-width: 0;\
							      line-opacity: 0;\
							    }\
							    #country_mask[name='" + country + "']{\
							      polygon-opacity: 0;\
							      line-color: #fff;\
							      line-width: 1;\
							      line-opacity: 0.4;\
							    }");
				  },
				  africa: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterPillar+'.type-project.category-africa');
				  	filterRegion = '.category-africa';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length);
				  	if (currentPillar.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE region = 'africa' AND pillar LIKE '%" + currentPillar + "%'"+ visible);
				    else 
					    sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE region = 'africa'" + visible);
				    currentRegion = "africa";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    sublayers[1].setSQL("SELECT * FROM country_mask");
				    sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='Angola'],\
								    #country_mask[name='Burundi'],\
								    #country_mask[name='Benin'],\
								    #country_mask[name='Burkina Faso'],\
								    #country_mask[name='Botswana'],\
								    #country_mask[name='Central African Rep.'],\
								    #country_mask[name='CÃ´te dâIvoire'],\
								    #country_mask[name='Cameroon'],\
								    #country_mask[name='Dem. Rep. Congo'],\
								    #country_mask[name='Comoros'],\
								    #country_mask[name='Congo'],\
								    #country_mask[name='Cabo Verde'],\
								    #country_mask[name='Algeria'],\
								    #country_mask[name='Djibouti'],\
								    #country_mask[name='Egypt'],\
								    #country_mask[name='Eritrea'],\
								    #country_mask[name='Ethiopia'],\
								    #country_mask[name='Gabon'],\
								    #country_mask[name='Ghana'],\
								    #country_mask[name='Guinea'],\
								    #country_mask[name='Eq. Guinea'],\
								    #country_mask[name='Gambia'],\
								    #country_mask[name='Guinea-Bissau'],\
								    #country_mask[name='Equatorial Guinea'],\
								    #country_mask[name='Kenya'],\
								    #country_mask[name='Libya'],\
								    #country_mask[name='Lesotho'],\
								    #country_mask[name='Liberia'],\
								    #country_mask[name='Morocco'],\
								    #country_mask[name='Madagascar'],\
								    #country_mask[name='Mali'],\
								    #country_mask[name='Mozambique'],\
								    #country_mask[name='Mauritania'],\
								    #country_mask[name='Mauritius'],\
								    #country_mask[name='Malawi'],\
								    #country_mask[name='Namibia'],\
								    #country_mask[name='Niger'],\
								    #country_mask[name='Nigeria'],\
								    #country_mask[name='Rwanda'],\
								    #country_mask[name='Sudan'],\
								    #country_mask[name='Senegal'],\
								    #country_mask[name='Sierra Leone'],\
								    #country_mask[name='Somalia'],\
								    #country_mask[name='Somaliland'],\
								    #country_mask[name='S. Sudan'],\
								    #country_mask[name='Swaziland'],\
								    #country_mask[name='Seychelles'],\
								    #country_mask[name='Chad'],\
								    #country_mask[name='Togo'],\
								    #country_mask[name='Tunisia'],\
								    #country_mask[name='Tanzania'],\
								    #country_mask[name='Uganda'],\
								    #country_mask[name='South Africa'],\
								    #country_mask[name='W. Sahara'],\
								    #country_mask[name='Zambia'],\
								    #country_mask[name='Zimbabwe']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
				    return true;
				  },
				  eastasia: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterPillar+'.type-project.category-east-asia-pacific');
				  	filterRegion = '.category-east-asia-pacific';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length);			  	
				  	if (currentPillar.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE region = 'eastasia' AND pillar LIKE '%" + currentPillar + "%'"+ visible);
				    else 
					    sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE region = 'eastasia'" + visible);
				    currentRegion = "eastasia";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    sublayers[1].setSQL("SELECT * FROM country_mask");
				    sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='Australia'],\
								    #country_mask[name='Brunei'],\
								    #country_mask[name='China'],\
								    #country_mask[name='Fiji'],\
								    #country_mask[name='Micronesia'],\
								    #country_mask[name='Guam'],\
								    #country_mask[name='Hong Kong'],\
								    #country_mask[name='Indonesia'],\
								    #country_mask[name='Japan'],\
								    #country_mask[name='Cambodia'],\
								    #country_mask[name='Kiribati'],\
								    #country_mask[name='Korea'],\
								    #country_mask[name='Laos'],\
								    #country_mask[name='Macao'],\
								    #country_mask[name='Myanmar'],\
								    #country_mask[name='Mongolia'],\
								    #country_mask[name='Malaysia'],\
								    #country_mask[name='New Caledonia'],\
								    #country_mask[name='New Zealand'],\
								    #country_mask[name='Philippines'],\
								    #country_mask[name='Palau'],\
								    #country_mask[name='Papua New Guinea'],\
								    #country_mask[name='French Polynesia'],\
								    #country_mask[name='Singapore'],\
								    #country_mask[name='Solomon Islands'],\
								    #country_mask[name='Thailand'],\
								    #country_mask[name='Timor-Leste'],\
								    #country_mask[name='Tonga'],\
								    #country_mask[name='Tuvalu'],\
								    #country_mask[name='Taiwan'],\
								    #country_mask[name='Vietnam'],\
								    #country_mask[name='Vanuatu'],\
								    #country_mask[name='Samoa']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
				    return true;
				  },
				  europe: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterPillar+'.type-project.category-europe-and-central-asia');
				  	filterRegion = '.category-europe-and-central-asia';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length);
				  	if (currentPillar.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE region = 'europe' AND pillar LIKE '%" + currentPillar + "%'"+ visible);
				    else 
					    sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE region = 'europe'" + visible);
				    currentRegion = "europe";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    sublayers[1].setSQL("SELECT * FROM country_mask");
				    sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='Albania'],\
								    #country_mask[name='Armenia'],\
								    #country_mask[name='Azerbaijan'],\
								    #country_mask[name='Bulgaria'],\
								    #country_mask[name='Bosnia and Herzegovina'],\
								    #country_mask[name='Belarus'],\
								    #country_mask[name='Czech Republic'],\
								    #country_mask[name='Estonia'],\
								    #country_mask[name='Georgia'],\
								    #country_mask[name='Croatia'],\
								    #country_mask[name='Hungary'],\
								    #country_mask[name='Kazakhstan'],\
								    #country_mask[name='Kyrgyz Republic'],\
								    #country_mask[name='Kosovo'],\
								    #country_mask[name='Lithuania'],\
								    #country_mask[name='Latvia'],\
								    #country_mask[name='Moldova'],\
								    #country_mask[name='Macedonia'],\
								    #country_mask[name='Malta'],\
								    #country_mask[name='Montenegro'],\
								    #country_mask[name='Poland'],\
								    #country_mask[name='Romania'],\
								    #country_mask[name='Russia'],\
								    #country_mask[name='Serbia'],\
								    #country_mask[name='Slovak Republic'],\
								    #country_mask[name='Slovenia'],\
								    #country_mask[name='Tajikistan'],\
								    #country_mask[name='Turkmenistan'],\
								    #country_mask[name='Turkey'],\
								    #country_mask[name='Ukraine'],\
								    #country_mask[name='Uzbekistan']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
				    return true;
				  },
				  latam: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterPillar+'.type-project.category-latin-america-and-caribbean');
				  	filterRegion = '.category-latin-america-and-caribbean';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length);
				  	if (currentPillar.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE region = 'latam' AND pillar LIKE '%" + currentPillar + "%'"+ visible);
				    else 
					    sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE region = 'latam'" + visible);
				    currentRegion = "latam";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    sublayers[1].setSQL("SELECT * FROM country_mask");
				    sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='Aruba'],\
								    #country_mask[name='Argentina'],\
								    #country_mask[name='Antigua and Barbuda'],\
								    #country_mask[name='Bahamas'],\
								    #country_mask[name='Belize'],\
								    #country_mask[name='Bolivia'],\
								    #country_mask[name='Brazil'],\
								    #country_mask[name='Barbados'],\
								    #country_mask[name='Chile'],\
								    #country_mask[name='Colombia'],\
								    #country_mask[name='Costa Rica'],\
								    #country_mask[name='Cuba'],\
								    #country_mask[name='Curacao'],\
								    #country_mask[name='Cayman'],\
								    #country_mask[name='Dominica'],\
								    #country_mask[name='Dominican Republic'],\
								    #country_mask[name='Ecuador'],\
								    #country_mask[name='Grenada'],\
								    #country_mask[name='Guatemala'],\
								    #country_mask[name='Honduras'],\
								    #country_mask[name='Haiti'],\
								    #country_mask[name='Jamaica'],\
								    #country_mask[name='Mexico'],\
								    #country_mask[name='Nicaragua'],\
								    #country_mask[name='Panama'],\
								    #country_mask[name='Peru'],\
								    #country_mask[name='Puerto Rico'],\
								    #country_mask[name='Paraguay'],\
								    #country_mask[name='El Salvador'],\
								    #country_mask[name='Suriname'],\
								    #country_mask[name='Trinidad and Tobago'],\
								    #country_mask[name='Uruguay'],\
								    #country_mask[name='Venezuela']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
				    return true;
				  },
				  middleeast: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterPillar+'.type-project.category-middle-east-and-north-africa');
				  	filterRegion = '.category-middle-east-and-north-africa';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length);			  	
				  	if (currentPillar.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE region = 'middleeast' AND pillar LIKE '%" + currentPillar + "%'"+ visible);
				    else 
					    sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE region = 'middleeast'" + visible);
				    currentRegion = "middleeast";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    sublayers[1].setSQL("SELECT * FROM country_mask");
				    sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='Afghanistan'],\
								    #country_mask[name='Saudi Arabia'],\
								    #country_mask[name='United Arab Emirates'],\
								    #country_mask[name='Bahrain'],\
								    #country_mask[name='Algeria'],\
								    #country_mask[name='Egypt'],\
								    #country_mask[name='Iran'],\
								    #country_mask[name='Iraq'],\
								    #country_mask[name='Jordan'],\
								    #country_mask[name='Kuwait'],\
								    #country_mask[name='Lebanon'],\
								    #country_mask[name='Libya'],\
								    #country_mask[name='Morocco'],\
								    #country_mask[name='Oman'],\
								    #country_mask[name='Qatar'],\
								    #country_mask[name='Pakistan'],\
								    #country_mask[name='Gaza'],\
								    #country_mask[name='Arabia'],\
								    #country_mask[name='Syria'],\
								    #country_mask[name='Tunisia'],\
								    #country_mask[name='Yemen']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
				    return true;
				  },			
				  nonwp: function(){
				  	if (currentPillar.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE region = 'nonwp' AND pillar LIKE '%" + currentPillar + "%'"+ visible);
				    else 
					    sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE region = 'nonwp'" + visible);
				    currentRegion = "nonwp";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				   	sublayers[1].setSQL("SELECT * FROM country_mask");
					sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-opacity: 0;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    ");
				    return true;
				  },	
				  southasia: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterPillar+'.type-project.category-south-asia');
				  	filterRegion = '.category-south-asia';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length); 	
				  	if (currentPillar.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE region = 'southasia' AND pillar LIKE '%" + currentPillar + "%'"+ visible);
				    else 
					    sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE region = 'southasia'" + visible);
				    currentRegion = "southasia";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    sublayers[1].setSQL("SELECT * FROM country_mask");
				    sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='Afghanistan'],\
								    #country_mask[name='Bangladesh'],\
								    #country_mask[name='Bhutan'],\
								    #country_mask[name='India'],\
								    #country_mask[name='Sri Lanka'],\
								    #country_mask[name='Maldives'],\
								    #country_mask[name='Nepal'],\
								    #country_mask[name='Pakistan']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
				    return true;
				  },
				  open: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterRegion+'.type-project.category-open-data-platforms');
				  	filterPillar = '.category-open-data-platforms';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length); 			  	
				  	if (currentRegion.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE pillar like '%open data platforms%' AND region = '" + currentRegion + "' "+ visible);
				    if (currentCountry.length > 0){
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE pillar like '%open data platforms%' AND LOWER(country_name) like %" + currentCountry.toLowerCase() + "% "+ visible);
				    }
				    else 
				    	sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE pillar like '%open data platforms%'" + visible);
				    currentPillar = "open data platforms";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    return true;
				  },
				  community: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterRegion+'.type-project.category-community-mapping');
				  	filterPillar = '.category-community-mapping';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length);
				  	if (currentRegion.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE pillar like '%community mapping%' AND region = '" + currentRegion + "' "+ visible);
				   	if (currentCountry.length > 0){
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE pillar like '%community mapping%' AND LOWER(country_name) like %" + currentCountry.toLowerCase() + "% "+ visible);
				    }
				    else 
				    	sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE pillar like '%community mapping%'" + visible);
				    currentPillar = "community mapping";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    return true;
				  },		
				  risk: function(){
				  	$filterPosts.hide();
				  	var $target = $filterPosts.parent().find(filterRegion+'.type-project.category-risk-visualization');
				  	filterPillar = '.category-risk-visualization';
				  	$target.show();
				  	$('#current-total-post-count').text($target.length);
				  	if (currentRegion.length > 0)
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE pillar like '%risk visualization%' AND region = '" + currentRegion + "' "+ visible);
					if (currentCountry.length > 0){
				    	sublayers[0].setSQL("SELECT * FROM wp_projects WHERE pillar like '%risk visualization%' AND LOWER(country_name) like %" + currentCountry.toLowerCase() + "% "+ visible);
				    }
				    else 
				    	sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE pillar like '%risk visualization%'" + visible);
				    currentPillar = "risk visualization";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    return true;
				  },
				}
				if (typeof jsonValues != 'undefined') jsonValues = JSON.parse(jsonValues);
				$('#pick-region').on('click', '.pickable', function(option) {
					if ($(option.target).hasClass('selected')) return false;
					removeMarkers();
					$('#blue-bar-m').removeClass('active');
					$(this).siblings().removeClass('selected');
					if (!! $(this).hasClass('selected')) {
						$('.amount-of-posts').show();
						var option 	= 'all';
						var latlong = [40,-98];
						var text 	= 'filter by region';
						var classe  = 'title';
						var title 	= 'Projects';
						var zoom 	= 2;
						var search 	= false;
						$filterPosts.show();
					} else {
						if (!! currentSublayer) currentSublayer.remove();
						$('.amount-of-posts').hide();
				    	$(this).addClass('selected');
				    	var option  = $(this).data('option');
				    	var latlong = [$(this).data('lat'), $(this).data('lng')];
				    	var text 	= $(this).text();
						var classe  = 'current';
						var prjsn	= (~~jsonValues[option] > 0)? ~~jsonValues[option] : 0;
						var title   = text + ': <span id="current-total-post-count">' + prjsn.toString() + '</span> projects';
						var zoom 	= $(this).data('zoom');
						var search 	= $(this).data('search');
						$filterPosts.hide();
					}
					$(this).parent().fadeOut();
					$('#toggle-filter-region').removeClass('title').addClass(classe).text(text);
					$('.page-title').html(title).css('text-transform','capitalize');
				    if (!!search) {
						sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='" + text + "']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
						$filterPosts.hide();
						var $target = $filterPosts.parent().find('.tag-'+text.replace(/\s+/g, '-').toLowerCase());
						$target.show();
						$('#current-total-post-count').text($target.length)
				    	map.setView(latlong,zoom);
				    } else {
				    	LayerActions[option]();
				    	setURLparams();
				    	$('.cartodb-infowindow').css('visibility','hidden').css('opacity','0');
				    	map.setView(latlong,zoom);
				    }
				});
				var removeMarkers = function() {				
					map.removeLayer(marker1);
					map.removeLayer(marker2);
					map.removeLayer(marker3);
					map.removeLayer(marker4);
					map.removeLayer(marker5);
					map.removeLayer(marker6);
					map.removeLayer(marker7);
				}
				$('#blue-bar-pick-pillar').on('click', 'span, li', function(e) {
					removeMarkers();
					$('#blue-bar-m').toggleClass('active');
					if ($(this).hasClass('current')) {
						$(this).removeClass('current');
						currentPillar = '';
						if ($('#pick-region').find('li.selected').length > 0){
							var option = $('#pick-region').find('li.selected').data('option');
						} else {
							var option = 'all';
							addMarkers();
						}
					} else {
						$(e.target).closest('span').addClass('current');
						$(this).siblings().removeClass('current');
						if ($(this).hasClass('option-pillar')) {					
							var option = $(this).data('option');
						} else {
							$(this).text('select:');
							var option = 'all';
						}
					}
					if (!!LayerActions[option]){
						LayerActions[option]();
					} else {
						LayerActions['country_given']();
					}
			    	setURLparams();
					$('.cartodb-infowindow').css('visibility','hidden').css('opacity','0');
				});
				$('#reset-map').on('click', function(e) {
					e.preventDefault();
					e.stopPropagation();
					location = '<?php echo home_url(); ?>/project';
				});
				$('#searchCountries').on('keyup', function() {
					var $region_filter = $('.region-filter').first();
					if ($(this).val().length < 1) {
						$('.amount-of-posts').show();
						sublayers[0].setSQL('SELECT * FROM wp_projects where is_region = true');
						sublayers[1].setSQL("SELECT * FROM country_mask");
						sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-opacity: 0;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    ");
						$region_filter.find('.pickable').remove();
						$region_filter.append('<li class="pickable" data-option="africa" data-lat="6.3152" data-lng="5.80" data-zoom="3">africa</li><li class="pickable" data-option="eastasia" data-lat="9.968" data-lng="118.3" data-zoom="3">east asia pacific</li><li class="pickable" data-option="europe" data-lat="64.32" data-lng="99.84" data-zoom="3">europe and central asia</li><li class="pickable" data-option="latam" data-lat="-10.314" data-lng="-68.027" data-zoom="3">latin america and caribbean</li><li class="pickable" data-option="middleeast" data-lat="30.75" data-lng="28.03" data-zoom="4">middle east and north africa</li><li class="pickable" data-option="nonwp" data-lat="0" data-lng="0" data-zoom="2">non wb countries</li><li class="pickable" data-option="southasia" data-lat="23.40" data-lng="77.08" data-zoom="4">south asia</li><li class="pickable clear-map" data-option="reload" data-lat="27" data-lng="72">Clear map</li>');
						$('#toggle-filter-region').addClass('title').text('filter by region');
					} else if( $(this).val().length > 3 ) {
						$('.amount-of-posts').hide();
						var country = $(this).val().charAt(0).toUpperCase() + $(this).val().slice(1);
						currentCountry = country;
						$filterPosts.hide();
					  	var $target = $('#list-content').find("a[href*='"+ $(this).val() +"']:visible");
					  	$target = $target.closest('article');
					  	$target.show();
				  		$('#current-total-post-count').text($target.length);
							sublayers[0].setSQL('SELECT * FROM wp_projects where LOWER(country_name) like \'%' + country.toLowerCase() + '%\' AND visible = true');
							sublayers[1].setSQL("SELECT * FROM country_mask");
					    	sublayers[1].setCartoCSS(
				    			"\
								    #country_mask {\
								      polygon-fill: #000;\
								      polygon-opacity: 0.2;\
								      line-color: #999;\
								      line-width: 0;\
								      line-opacity: 0;\
								    }\
								    #country_mask[name='" + country + "']{\
								      polygon-opacity: 0;\
								      line-color: #fff;\
								      line-width: 1;\
								      line-opacity: 0.4;\
								    }");
				    	$.get('https://opendri.cartodb.com/api/v2/sql?q=SELECT%20name,centroid%20FROM%20country_mask%20where%20LOWER(name)%20like%20%27%25'+ country.toLowerCase() +'%25%27%20', function(data){
				    		$('.region-filter').first().find('.pickable').remove();
				    		if (!!data.rows	> 0) {
								$region_filter.find('.pickable').remove();
				    			for (var i = 0; i < data.rows.length; i ++) {
									$region_filter.append("<li class='pickable' data-option='"+data.rows[i].name+"' data-lat='"+JSON.parse(data.rows[i].centroid).coordinates[1]+"' data-lng='"+JSON.parse(data.rows[i].centroid).coordinates[0]+"' data-search='true' data-zoom='5'>"+data.rows[i].name+"</li>");
				    			}
				    			$region_filter.append('<li class="pickable clear-map" data-option="reload" data-lat="27" data-lng="72">Clear map</li>');
				    		}
				    	});
					}
				})
				var changeIn_regions = function(id) {
					if (id < 31 || id > 37) return false;
					$('.cartodb-infowindow').hide();
					var $regions = $('#pick-region');
					if (id === 31) $regions.find('[data-option="africa"]').trigger('click');
					else if (id === 32) $regions.find('[data-option="eastasia"]').trigger('click');
					else if (id === 33) $regions.find('[data-option="europe"]').trigger('click');
					else if (id === 34) $regions.find('[data-option="latam"]').trigger('click');
					else if (id === 35) $regions.find('[data-option="middleeast"]').trigger('click');
					else if (id === 36) $regions.find('[data-option="all"]').trigger('click');
					else $regions.find('[data-option="southasia"]').trigger('click');
					return false;
				};
			}
			window.onload = function() {
				init();
			};

			// Twitter
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			window.setTimeout(
			function(){
				var target = $(".twitter-timeline");
			  	target.css('height','650px');
			  	target.contents().find('.stream').attr("style", "overflow-y: visible !important; height: 100%");
			  	target.contents().find('.timeline-header').remove();
			  	target.contents().find('.timeline-footer').remove();
			  	target.contents().find('.timeline').css('border','none');
			},2500);
		</script>
		<?php wp_footer(); ?>
		<script type="text/javascript">
			var $input     = $('#searchODRI'),
				$s_input   = $('.search-input'),
				$i_input   = $s_input.find('.search-open-dri'),
				$im_input  = $s_input.find('img');
			
			$s_input.on('click', function(e) {
			    e.preventDefault();
			    e.stopPropagation();
			    $input.addClass('visible').focus();
			    $i_input.addClass('visible');
			    $s_input.addClass('float-center');
			    $im_input.hide();
			    if ($(window).width() < 768) {
			    	$('#menu-option-projects').hide();
			    	$('#menu-option-resources').hide();
			    	$('#menu-option-about').hide();
			    	$('#menu-option-news').hide();
			    }
			    $(document).one('click', function closeMenu (e){
			        if($s_input.has(e.target).length === 0){
			             $input.removeClass('visible');
			             $i_input.removeClass('visible');
			    		 $s_input.removeClass('float-center');
			             $im_input.show();
			        } else {
			            $(document).one('click', closeMenu);
			        }
				    if ($(window).width() < 768) {
				    	$('#menu-option-projects').show();
				    	$('#menu-option-resources').show();
				    	$('#menu-option-about').show();
				    	$('#menu-option-news').show();
				    }
			    });
			}).on('keyup', function(e){
				if(e.keyCode == 13)
			    	location = '<?php echo home_url(); ?>' + '?s=' + $input.val();
			});
			$i_input.on('click', function(){
				location = '<?php echo home_url(); ?>' + '?s=' + $input.val();
			})

			var $bar = $('#blue-bar');
			if ($bar.hasClass('about')) {			
				var top_principles = $("#principles").offset().top || null,
					top_contact	   = $('#contact').offset().top,
					top_more	   = $('#more-content').offset().top,
					top_partners   = $('#partners').offset().top,
					top_members	   = $('#members').offset().top;
			}
			$(document).scroll(function() {
				var scroll = $(this).scrollTop();
				if (scroll > 80) {
					$bar.addClass("fixed");
				} else {
					$bar.removeClass("fixed");
				}
				if (!! top_principles) {
					var tab_option = 5;
					scroll += 80;
					if (scroll > top_principles) tab_option = 0;
					if (scroll > top_contact) 	 tab_option = 1;
					if (scroll > top_more) 	 	 tab_option = 2;
					if (scroll > top_partners) 	 tab_option = 3;
					if (scroll > top_members) 	 tab_option = 4;

					if (tab_option < 5) {
						$bar.find('.current').removeClass('current');
						$bar.find('.wrapper span')[tab_option].classList.add("current");
					}
				}
			});
			$('#toggle-filter-region').on('click', function(e){
				$bar.find('.region-filter').toggle();
			});
			$('#blue-bar-m').on('click', 'h2', function(){
				$(this).parent().toggleClass('active');
			});
			$(document).on('click',function(e) {
				if ($(e.target).is('#toggle-filter-region') ||
					$(e.target).parent().hasClass('region-filter') ||
					$(e.target).parent().parent().hasClass('region-filter')) {
					return;}
				if ($('#pick-region').is(':visible') && $(window).width() > 768) {
					$('#pick-region').hide();}
			});
		</script>
		<script type="text/javascript">
		if ($(window).width() > 1024) {
			if (!$('body').hasClass('single') && location.pathname.includes('/project') && ($('article').length + 1 ) % 3 == 2) {
				$('#content article').last().after('<article class="index-row article project" style="visibility:hidden"> </article>');
			}else if ($('body').hasClass('single') && ($('#more-content article').length) % 2 == 0) {
				$('#more-content article').last().after('<article class="index-row article project" style="visibility:hidden"> </article>');
			}else if ($('body').hasClass('archive') && ($('article').length) % 2 == 0) {
				$('article').last().after('<article class="index-row article project" style="visibility:hidden"> </article>');
			}
		}
		if ($('body').hasClass('archive') && ($('#blue-bar-pick-pillar').find('.current').length > 0 || $('.container-region-filter').find('.current').length > 0)) {
			$('#blue-bar-pick-pillar').on('click', 'span', function(e) {
				if ($('.container-region-filter').find('.current').length > 0){
					e.stopPropagation();
					e.preventDefault();
					location = '<?php echo home_url(); ?>' + '/category/pillars/' + $(e.target).text().replace(/\s+/g, '-') + '+/regions/' + $('.container-region-filter').find('.current').text().replace(/\s+/g, '-');
				}
			});
			$('.container-region-filter').on('click', 'li', function(e) {
				if ($('#blue-bar-pick-pillar').find('.current').length > 0) {
					e.stopPropagation();
					e.preventDefault()
					location = '<?php echo home_url(); ?>' + '/category/pillars/' + $('#blue-bar-pick-pillar').find('.current a').text().replace(/\s+/g, '-') + '+/regions/' + $(e.target).text().replace(/\s+/g, '-');
				}
			});
		}
		if (location.pathname.includes('+/regions')) {
			$('.container-region-filter').find('span').addClass('current').text(location.pathname.split("/")[location.pathname.split("/").length -2].replace(/-/g,' '));
			$('h1.page-title').text($('h1.page-title').text( ) + ' and ' + $('#blue-bar-pick-pillar').find('.option-pillar.current').text().replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }))
		}
		</script>
	</body>

</html> <!-- end of site. what a ride! -->