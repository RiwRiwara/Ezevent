<x-app-layout>


  <x-slot name="title">
    {{__('page.create_event')}}
  </x-slot>

  <x-slot name="header">
    <div class="flex justify-center">
      <x-breadcrumb :items="$page_data['breadcrumbItems']" />
    </div>
  </x-slot>

  <div hidden id="prepare_type">

  </div>


  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <form action="" id="create-form" method="POST" class="container px-10 mx-auto pt-8">
      @csrf

      <div class="  ">

        <h1 class="text-2xl text-center font-bold mb-4 mt-2 text-neutral-8">
          {{__('event.create_event')}}
        </h1>

        <div class=" p-3 rounded-lg my-5 border-2 border-gray-1">
          <div class="my-2">
            <x-forms.input-outline-primary name="event_name" label="{{__('event.event_name')}}" type="text" require />
          </div>

          <div class="flex flex-col gap-4 my-3">

            <?php //Type selected 
            ?>
            <div class="flex flex-row gap-4">
              <div>

                <x-button.btn-common type="button" data-modal-target="type-modal" data-modal-toggle="type-modal">
                  {{__('event.add_type')}}
                </x-button.btn-common>


                <div id="type-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative px-4 py-2 w-full max-w-2xl max-h-full bg-white rounded-md">
                    <div class=" flex items-center justify-between p-2 md:p-3 border-b rounded-t dark:border-gray-600 bg-neutral-0 my-4">
                      <h3 class=" text-2xl px-2 py-1 rounded-md font-semibold text-neutral-9 dark:text-white text-center">
                        เลือกประเภทกิจกรรม
                      </h3>

                      <button type="button" class=" text-gray-400  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="type-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                      </button>
                    </div>

                    <div class="flex flex-col gap-3 ">
                      @foreach ($page_data['event_types'] as $event_type)
                      <x-forms.checkbox group="type_select" id="{{$event_type->id}}" icon="{{$event_type->icon}}" name="type_{{$event_type->id}}" label="{{ app()->getLocale() === 'en' ? $event_type->name_en : $event_type->name_th }}" />
                      @endforeach
                    </div>

                  </div>
                </div>
              </div>


            </div>


          </div>
        </div>

        <div class=" p-3 rounded-lg my-5 border-2 border-gray-1" x-data="{ selectedTime: 'specific' }">
          <h1 class="text-lg font-bold text-neutral-9 mb-3">{{__('event.datetime')}}</h1>

          <input type="text" hidden name="event_time" x-model="selectedTime">
          <div class="inline-flex rounded-md gap-4" role="group">
            <button type="button" @click="selectedTime = 'specific'" :class="{ 'bg-neutral-5': selectedTime === 'specific', 'bg-neutral-2': selectedTime !== 'specific' }" class="text-md font-semibold px-4 py-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50">
              {{__('event.specific')}}
            </button>

            <button type="button" @click="selectedTime = 'announce_after'" :class="{ 'bg-neutral-5': selectedTime === 'announce_after', 'bg-neutral-2': selectedTime !== 'announce_after' }" class="text-md font-semibold px-4 py-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50">
              {{__('event.announce_after')}}
            </button>
          </div>

          <div class="mt-3" x-show="selectedTime === 'specific'">
            <div class="grid grid-cols-2 gap-3">
              <div>
                <x-forms.date-picker name="date_start" placeholder="{{__('event.datestart')}}" />
              </div>
              <div>
                <x-forms.time-picker name="time_start" placeholder="{{__('Start Time')}}" />
              </div>
              <div>
                <x-forms.date-picker name="date_end" placeholder="{{__('event.dateend')}}" />
              </div>
              <div>
                <x-forms.time-picker name="time_end" placeholder="{{__('End Time')}}" />
              </div>
            </div>
          </div>


          <div class="mt-3 flex flex-col gap-3" x-show="selectedTime === 'announce_after'">
            <p>
              {{__('event.announce_after_desc')}}
            </p>
          </div>

        </div>



        <div class="p-3 rounded-lg my-5 border-2 border-gray-1" x-data="{ selectedVenue: 'venue' }">
          <h1 class="text-lg font-bold text-neutral-9 mb-3">{{__('event.location')}}</h1>
          <div class="mb-4 flex flex-col">
            <input type="text" hidden name="venue" x-model="selectedVenue">
            <div class="inline-flex rounded-md gap-4" role="group">
              <button type="button" @click="selectedVenue = 'venue'" :class="{ 'bg-neutral-5': selectedVenue === 'venue', 'bg-neutral-2': selectedVenue !== 'venue' }" class="text-md font-semibold px-4 py-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50">
                {{__('event.venue')}}
              </button>
              <button type="button" @click="selectedVenue = 'online'" :class="{ 'bg-neutral-5': selectedVenue === 'online', 'bg-neutral-2': selectedVenue !== 'online' }" class="text-md font-semibold px-4 py-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50">
                {{__('event.online')}}
              </button>
            </div>
          </div>
          <div class="mt-3 flex flex-col gap-3" x-show="selectedVenue === 'venue'">
            <x-forms.input-outline-primary id="event_location" name="event_location" label="{{__('event.event_location')}}" :isHaveReset="true" />

            <div id="map" style="height: 400px;" class="my-3"></div>

            <div hidden>
              <x-forms.input-outline-primary name="lat" label="{{__('event.lat')}}" value="{{ old('lat') }}" type="text" />
              <x-forms.input-outline-primary name="lng" label="{{__('event.lng')}}" value="{{ old('lng') }}" type="text" />
            </div>
            <div class="grid grid-cols-12 gap-3">
              <div class="col-span-8">
                <x-forms.input-outline-primary id="placename" name="placename" label="{{__('event.placename')}}" />
              </div>
              <div class="col-span-4">
                <x-forms.input-outline-primary id="room" name="room" label="{{__('event.Room/Floor/Hall')}}" />
              </div>
            </div>

            <div hidden>
              <x-forms.input-outline-primary id="province" name="province" label="{{__('event.province')}}" />
              <x-forms.input-outline-primary id="district" name="district" label="{{__('event.district')}}" />
            </div>

            <x-forms.textarea-outline-primary id="travel_info" name="travel_info" label="{{__('event.travel_info')}}" placeholder="{{__('event.travel_info')}}" />

          </div>

          <div class="mt-3 flex flex-col gap-3" x-show="selectedVenue === 'online'">
            <p>
              {{__('event.online_desc')}}
            </p>

          </div>

        </div>
      </div>

      <div class="flex justify-end">
        <div class="flex flex-row gap-1">

          <x-button.btn-neutral type="button" btnType="secondary" onclick="resetForm()">
            {{__('event.reset')}}
          </x-button.btn-neutral>

          <x-button.btn-neutral type="submit">
            {{__('event.save')}}
          </x-button.btn-neutral>


        </div>
      </div>


    </form>
  </div>
  </div>



  <script>
    var createForm = document.getElementById('create-form');



    createForm.addEventListener('keydown', function(event) {
      if (event.key === 'Enter') {

        event.preventDefault();
      }
    });

    createForm.addEventListener('submit', function(event) {
      event.preventDefault();
      Swal.fire({
        title: "Are you sure to create event?",
        showCancelButton: true,
        confirmButtonText: "Confirm",
      }).then((result) => {
        if (result.isConfirmed) {
          this.submit();
        }
      });

    });

    function resetForm() {

      Swal.fire({
        title: 'Are you sure to reset form?',
        showCancelButton: true,
        confirmButtonText: 'Confirm',
      }).then((result) => {
        if (result.isConfirmed) {
          location.reload();
        }
      })



    }

    var latInput = document.getElementById('lat');
    var lngInput = document.getElementById('lng');
    var map;
    var pinMarker;

    function initMap() {
      var defaultLocation = {
        lat: 13.7563,
        lng: 100.5018
      };

      map = new google.maps.Map(document.getElementById('map'), {
        center: defaultLocation,
        zoom: 15
      });

      map.setOptions({
        draggableCursor: 'crosshair'
      });

      pinMarker = new google.maps.Marker({
        position: defaultLocation,
        map: map,
        draggable: true,
        title: 'Pin Marker'
      });

      map.addListener('click', function(event) {
        pinMarker.setPosition(event.latLng);
        updateLatLng(event.latLng.lat(), event.latLng.lng(), true);
      });

      pinMarker.addListener('dragend', function(event) {
        updateLatLng(event.latLng.lat(), event.latLng.lng(), true);
      });

      // Search functionality
      var event_location = document.getElementById('event_location');
      var searchBox = new google.maps.places.SearchBox(event_location);

      searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();
        if (places.length == 0) {
          return;
        }

        // Clear previous markers
        pinMarker.setMap(null);

        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
          if (!place.geometry) {
            console.log("Returned place contains no geometry");
            return;
          }

          if (place.geometry.viewport) {
            bounds.union(place.geometry.viewport);
          } else {
            bounds.extend(place.geometry.location);
          }

          // Set marker at searched place
          pinMarker = new google.maps.Marker({
            position: place.geometry.location,
            map: map,
            draggable: true,
            title: 'Pin Marker'
          });

          pinMarker.addListener('dragend', function(event) {
            updateLatLng(event.latLng.lat(), event.latLng.lng(), true);
          });

          updateLatLng(place.geometry.location.lat(), place.geometry.location.lng());
        });
        map.fitBounds(bounds);
      });
    }


    function updateLatLng(lat, lng, formclick = false) {
      latInput.value = lat;
      lngInput.value = lng;
      document.getElementById('placename').value = (document.getElementById('event_location').value).split(',')[0];
      document.getElementById('district').value = (document.getElementById('event_location').value).split(',')[3];
      document.getElementById('province').value = (document.getElementById('event_location').value).split(',')[4];


      var geocoder = new google.maps.Geocoder();
      var latLng = {
        lat: parseFloat(lat),
        lng: parseFloat(lng)
      };

      geocoder.geocode({
        'location': latLng
      }, function(results, status) {
        if (status === 'OK') {
          if (results[0]) {
            var address = results[0].formatted_address;
            var addressInput = document.getElementById('event_location');
            if (formclick) {
              addressInput.value = address;
              addressInput.dispatchEvent(new Event('input'));
            }
          } else {
            console.log('No results found');
          }
        } else {
          console.log('Geocoder failed due to: ' + status);
        }
      });
    }
  </script>


  <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?= env('GOOGLE_API_KEY') ?>&libraries=places&callback=initMap"></script>

</x-app-layout>