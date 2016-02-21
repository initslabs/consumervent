<div>
    <div>
        <div>
            <div class="parallax-window"
                 data-parallax="scroll"
                 data-bleed="10"
                 data-position="top"
                 data-speed="0.2"
                 data-image-src="<?php echo Router::url('/', true) ?>img/background.png"></div>
            <div class="header-content">
                <h1> Get Your Voice Heard </h1>
                <p>Conveniently engage cross functional internal or "organic" sources without virtual testing procedures. Appropriately actualize dynamic infrastructures.</p>
<!--                <a class="btn color-1 size-1 hover-1" ><i class="fa fa-facebook"></i>sign up via facebook</a>-->
<!--                <a class="be-register btn color-3 size-1 hover-6"><i class="fa fa-lock"></i>sign up now</a>-->
            </div>

            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					 <?php echo $this->Form->create('Submission',['class'=>'animated fadeInDown','url'=>'/Submit/submitReview']); ?>
                    <div class="input-group">
								


								<?php echo $this->Form->hidden('source',['value'=>'home']); ?>
								<?php echo $this->Form->hidden('place_website'); ?>
								<?php echo $this->Form->hidden('place_details'); ?>

								<?php echo $this->Form->input('place_name', ['class' => 'btn btn-lg', 'label' => false, 'type' => 'text', 'placeholder' => "Enter the name of the establishment and location", 'required', 'autocomplete' => "off", 'div' => false]); ?>


                        <button class="btn btn-info btn-lg" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
		<?php echo $this->Form->end(); ?>			
                <div>
                    <p class="pull-right" style="font-weight: 600;font-size: 14px;">
                        <a href="<?php echo $this->Html->url('/Submit'); ?>" style="color: #fff;">Browse Submissions </a> | 
                        <a href="#" style="color: #fff;">Company/Organization Name Not Listed? </a>
                    </p>
                    <div style="clear: both"></div>
                </div>
                <br>
                <br>
            </div>
            <div style="clear: both"></div>

        </div>
    </div>
</div>


<div class="actions">
	 <div class="container">
		  <div class="uk-width-large-1-1">
				<div class="text-center">
					 <div id="counter">
						  <ul>
								<li>
									 <p class="animated fadeInDown">
										  <span class="timer">86</span>
										  <small>compliances</small>
									 </p>
								</li>
								<li>
									 <p class="animated fadeInDown">
										  <span class="timer">234</span>
										  <small>Followers</small>
									 </p>
								</li>
								<li>
									 <p class="animated fadeInDown">
										  <span class="timer">86</span>
										  <small>Responses</small>
									 </p>
								</li>
						  </ul>
					 </div>
				</div>
		  </div>
	 </div>

	 <script>
       // This example requires the Places library. Include the libraries=places
       // parameter when you first load the API. For example:
       // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

       function initMap() {
               var input = /** @type {!HTMLInputElement} */(
                       document.getElementById('SubmissionPlaceName'));

//						 var types = document.getElementById('type-selector');
//						 map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
//						 map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

               var autocomplete = new google.maps.places.Autocomplete(input);
               autocomplete.setTypes(['establishment']);

               autocomplete.addListener('place_changed', function () {
                       var place = autocomplete.getPlace();
                       if (!place.geometry) {
//                           window.alert("Autocomplete's returned place contains no geometry");
                               return;
                       }

                       // If the place has a geometry, then present it on a map.
                       console.log('place', place);

                       var address = '';
                       $('#SubmissionPlaceDetails').val(JSON.stringify(place));
                       if (typeof (place.website) !== 'undefined') {
                               $('#SubmissionPlaceWebsite').val(place.website);
                       }
               });

               // Sets a listener on a radio button to change the filter type on Places
               // Autocomplete.
       }

	 </script>
	 <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo CFG_GOOGLE_API_KEY; ?>&libraries=places&callback=initMap"
	 async defer></script>
