

$(window).scroll(function () {
    if ($(window).scrollTop() > 10) {
        $('#secondNav').addClass('floatingNav');
    } else {
        $('#secondNav').removeClass('floatingNav');
    }
});

function toggle_visibility(id) {
    var e = document.getElementById(id);
    if (e.style.display == 'block')
        e.style.display = 'none';
    else
        e.style.display = 'block';
}