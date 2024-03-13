@props(['name' => 'richtext', 'label' => '',
'value' => ''

])

<div class="">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />

    <div id="toolbar-container" class="rounded-md">
        <span class="ql-formats">
            <select class="ql-font"></select>
            <select class="ql-size"></select>
        </span>
        <span class="ql-formats">
            <button class="ql-bold"></button>
            <button class="ql-italic"></button>
            <button class="ql-underline"></button>
            <button class="ql-strike"></button>
        </span>
        <span class="ql-formats">
            <select class="ql-color"></select>
            <select class="ql-background"></select>
        </span>
        <span class="ql-formats">
            <button class="ql-script" value="sub"></button>
            <button class="ql-script" value="super"></button>
        </span>
        <?php
        //<span class="ql-formats">
           // <button class="ql-header" value="1"></button>
           // <button class="ql-header" value="2"></button>
            //<button class="ql-blockquote"></button>
           // <button class="ql-code-block"></button>
        //</span>
        ?>
        <span class="ql-formats">
            <button class="ql-list" value="ordered"></button>
            <button class="ql-list" value="bullet"></button>
            <button class="ql-indent" value="-1"></button>
            <button class="ql-indent" value="+1"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-direction" value="rtl"></button>
            <select class="ql-align"></select>
        </span>
        <span class="ql-formats">
            <button class="ql-link"></button>
            <button class="ql-formula"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-clean"></button>
        </span>
    </div>

    <div id="{{$name}}" style="min-height: 15em;">
        {!! htmlspecialchars_decode($value) !!}
    </div>


    <input type="hidden" name="{{$name}}_input" id="{{$name}}_input"
        value="{{htmlspecialchars_decode($value)}}" 
    >

    <script>
        const quill = new Quill('#{{$name}}', {
            modules: {
                syntax: true,
                toolbar: '#toolbar-container',
            },
            placeholder: 'Write your content here...',
            theme: 'snow',
        });

        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById('{{$name}}_input').value = quill.root.innerHTML;
        });
    </script>
</div>