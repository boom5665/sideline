<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">

<section class="spacer">
    <div class="testimonial-section">
        <div class="testi-user-img">
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img class="u3" src="https://md-aqil.github.io/images/2091127763_1_1_1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="u1" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="u1" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="u1" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>





<style>

    .gallery-thumbs {
        height: 100%;
    }

    .gallery-thumbs .swiper-wrapper {
        align-items: center;
    }

    .gallery-thumbs .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 250px !important;
        height: 330px;
        position: relative;
    }

    .gallery-thumbs .swiper-slide img {
        filter: contrast(0.5) blur(1px);
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .gallery-thumbs .swiper-slide-active img {
        filter: contrast(1) blur(0px) !important;
    }

    .flex-row .flex-col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .gallery-thumbs .swiper-wrapper {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }


    .testimonial-section .quote {
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 100px;
        padding-right: 100px;
    }

    .swiper-container.testimonial {
        height: 100vh;
    }

    .testimonial-section .user-saying {
        background: var(--theme-color2);
        width: 60%;
        color: #fff;
        height: 100%;
    }

    .testi-user-img {
        width: 40%;
    }

    .testimonial-section {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: center;
        width: 100%;
        height: 100%;
    }


</style>

<script src="https://md-aqil.github.io/images/swiper.min.js"></script>
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: '2',
        // coverflowEffect: {
        //   rotate: 50,
        //   stretch: 0,
        //   depth: 100,
        //   modifier: 1,
        //   slideShadows : true,
        // },

        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 50,
            modifier: 6,
            slideShadows: false,
        },

    });

</script>
