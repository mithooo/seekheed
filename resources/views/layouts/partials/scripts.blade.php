<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('public/resource')}}/js/scripts.js"></script>
<script src="{{asset('public/assets/js/toastr.js')}}"></script>
    
        @toastr_render

{{-- suggestion box --}}
<script>
    $('#suggestion-form-id').hide();
    document.getElementById('sg-icon').addEventListener('click', function(e) {
        e.preventDefault();
        $('#suggestion-form-id').fadeToggle();
    });
</script>
