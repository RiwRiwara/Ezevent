<x-guest-layout >
  <div class=" px-6 py-6 9lg:px-8 bg-neutral-5 "
  >
    <div class=" flex flex-row items-center justify-center fade-in">
      <img class="h-15 w-auto" src="{{ asset('images/Logo(Orange).png') }}" alt="Logo">
      <h2 class="ml-4 text-3xl font-bold leading-9 tracking-tight text-gray-0 ">{{__('field_name.createnewaccount')}}</h2>
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md bg-gray-0 p-4 rounded-lg shadow-md slide-in-right fade-in" >

      <x-breadcrumb :items="$breadcrumbItems" />

      <form class="space-y-6" action="#" method="POST">
        @csrf
        <div class="mb-2">
          <p class="block text-md font-bold  text-primary-9">{{__('field_name.personal_information')}}</p>
          <div class="mt-2 flex flex-col gap-3">
            <x-forms.input-outline-primary name="email" label="{{__('field_name.email')}}" type="email" required />
            <x-forms.input-outline-primary-password name="password" label="{{__('field_name.password')}}" type="password" required />
            <x-forms.input-outline-primary-password name="password_confirmation" label="{{__('field_name.confirm_password')}}" type="password" required />
            <x-forms.input-outline-primary name="mobile_number" label="{{__('field_name.phone')}}" type="text" required />
            <x-forms.input-outline-primary name="first_name" label="{{__('field_name.first_name')}}" type="text" required />
            <x-forms.input-outline-primary name="last_name" label="{{__('field_name.last_name')}}" type="text" required />
            <x-forms.date-picker name="date_of_birth" placeholder="{{__('field_name.select_date_birth')}}" />
            <x-forms.select-dropdown name="gender" label="{{__('field_name.selected_gender')}}" :options="$page_data['gender']" val_key="{{ app()->getLocale() === 'th' ? 'name_th' : 'name_en'}}" require />


          </div>
        </div>

        <div class="mb-2">
          <p class="block text-md font-bold  text-primary-9 mb-3">{{__('field_name.address_information')}}</p>

          <x-forms.textarea-outline-primary id="address" name="address" label="{{__('field_name.address')}}" placeholder="{{__('field_name.add_address')}}" require />

          <div class="mt-2 row">
            <div class="col-md-3 mb-3">
              <x-forms.select-dropdown name="province" label="{{__('field_name.province')}}" :options="$page_data['provinces']" val_key="{{ app()->getLocale() === 'th' ? 'name_th' : 'name_en'}}" require />
            </div>
            <div class="col-md-3 mb-3">
              <x-forms.select-dropdown name="district" label="{{__('field_name.district')}}" require />
            </div>

            <div class="col-md-3 mb-3">
              <x-forms.select-dropdown name="city" label="{{__('field_name.sub_district')}}" disabled require />
            </div>

            <div class="col-md-3 mt-5">
              <input type="hidden" name="zipcode" id="zipcode" />
              <x-forms.input-outline-primary name="zipcode_show" label="{{__('field_name.zipcode')}}" type="text" disabled require />
            </div>
          </div>
        </div>
        <div>
          <x-button.primary type="submit" innerHtml="{{__('field_name.register')}}" id="nextButton" />
        </div>
        <p class="mt-0 text-center text-sm">
          {{__('field_name.have_account')}}
          <a href="{{route('web.login.index')}}" class="font-semibold text-lg underline leading-10 text-neutral-8">
            {{__('field_name.login')}}
          </a>
        </p>
      </form>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#province').change(function() {
        var provinceId = $(this).val();

        var districtsData = <?php echo json_encode($page_data['districts']); ?>;
        var filteredDistricts = districtsData.filter(function(district) {
          return district.province_id == provinceId;
        });

        $('#district').html('');
        $('#district').prop('disabled', false);
        $.each(filteredDistricts, function(index, district) {
          $('#district').append('<option value="' + district.id + '">' + district["{{ app()->getLocale() === 'th' ? 'name_th' : 'name_en'}}"] + '</option>');
        });

        $('#city').html('');
        $('#city').prop('disabled', true);
        $('#district').trigger('change');

      });

      $('#district').change(function() {
        var districtId = $(this).val();
        var citiesData = <?php echo json_encode($page_data['cities']); ?>;
        var filteredcities = citiesData.filter(function(city) {
          return city.amphure_id == districtId;
        });

        $('#city').html('');
        $('#city').prop('disabled', false);
        $('#zipcode_show').val('');
        $('#zipcode').val('');
        $('#zipcode_show').prop('disabled', true);

        $.each(filteredcities, function(index, city) {
          $('#city').append('<option value="' + city.id + '">' + city["{{ app()->getLocale() === 'th' ? 'name_th' : 'name_en'}}"] + '</option>');
          $('#zipcode_show').val(city.zip_code);
          $('#zipcode').val(city.zip_code);
        });
      });

      $('#province').val('-');

    });
  </script>
</x-guest-layout>