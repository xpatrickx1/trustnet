const mainParallax = document.getElementById('mainParallax');
const writersParallax = document.getElementById('writersParallax');


const initParallax = (container) => {
    if ($(window).width() > 991 && container) {
        const newParallax = new Parallax(container);

        $(window).on('resize', () => {
            if ($(window).width() < 992) {
                newParallax.disable();
            } else {
                newParallax.enable();
            }
        });
    }
};

initParallax(mainParallax);
initParallax(writersParallax);