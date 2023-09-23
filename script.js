<script>
    $(document).ready(function(){
        $('.certificate-slider').slick({
            slidesToShow: 3, // Number of certificates to show at once
            slidesToScroll: 1, // Number of certificates to scroll
            autoplay: true, // Auto-rotate the slider
            autoplaySpeed: 2000, // Time between slides (in milliseconds)
            responsive: [
                {
                    breakpoint: 768, // Adjust settings for smaller screens
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000
                    }
                }
            ]
        });
    });
</script>
