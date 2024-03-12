import './bootstrap';
import 'laravel-datatables-vite';
import './filepondUploader';
import Swal from 'sweetalert2/dist/sweetalert2.js'
import '@sweetalert2/theme-material-ui/material-ui.scss'

import * as filepond from './filepondUploader';
window.filepond = filepond;
window.Swal = Swal;


