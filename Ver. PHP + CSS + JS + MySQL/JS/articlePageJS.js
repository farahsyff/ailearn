document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '.splide', {
        type: 'loop',
        height: '15vw',
        width: '90%',
        perPage: '3',
        perMove: '1',
        gap: '1vw',
        cover: 'true',
        arrows: 'slider',
        breakpoints: {
            '768': {
                perPage: 2,
                gap    : '1vw',
                height: '20vw',
            },
            '600': {
                perPage: 1,
                gap    : '1vw',
                width: '80%',
                height: '30vw',
            },
    }
}
    ).mount( window.splide.Extensions );
} );