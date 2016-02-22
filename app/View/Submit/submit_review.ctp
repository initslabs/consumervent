<?php
$radioAttributes = array(
		  'class' => '',
		  'label' => false,
		  'type' => 'radio',
		  'legend' => false,
		  'before' => '<div class="radio"><label>',
		  'after' => '</label></div>',
		  'separator' => '</label></div><div class="radio"><label>',
		  'required'
);
?>
<style>
	 #map {
		  height: 300px;
		  width:100%;
	 }


	 #SubmissionPlaceName,#SubmissionPlaceWebsite {
		  background-color: #fff;
		  font-family: Roboto;
		  font-size: 15px;
		  font-weight: 300;
		  padding: 0 11px 0 13px;
		  text-overflow: ellipsis;
		  width: 100%;
	 }

	 #SubmissionPlaceName:focus {
		  border-color: #4d90fe;
	 }

	 .pac-container {
		  font-family: Roboto;
	 }

	 #type-selector {
		  color: #fff;
		  background-color: #4d90fe;
		  padding: 5px 11px 0px 11px;
	 }

	 #type-selector label {
		  font-family: Roboto;
		  font-size: 13px;
		  font-weight: 300;
	 }

	 .lmargin-label label
	 {
		  padding-left:6px;
		  font-weight:normal;
	 }

</style>

<div>
	<div>
		<div>
			<div class="parallax-window"
				 data-parallax="scroll"
				 data-bleed="10"
				 data-position="top"
				 data-speed="0.2"
				 data-image-src="<?php echo Router::url('/', true) ?>img/background3.png"></div>
			<div class="header-content" style="    width: 80%;    padding: 102px 0px 0;">
				<h1 class="h1"> Company/Service Information </h1>
			</div>

			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

			</div>
			<div style="clear: both"></div>

		</div>
	</div>
</div>

<div class="container">
	 <h2>Submit Review</h2>
	 <?php echo $this->Form->create('Submission'); ?>

	 <div class="row">
		  <div class="col-md-7">
			    &nbsp;
				<?php echo $this->Form->input('place_name', ['class' => 'form-control', 'label' => 'Name of Service / Establishment & Location', 'type' => 'text', 'placeholder' => "Enter the name of the establishment and location", 'required', 'autocomplete' => "off", 'readonly']); ?>
				&nbsp;
				<?php echo $this->Form->input('place_website', ['class' => 'form-control', 'label' => 'Website of Establishment/Service/Product', 'type' => 'text', 'placeholder' => "Enter the website of the establishment if you know it", 'autocomplete' => "off"]); ?>
				<?php echo $this->Form->hidden('place_details', ['class' => 'form-control', 'label' => false]); ?>
				<hr />
				<h3>Review</h3>
				<?php
				echo $this->Form->label('recommendation_level', 'How likely are you to recommend this business to a friend, family member, neighbor or colleague?');
				echo $this->Form->select('recommendation_level', $recommendationLevels, ['class' => 'form-control', 'required']);
				?>
				<p>&nbsp;</p>

				<div>
					 <?php
					 echo $this->Form->label('experience_type_id', 'How would you rate your experience with this business or service?');


					 $radioAttributes['options'] = $experienceTypes;
					 echo $this->Form->input('experience_type_id', $radioAttributes);
					 ?>
				</div>
				<p>&nbsp;</p>
				<label>Do you have issues with the service/business you want to report?
					 <Br />
					 <small>Select as many as apply</small></label>
				<?php echo $this->Form->select('service_problems', $issueTypes, ['type' => 'select', 'multiple' => 'checkbox', 'class' => 'lmargin-label']); ?>
				<p>&nbsp;</p>
				<?php echo $this->Form->label('user_company_contacted', 'Have you contacted the company before on this issue?'); ?>
				<?php
				$radioAttributes['options'] = [1 => 'Yes', 0 => 'No'];
				$radioAttributes['default'] = 0;
				echo $this->Form->input('user_company_contacted', $radioAttributes);
				?>				
				<p>&nbsp;</p>
				<?php echo $this->Form->input('review', ['required', 'type' => 'textarea', 'class' => 'form-control', 'label' => 'Write your complaint or review']); ?>

				<p>&nbsp;</p>
				<?php echo $this->Form->submit('Next', ['class' => 'btn btn-lg btn-primary next-btn']); ?>
		  </div>
<!--		  <div class="col-md-1"></div>-->
		  <div class="col-md-5">
				<p>&nbsp;</p>

				<div id="map" class="invisible"></div>
		  </div>
	 </div>
	 <?php echo $this->Form->end(); ?>
	<br>
	<br>
	<br>
	<br>
</div>
<script>
   // This example requires the Places library. Include the libraries=places
   // parameter when you first load the API. For example:
   // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

   function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
                   center: {lat: -33.8688, lng: 151.2195},
                   zoom: 13
           });
           var input = /** @type {!HTMLInputElement} */(
                   document.getElementById('SubmissionPlaceName'));

//						 var types = document.getElementById('type-selector');
//						 map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
//						 map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);
	
           var autocomplete = new google.maps.places.Autocomplete(input);
           autocomplete.bindTo('bounds', map);
           autocomplete.setTypes(['establishment']);
           var infowindow = new google.maps.InfoWindow();
           var marker = new google.maps.Marker({
                   map: map,
                   anchorPoint: new google.maps.Point(0, -29)
           });
           $('#SubmissionPlaceName').change(function () {
                   $('#SubmissionPlaceWebsite').val("");
						 $('#map').addClass('invisible');
           });

           autocomplete.addListener('place_changed', function () {
                   infowindow.close();
                   marker.setVisible(false);
                   var place = autocomplete.getPlace();
                   if (!place.geometry) {
                           window.alert("Autocomplete's returned place contains no geometry");
                           return;
                   }

                   // If the place has a geometry, then present it on a map.
                   if (place.geometry.viewport) {
                           map.fitBounds(place.geometry.viewport);
                   } else {
                           map.setCenter(place.geometry.location);
                           map.setZoom(17);  // Why 17? Because it looks good.
                   }
                   console.log('place', place);
                   marker.setIcon(/** @type {google.maps.Icon} */({
                           url: place.icon,
                           size: new google.maps.Size(71, 71),
                           origin: new google.maps.Point(0, 0),
                           anchor: new google.maps.Point(17, 34),
                           scaledSize: new google.maps.Size(35, 35)
                   }));
                   marker.setPosition(place.geometry.location);
                   marker.setVisible(true);

                   var address = '';
                   if (place.address_components) {
                           address = [
                                   (place.address_components[0] && place.address_components[0].short_name || ''),
                                   (place.address_components[1] && place.address_components[1].short_name || ''),
                                   (place.address_components[2] && place.address_components[2].short_name || '')
                           ].join(' ');
                   }
//						$('#SubmissionPlaceName').val("asdasd");
//This is illegal in all sorts of ways,but I'm using it like this in the interest of time :)
                   $('#SubmissionPlaceDetails').val(JSON.stringify(place));
                   if (typeof (place.website) !== 'undefined') {
                           $('#SubmissionPlaceWebsite').val(place.website);
                   }
                   infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                   infowindow.open(map, marker);
		
		$('#map').removeClass('invisible');
           });

           // Sets a listener on a radio button to change the filter type on Places
           // Autocomplete.
    $('#SubmissionPlaceName').removeAttr('readonly');       
   }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo CFG_GOOGLE_API_KEY; ?>&libraries=places&callback=initMap"
async defer></script>