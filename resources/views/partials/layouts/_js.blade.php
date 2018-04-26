    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    <!-- Tooltip plugin (zebra) js file -->
    <script src="{{ asset('plugins/zebra-tooltip/zebra_tooltips.min.js') }}"></script>

    <!-- Owl Carousel plugin js file -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>

    <!-- Ideabox theme js file. you have to add all pages. -->
    <script src="{{ asset('js/main-script.js') }}"></script>

    <script type="text/javascript">

        //Owl carousel initializing
        $('#postCarousel').owlCarousel({
            loop:true,
            dots:true,
            nav:false,
            navText: ['<span><i class="material-icons">&#xE314;</i></span>','<span><i class="material-icons">&#xE315;</i></span>'],
            items:1,
        })

        //widget carousel initialize
        $('#widgetCarousel').owlCarousel({
            dots:true,
            nav:false,
            items:1
        })

    </script>