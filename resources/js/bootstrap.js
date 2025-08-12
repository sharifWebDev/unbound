// bootstrap.js
import axios from 'axios';
import swal from 'sweetalert2';
import $ from 'jquery';
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: Please add <meta name="csrf-token" content="{{ csrf_token() }}"> to your layout.');
}

window.swal = swal;

toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: 'toast-top-right',
    timeOut: 5000,
};
window.toastr = toastr;

window.$ = $;
window.jQuery = $;

export { axios, swal, toastr, $ };
