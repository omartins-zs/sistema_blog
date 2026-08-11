 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
     </svg></div>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.animateNumber.min.js"></script>
 <script src="<?= base_url() ?>assets/js/scrollax.min.js"></script>

 <script src="<?= base_url() ?>assets/js/main.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
 <script>
    function addDarkmodeWidget() {
      const options = {
        bottom: '32px',
        right: '32px',
        left: 'unset',
        time: '0.3s',
        mixColor: '#fff',
        backgroundColor: '#fff',
        buttonColorDark: '#100f2c',
        buttonColorLight: '#fff',
        saveInCookies: true,
        label: '🌓',
        autoMatchOsTheme: true
      };
      new Darkmode(options).showWidget();
    }
    window.addEventListener('load', addDarkmodeWidget);
 </script>
