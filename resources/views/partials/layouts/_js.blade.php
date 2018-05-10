    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    <!-- Tooltip plugin (zebra) js file -->
    <script src="{{ asset('plugins/zebra-tooltip/zebra_tooltips.min.js') }}"></script>

    <!-- Owl Carousel plugin js file -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>

    <!-- Ideabox theme js file. you have to add all pages. -->
    <script src="{{ asset('js/main-script.js') }}"></script>
    {{-- <script src="{{asset('js/prism.js')}}"></script> --}}
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


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
    <script type="text/javascript">
        $(document).on('click', 'a#favorite', function(e) {
        e.preventDefault(); // does not go through with the link.

        var $this = $(this);

        $.post({
            type: $this.data('method'),
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: $this.attr('href')
        }).done(function (data) {
            if (data === 'login') {
                // console.log(data);
                toastr.info('Kindly login', 'Login Alert', {timeOut: 5000});
                $('div#loginModal').show();
            }else if (data === 'debooked') {
                $("#button-fav").removeClass('add-to-favorite1');
                $("#button-fav").addClass('add-to-favorite');
                toastr.warning('Bookmark Removed', 'Bookmark Alert', {timeOut: 5000});
            }else if (data === 'booked') {
                $("#button-fav").removeClass('add-to-favorite');
                $("#button-fav").addClass('add-to-favorite1');
                toastr.success('Bookmark Added', 'Bookmark Alert', {timeOut: 5000});
            }
            // console.log(data);
        });
    });
    $("pre").addClass('prettyprint');
    </script>
    <script type="text/javascript">
        
        $('document').ready(function () {

            $(document).on('keyup', 'input#search', function() {
                var slug = $(this).val();
                if (slug != '') {
                    url = '/presearch/'+slug ;

                    $.ajax({
                        url: url,
                        type: 'get',
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        success:function(data){
                            if (data === 'nosearch') {
                                $("#presearch").hide();
                            }else{
                            // console.log(data);
                                $("#presearch").show();
                                $("#presearch").load(url);
                            }
                        }
                    });

                }else{
                    $("#presearch").hide();
                }
                
            });

        });
    </script>

