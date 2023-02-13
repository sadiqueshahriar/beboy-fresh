var scroll_count = 1;
lazyload();
window.onscroll = function(ev) {
    lazyload();
};

function lazyload() {
    console.log('loaded image');
    var lazyImage = document.getElementsByClassName('lozad');
    for (var i = 0; i < lazyImage.length; i++) {
        if (elementInViewport(lazyImage[i])) {
            lazyImage[i].setAttribute('src', lazyImage[i].getAttribute('data-src'));
        }
    }
}

function elementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || documentElement.clientHeight) && rect.right <= (window.innerWidth || documentElement.clientWidth));
}