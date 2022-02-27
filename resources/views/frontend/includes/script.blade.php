<!-- Vendor JS Files -->
<script src="{{ url('frontend/assets/vendor/purecounter/purecounter.js')}} "></script>
<script src="{{ url('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{ url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ url('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ url('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ url('frontend/assets/js/main.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ url('frontend/assets/js-product/main.js')}}"></script>

{{-- event calendar --}}
<script>

$(document).ready(function (){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    var calendar = $('#calendar').fullCalendar();
});

</script>