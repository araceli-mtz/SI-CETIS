// Initialize page URL
var base_url = '#';
var form_current_url = '#';
// $gmx = $;
$gmx(document).ready(function () {
    // Prepare navigation menu
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
    });
});