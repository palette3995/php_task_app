$(function() {
    $('#btn-create').click(function () { 
        $('.task-create-modal').addClass('active');
    });

    $('#btn-close').click(function () { 
        $('.task-create-modal').removeClass('active');
    });

});