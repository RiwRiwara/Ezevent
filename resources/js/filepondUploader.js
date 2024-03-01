
import * as FilePond from 'filepond';

import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
import 'filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css';

import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginImageCrop from 'filepond-plugin-image-crop';
import FilePondPluginImageEdit from 'filepond-plugin-image-edit';
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation';
import FilePondPluginImageResize from 'filepond-plugin-image-resize';
import FilePondPluginImageTransform from 'filepond-plugin-image-transform';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

// FilePond
const update_profile = document.querySelector('input[type="file"].profile-img-upload');
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Register the plugin
FilePond.registerPlugin(
    FilePondPluginFileValidateType,
    FilePondPluginImageExifOrientation,
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
    FilePondPluginImageEdit
);

FilePond.create(update_profile,
    {
        files: [{
            source: '645bde3edb9c044cf89810cb_profile.jpeg',
            options: {
                type: 'local',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
            }
        }],
        labelIdle: `<div class="cursor-pointer">Drag & Drop your picture or <span class="font-bold underline hover:text-neutral-6 duration-300 ">Browse</span></div>`,
        imagePreviewHeight: 100,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 250,
        stylePanelLayout: 'circle',
        styleLoadIndicatorPosition: 'center bottom',
        allowMultiple: false,
        allowDrop: true,
        allowReplace: true,
        

        server: {
            process: {
                url: './uploads/process',
                method: 'POST',
                withCredentials: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
            },
            load: {
                url: './testimg/',
                method: 'GET',
                withCredentials: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
            },

        },
    }
);