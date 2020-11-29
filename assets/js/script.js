/*       ACCUEIL        */


$(document).ready(function () {
    $('.backgroundSlide').slick({
        autoplay: true,
        arrows: false,
        autoplaySpeed: 4000,
        adaptiveHeight: true,
        speed: 800,
    });


    /*        scroll        */

    
    const ratio = .1;

    const options = {
        root: null,
        rootMargin: "0px",
        threshold: ratio
    }

    const handleIntersect = function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.intersectionRatio > ratio) {
                entry.target.classList.add("reveal-visible")
                observer.unobserve(entry.target)
            }
            else {
                console.log("invisible");
            }
        })
    }

    const observer = new IntersectionObserver(handleIntersect, options)
    document.querySelectorAll("[class*='reveal-']").forEach(function (r) {
        observer.observe(r);
    });
});