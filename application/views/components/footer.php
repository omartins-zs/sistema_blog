 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
     </svg></div>

 <!-- Botão de alternância de tema -->
 <button id="theme-toggle" title="Alternar tema claro/escuro" aria-label="Alternar tema">
   <span class="icon-moon">🌙</span>
   <span class="icon-sun">☀️</span>
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
