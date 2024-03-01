
<form id="language-form" action="{{ route('language.switch') }}" method="POST" class="unique-style fade-in  duration-300 ">
    @csrf
    <input type="hidden" name="language" value="{{ app()->getLocale() === 'th' ? 'en' : 'th'}}">
    <div class="switch-language">
        <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" onchange="submitForm()" {{ app()->getLocale() === 'th' ? 'checked' : '' }}>
        <label for="language-toggle"></label>
        <span class="{{ app()->getLocale() === 'th' ? 'on' : 'off'}}">{{ app()->getLocale() === 'th' ? 'EN' : 'TH'}}</span>
        <span class="{{ app()->getLocale() === 'en' ? 'on' : 'off'}}">{{ app()->getLocale() === 'th' ? 'TH' : 'EN'}}</span>
    </div>
</form>

<script>
    function submitForm() {
        document.getElementById("language-form").submit();
    }
</script>
