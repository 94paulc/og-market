<footer>
    <div id="backToTopSection">
        <span class="material-icons">expand_less</span>
        <span>{{ __('home.backToTop') }}</span>
    </div>

    <div class="container" id="copyrightContainer">
        <div class="row">
            <div class="col-md-8">
                {{ __('home.copyrightText1') }}<br>
                {{ __('home.copyrightText2') }}
            </div>
            <div class="col-md-4 text-right">
                <img src="{{ asset('img/facebook.png') }}">
                <img src="{{ asset('img/instagram.png') }}">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jQuery/jQuery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</footer>
