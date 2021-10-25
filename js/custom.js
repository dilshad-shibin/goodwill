

if ($('#testimonial-slider').length) {
        $('#testimonial-slider').slick({
            autoplay: false,
			pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 5000,
            adaptiveHeight: true,
            speed: 800,
            dots: true,
            arrows: false,
			prevArrow:'.navid1 .prev',
            nextArrow:'.navid1 .next',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
						
						
                    }
                },
				{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                        
						
						
                    }
                },
				{
                    breakpoint: 570,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                       
                    }
                }
            ]
        });
    }


 



