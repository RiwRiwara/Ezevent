<style>
    .unique-style .switch-language {
        position: relative;
        display: inline-block;
        margin: 0 5px;
    }

    .unique-style .switch-language > span {
        position: absolute;
        top: 14px;
        pointer-events: none;
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
        text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
        width: 50%;
        text-align: center;
    }

    .unique-style input.check-toggle-round-flat:checked ~ .off {
        color: #fff;

    }

    .unique-style input.check-toggle-round-flat:checked ~ .on {
        color: #053F5C;
    }

    .unique-style .switch-language > span.on {
        left: 0;
        padding-left: 2px;
        color: #fff;
    }

    .unique-style .switch-language > span.off {
        right: 0;
        padding-right: 4px;
        color: #053F5C;
    }

    .unique-style .check-toggle {
        position: absolute;
        margin-left: -9999px;
        visibility: hidden;
    }

    .unique-style .check-toggle + label {
        display: block;
        position: relative;
        cursor: pointer;
        outline: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .unique-style input.check-toggle-round-flat + label {
        padding: 2px;
        width: 97px;
        height: 35px;
        background-color: 0;
        -webkit-border-radius: 60px;
        -moz-border-radius: 60px;
        -ms-border-radius: 60px;
        -o-border-radius: 60px;
        border-radius: 60px;
    }

    .unique-style input.check-toggle-round-flat + label:before,
    .unique-style input.check-toggle-round-flat + label:after {
        display: block;
        position: absolute;
        content: "";
    }

    .unique-style input.check-toggle-round-flat + label:before {
        top: 2px;
        left: 2px;
        bottom: 2px;
        right: 2px;
        /* background-color: blue; */
        -webkit-border-radius: 60px;
        -moz-border-radius: 60px;
        -ms-border-radius: 60px;
        -o-border-radius: 60px;
        border-radius: 60px;
    }

    .unique-style input.check-toggle-round-flat + label:after {
        top: 4px;
        left: 4px;
        bottom: 4px;
        width: 48px;
        background-color: #053F5C;
        -webkit-border-radius: 52px;
        -moz-border-radius: 52px;
        -ms-border-radius: 52px;
        -o-border-radius: 52px;
        border-radius: 52px;
        -webkit-transition: margin 0.2s;
        -moz-transition: margin 0.2s;
        -o-transition: margin 0.2s;
        transition: margin 0.2s;
    }

    .unique-style input.check-toggle-round-flat:checked + label {}

    .unique-style input.check-toggle-round-flat:checked + label:after {
        margin-left: 44px;
    }
</style>

<form id="language-form" action="{{ route('language.switch') }}" method="POST" class="unique-style">
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
