
<script src="{{url('gal_js/vendor/jquery.js')}}"></script>
<script src="{{url('gal_js/vendor/foundation.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script src="{{url('gal_js/masonry.pkgd.min.js')}}"></script>
<script>
    $(document).foundation();
    var container = document.querySelector('#masonry-container');
    var msnry = new Masonry( container, {
        // options
        itemSelector: '#masonry-container .columns'
    });
</script>


<script src="{{url('js/classie.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('js/jquery-2.0.2.min.js')}}"></script>
<script src="{{url('js/jquery-ui-1.10.4.min.js')}}"></script>
<script src="{{url('js/jquery.isotope.min.js')}}"></script>
<script src="{{url('js/animated-masonry-gallery.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
<!--        <script src="js/custom.js"></script>-->

</body>
</html>
