import $ from 'jquery';
import Modal from "./Modal";

$(document).ready(function () {
   $('*[data-show-modal]').click(function () {
     const modalType = $(this).data('show-modal');
     Modal.showModal(modalType);
   });

    $(document).on('click', '.close-modal', function () {
        Modal.closeModal();
    });

    $(document).keyup(function (e) {
        e.code === 'Escape' && $('.close-modal').click();
    });
});