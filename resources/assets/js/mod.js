$(document).ready(function() {
    // initialize
    $('#seminar').hide();
    $('#mem3').hide();
    $('#tab-event a[href="#comp"]').click(function() {
        $('#compete').fadeIn();
        $('#seminar').fadeOut();
        $('#comp').tab('show');
    });
    $('#tab-event a[href="#semnas"]').click(function() {
        $('#seminar').fadeIn();
        $('#compete').fadeOut();
        $('#semnas').tab('show');
    });
    $("html").niceScroll({
        cursorcolor: 'rgba(0,0,0,0.5)',
        cursorwidth: '7px',
        cursorborder: 'none',
        cursorborderradius: '0px',
        zindex: '101'
    });
    $('.ev-cat').click(function() {
        if ($('#web').is(':checked')) {
            $('#mem3').fadeOut();
        } else {
            $('#mem3').fadeIn();
        }
    });
});