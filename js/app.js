$(document).ready(function() {
    $('button[data-operation]').click(function() {
        $('button[data-operation]').removeClass('active');
        $(this).addClass('active');
        var el = $(this).data('operation');
        $('input[name="operation"]').each(function() {
            if ($(this).val() == el) {
                $(this).click();
            }
        });
    });
});