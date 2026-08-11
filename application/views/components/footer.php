 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
     </svg></div>

    <!-- Botão de alternância de tema -->
    <button id="theme-toggle" title="Alternar tema claro/escuro" aria-label="Alternar tema">
        <svg class="icon-moon t-icon" viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
        <svg class="icon-sun t-icon" viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="5"></circle>
            <line x1="12" y1="1" x2="12" y2="3"></line>
            <line x1="12" y1="21" x2="12" y2="23"></line>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
            <line x1="1" y1="12" x2="3" y2="12"></line>
            <line x1="21" y1="12" x2="23" y2="12"></line>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
        </svg>
    </button>

 <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
 <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
 <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.waypoints.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>
 <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
 <script src="<?= base_url() ?>assets/js/aos.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.animateNumber.min.js"></script>
 <script src="<?= base_url() ?>assets/js/scrollax.min.js"></script>
 <script src="<?= base_url() ?>assets/js/main.js"></script>

 <!-- Script de alternância de tema Dark/Light -->
 <script>
   (function() {
     var btn   = document.getElementById('theme-toggle');
     var html  = document.documentElement;
     var STORE = 'blog-theme';

     // Garante que o tema salvo está aplicado
     var saved = localStorage.getItem(STORE) || 'light';
     html.setAttribute('data-theme', saved);

     btn.addEventListener('click', function() {
       var current = html.getAttribute('data-theme');
       var next    = current === 'dark' ? 'light' : 'dark';
       html.setAttribute('data-theme', next);
       localStorage.setItem(STORE, next);
     });
   })();
 </script>
