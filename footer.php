			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="wrap cf">
					<div class="-ft-content">
						<div class="-ft-coorporate">
							<div class="-ft-logo">
								An initiative of <a href="https://www.gfdrr.org/" title="The Global Facility for Disaster Reduction and Recovery website"><img src="<?php echo get_template_directory_uri(); ?>/gfdrr-logo.png" alt="The Global Facility for Disaster Reduction and Recovery logo"></a>
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

		</div>

		<script src="http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js"></script>
		<script type="text/javascript">
		// set current section if any
		var checkUrl = function() {
			if 		 (location.pathname.includes('/about')) document.getElementById('menu-option-about').classList.add("current");
			else if  (location.pathname.includes('/project')) document.getElementById('menu-option-projects').classList.add("current");
			else if  (location.pathname.includes('/news')) document.getElementById('menu-option-news').classList.add("current");
			else if  (location.pathname.includes('/resource')) document.getElementById('menu-option-resources').classList.add("current");
		}
		checkUrl();
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
				$filterPosts  = $('.type-project'),
				filterRegion  = '',
				filterPillar  = '';
		    function init(){
		    	if ($('#map').length == 0) return;
				if ( !!LAT_VIS && !!LONG_VIS ) {
					map = new L.Map('map', {
						center : [LAT_VIS,LONG_VIS],
						zoom: 5,
						zoomControl: false,
						scrollWheelZoom: false,
						dragging: false
					})
				} else {
					map = new L.Map('map', { 
			        center: [20,0],
			        zoom: 2,
			        zoomControl: false,
			        scrollWheelZoom: false
			      })
					L.control.zoom({
					    position:'topright'
					}).addTo(map);
				}
				var basemap = 'https://a.tiles.mapbox.com/v4/opendri.0ouhqxkv/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoib3BlbmRyaSIsImEiOiJjaWpvZjcwbTYwMHVldG9tNXlhajMwb2dyIn0.fWimK0QhrBpQVX5Zu2bWNg';
				if (window.matchMedia("(-webkit-device-pixel-ratio: 2)").matches) {
				  basemap = 'https://a.tiles.mapbox.com/v4/opendri.0ouhqxkv/{z}/{x}/{y}@2x.png?access_token=pk.eyJ1Ijoib3BlbmRyaSIsImEiOiJjaWpvZjcwbTYwMHVldG9tNXlhajMwb2dyIn0.fWimK0QhrBpQVX5Zu2bWNg';
				}
				L.tileLayer(basemap, {
				}).addTo(map);
				<? 
					$postsInall = get_term_by('slug','non-wb-countries','category');
					$postsInall = $postsInall->count;
				?>
				var postsInall = '<? echo $postsInall ?>';
				L.marker(new L.LatLng(0, 0), {icon:createLabelIcon("amount-of-posts",postsInall)}).addTo(map);

				<? 
					$postsInAfrica = get_term_by('slug','africa','category');
					$postsInAfrica = $postsInAfrica->count;
				?>
				var postsInAfrica = '<? echo $postsInAfrica ?>';
				L.marker(new L.LatLng(7, 21), {icon:createLabelIcon("amount-of-posts",postsInAfrica)}).addTo(map);

				<? 
					$postsIneastasia = get_term_by('slug','east-asia-pacific','category');
					$postsIneastasia = $postsIneastasia->count;
				?>
				var postsIneastasia = '<? echo $postsIneastasia ?>';
				L.marker(new L.LatLng(35, 103), {icon:createLabelIcon("amount-of-posts",postsIneastasia)}).addTo(map);

				<? 
					$postsInEurope = get_term_by('slug','europe-and-central-asia','category');
					$postsInEurope = $postsInEurope->count;
				?>
				var postsInEurope = '<? echo $postsInEurope ?>';
				L.marker(new L.LatLng(55, 25), {icon:createLabelIcon("amount-of-posts",postsInEurope)}).addTo(map);

				<? 
					$postsInlatam = get_term_by('slug','latin-america-and-caribbean','category');
					$postsInlatam = $postsInlatam->count;
				?>
				var postsInlatam = '<? echo $postsInlatam ?>';			
				L.marker(new L.LatLng(13, -59), {icon:createLabelIcon("amount-of-posts",postsInlatam)}).addTo(map);

				<? 
					$postsInmiddleeast = get_term_by('slug','middle-east-and-north-africa','category','category');
					$postsInmiddleeast = $postsInmiddleeast->count;
				?>
				var postsInmiddleeast = '<? echo $postsInmiddleeast ?>';
				L.marker(new L.LatLng(29, 41), {icon:createLabelIcon("amount-of-posts",postsInmiddleeast)}).addTo(map);

				<? 
					$postsInsouthasia = get_term_by('slug','south-asia','category','category');
					$postsInsouthasia = $postsInsouthasia->count;
				?>
				var postsInsouthasia = '<? echo $postsInsouthasia ?>';			
				L.marker(new L.LatLng(27, 72), {icon:createLabelIcon("amount-of-posts","<? echo $postsInsouthasia; ?>")}).addTo(map);
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
				      cartocss: (! !!POST_ID || isNaN(POST_ID)) ? "#wp_projects{  marker-fill-opacity: 1;  marker-line-color: #FFF;  marker-line-width: 10;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 40;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}" : "#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}"
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
					});
				  }).on('error', function() {
				    console.error('Error while loading map. Please check footer file')
				  });
				// end map
				var LayerActions = {
				  reload: function() {
				  	location.reload();
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
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    else 
				    	sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE pillar like '%open data platforms%'" + visible);
				    currentPillar = "open data platforms";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    else 
				    	sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE pillar like '%community mapping%'" + visible);
				    currentPillar = "community mapping";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
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
				    else 
				    	sublayers[0].setSQL( "SELECT * FROM wp_projects WHERE pillar like '%risk visualization%'" + visible);
				    currentPillar = "risk visualization";
				    sublayers[0].setCartoCSS("#wp_projects{  marker-fill-opacity: 0.9;  marker-line-color: #FFF;  marker-line-width: 2;  marker-line-opacity: 1;  marker-placement: point;  marker-type: ellipse;  marker-width: 10;  marker-fill: #FFFFFF;  marker-allow-overlap: true;}");
				    return true;
				  },
				}
				if (typeof jsonValues != 'undefined') jsonValues = JSON.parse(jsonValues);
				$('#pick-region').on('click', '.pickable', function(option) {
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
						var classe  = '';
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
				    	map.setView(latlong,zoom);
				    } else {
				    	LayerActions[option]();
				    	map.setView(latlong,zoom);
				    }
				});
				$('#blue-bar-pick-pillar').on('click', 'span', function(e) {
					if ($(this).hasClass('current')) {
						$(this).removeClass('current');
						var option = 'all';
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
					LayerActions[option]();
				});
				$('#reset-map').on('click', function(){
					location.reload();
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
			  $(".twitter-timeline").contents().find('.stream').attr("style", "overflow-y: visible !important; height: 100%");
			},5000);
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
			    $im_input.hide();
			    $
			    $(document).one('click', function closeMenu (e){
			        if($s_input.has(e.target).length === 0){
			             $input.removeClass('visible');
			             $i_input.removeClass('visible');
			             $im_input.show();
			        } else {
			            $(document).one('click', closeMenu);
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
		</script>

	</body>

</html> <!-- end of site. what a ride! -->
