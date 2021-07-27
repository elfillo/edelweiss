import $ from 'jquery';
import Modal from "./Modal";

$(function (){
    $(document).on('submit', '.js-form', function (e) {
        e.preventDefault();

        var $form = $(this);
        var errors = validateForm(this);
        if (errors > 0) {
            return;
        }

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'send-form',
                data: $form.serialize(),
            },
            type: $form.attr('method') || 'POST',
            context: this,
            success: function() {
                showSuccessModal();
                resetForm($form);
            },
            error: function() {
                console.log('Ошибка отправки формы');
            }
        });
    });

    $(document).on('change', '.privacy-policy-checkbox', function (e) {
        let self = e.target;
        let form = $(self).closest('form');
        let submit =  $(form).find('.form__submit input[type="submit"]');
        $(this).is(':checked') ? $(submit).prop('disabled', false) : $(submit).prop('disabled', true);
    });

    function resetForm(form) {
        form.find('[data-required]').each(function(index, item) {
            $(item).removeClass('_error').val('');
        });
    }

    function validateForm(form) {
        var $form = $(form);
        var requiredFields = $form.find('[data-required]');
        var errorsCounter = 0;

        requiredFields.each(function(index, field) {
            if (!$(field).val()) {
                $(field).addClass('_error');
                errorsCounter += 1;
            } else {
                $(field).removeClass('_error');
            }
        });

        return errorsCounter;
    }

    function showSuccessModal(){
        Modal.closeModal();
        Modal.getThankModal();
    }
});