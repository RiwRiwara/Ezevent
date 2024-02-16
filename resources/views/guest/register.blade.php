<x-guest-layout>
  <div class=" px-6 py-6 9lg:px-8 bg-neutral-5">
    <div class=" flex flex-row items-center justify-center">
      <img class="h-15 w-auto" src="{{ asset('images/Logo(Orange).png') }}" alt="Logo">
      <h2 class="ml-4 text-3xl font-bold leading-9 tracking-tight text-gray-0 ">Create New Account</h2>
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md bg-gray-0 p-4 rounded-lg shadow-md">
      <form class="space-y-6" action="#" method="POST">
        @csrf
        <div class="mb-2">
          <p class="block text-md font-bold  text-primary-9">{{__('field_name.personal_information')}}</p>
          <div class="mt-2 flex flex-col gap-3">
            <x-forms.input-outline-primary name="email" label="{{__('field_name.email')}}" type="email" />
            <x-forms.input-outline-primary name="phone" label="{{__('field_name.phone')}}" type="text" />
            <x-forms.input-outline-primary name="first_name" label="{{__('field_name.first_name')}}" type="text" />
            <x-forms.input-outline-primary name="last_name" label="{{__('field_name.last_name')}}" type="text" />

            <x-forms.date-picker name="date_birth" placeholder="{{__('field_name.select_date_birth')}}" />


          </div>
        </div>

        <div class="mb-2">
          <p class="block text-md font-bold  text-primary-9 mb-3">{{__('field_name.address_information')}}</p>

          <x-forms.textarea-outline-primary name="address" label="{{__('field_name.address')}}" placeholder="{{__('field_name.add_address')}}" />

          <div class="mt-2 row">
            <div class="col-md-3 mb-3">
              <x-forms.select-dropdown name="property_province" label="{{__('field_name.province')}}" :options="$FORM_DATA_ITEMS['provinces']" val_key="{{ app()->getLocale() === 'th' ? 'name_th' : 'name_en'}}" />
            </div>
            <div class="col-md-3 mb-3">
              <x-forms.select-dropdown name="property_district" label="{{__('field_name.district')}}" />
            </div>

            <div class="col-md-3 mb-3">
              <x-forms.select-dropdown name="property_city" label="{{__('field_name.sub_district')}}" disabled />
            </div>

            <div class="col-md-3 mt-5">
              <x-forms.input-outline-primary name="zipcode" label="{{__('field_name.zipcode')}}" type="text" disabled />
            </div>
          </div>
        </div>
        <div>
          <button type="submit" class="mt-5 flex w-full justify-center rounded-md bg-neutral-9 px-3 py-1.5 text-md font-semibold leading-6 text-white shadow-sm hover:bg-neutral-7">Next</button>
        </div>
      </form>
    </div>

  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#property_province').change(function() {
        var provinceId = $(this).val();

        var districtsData = <?php echo json_encode($FORM_DATA_ITEMS['districts']); ?>;
        var filteredDistricts = districtsData.filter(function(district) {
          return district.province_id == provinceId;
        });

        $('#property_district').html('');
        $('#property_district').prop('disabled', false);
        $.each(filteredDistricts, function(index, district) {
          $('#property_district').append('<option value="' + district.id + '">' + district["{{ app()->getLocale() === 'th' ? 'name_th' : 'name_en'}}"] + '</option>');
        });

        $('#property_city').html('');
        $('#property_city').prop('disabled', true);
        $('#property_district').trigger('change');

      });

      $('#property_district').change(function() {
        var districtId = $(this).val();
        var citiesData = <?php echo json_encode($FORM_DATA_ITEMS['cities']); ?>;
        var filteredcities = citiesData.filter(function(city) {
          return city.amphure_id == districtId;
        });

        $('#property_city').html('');
        $('#property_city').prop('disabled', false);
        $('#zipcode').val('');
        $('#zipcode').prop('disabled', true); 

        $.each(filteredcities, function(index, city) {
          $('#property_city').append('<option value="' + city.id + '">' + city["{{ app()->getLocale() === 'th' ? 'name_th' : 'name_en'}}"] + '</option>');
          $('#zipcode').val(city.zip_code); 
        });
      });

      $('#property_province').val('-');

    });
  </script>
</x-guest-layout>