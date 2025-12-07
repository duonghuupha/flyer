$(document).ready(function () {
    function isMobileDevice() {
        return /android|iphone|ipad|ipod|windows phone|blackberry|mobile|tablet/i
            .test(navigator.userAgent);
    }
    function checkOrientation() {
        let isLandscape = window.matchMedia("(orientation: landscape)").matches;
        if (isMobileDevice()) { // nếu là thiết bị di động
            $("body").addClass("mobile-device").removeClass("pc-device");
            if (isLandscape) { // nếu là màn hình xoay ngang
                $("body").addClass("mobile-landscape").removeClass("mobile-portrait");
            } else { // nếu là màn hinhd xoay dọc
                $("body").addClass("mobile-portrait").removeClass("mobile-landscape");
            }
            $('link[rel="stylesheet"][data-main-css]').remove();
            $("head").append('<link href="css/styles-mobile.css" rel="stylesheet" data-mobile-css>');
        } else { // là màn hình PC
            $("body").addClass("pc-device").removeClass("mobile-device mobile-portrait mobile-landscape");
            $("link[rel='stylesheet'][data-mobile-css]").remove();
            $("head").append('<link href="css/styles.css" rel="stylesheet" data-main-css>');
        }
    }
    // Chạy lần đầu
    checkOrientation();
    // Khi xoay màn hình (iOS + Android)
    $(window).on("orientationchange", function () {
        checkOrientation();
    });
    // Fallback khi resize cũng update
    $(window).on("resize", function () {
        checkOrientation();
    });
});
