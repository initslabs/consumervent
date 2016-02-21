
<style>
	 #map {
		  height: 500px;
		  width:100%;
	 }


	 #SubmissionPlaceName {
		  background-color: #fff;
		  font-family: Roboto;
		  font-size: 15px;
		  font-weight: 300;
		  margin-left: 12px;
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

</style>
<div class="row">
	 <div class="col-md-6">
		  <?php echo $this->Form->create('Submission'); ?>
		  <?php echo $this->Form->input('place_name',['class'=>'form-control controls','label'=>false,'type'=>'text','placeholder'=>"Enter the name of the establishment and location", 'required','autocomplete'=>"off",'readonly']); ?>
		  <?php echo $this->Form->hidden('place_details',['class'=>'form-control','label'=>false]); ?>
		  
		  
		  <?php echo $this->Form->submit('Next',['class'=>'btn btn-primary']); ?>
		  <?php echo $this->Form->end(); ?>
	 </div>
	 <div class="col-md-6">

		  <div id="map"></div>
	 </div>
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
						 console.log('place',place);
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
						$('#place-details').val(JSON.stringify(place));
						 infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
						 infowindow.open(map, marker);
			  });

			  // Sets a listener on a radio button to change the filter type on Places
			  // Autocomplete.
$('#SubmissionPlaceName').removeAttr('readonly');
	}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo CFG_GOOGLE_API_KEY; ?>&libraries=places&callback=initMap"
async defer></script>
</body>
</html>