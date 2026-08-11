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
 <script>document.addEventListener('DOMContentLoaded',function(){var l=document.getElementById('ftco-loader');if(l){l.classList.remove('show');setTimeout(function(){l.style.display='none';},500);}});</script>


 <button id="theme-toggle" title="Alternar tema" style="position:fixed;bottom:2rem;right:2rem;z-index:9999;width:48px;height:48px;border-radius:50%;border:none;background:#F96D00;color:#fff;cursor:pointer;box-shadow:0 4px 15px rgba(249,109,0,.45);display:flex;align-items:center;justify-content:center;transition:transform .2s,background .3s;">
   <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
   <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
 </button>

 <style>
   /* ===== PREMIUM DARK MODE ===== */
   body.dark-mode { background-color:#111827 !important; color:#F3F4F6 !important; }
   body.dark-mode #colorlib-aside { background-color:#1F2937 !important; border-right: 1px solid #374151 !important; }
   body.dark-mode #colorlib-main-menu ul li a { color:#9CA3AF !important; }
   body.dark-mode #colorlib-main-menu ul li.colorlib-active a, body.dark-mode #colorlib-main-menu ul li a:hover { color:#F96D00 !important; }
   
   /* Blog Entries */
   body.dark-mode .blog-entry { background:#1F2937 !important; border: 1px solid #374151 !important; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); transition: transform 0.2s, box-shadow 0.2s; padding: 1.5rem !important; align-items: center; }
   body.dark-mode .blog-entry:hover { transform: translateY(-5px); box-shadow: 0 12px 20px rgba(0, 0, 0, 0.4); }
   body.dark-mode .blog-entry .img { min-width: 130px !important; width: 130px !important; height: 130px !important; margin-right: 1.5rem; }
   body.dark-mode .blog-entry .text { padding: 0 !important; }
   body.dark-mode .blog-entry .text h3 a { color:#F3F4F6 !important; font-weight: 600; transition: color 0.2s; }
   body.dark-mode .blog-entry .text h3 a:hover { color:#F96D00 !important; }
   body.dark-mode .blog-entry .meta span, body.dark-mode .blog-entry .meta span a { color:#9CA3AF !important; font-size: 0.9rem; }
   body.dark-mode .blog-entry .meta span a:hover { color:#F3F4F6 !important; }
   body.dark-mode .blog-entry .text p { color:#D1D5DB !important; line-height: 1.6; }
   body.dark-mode .blog-entry .text .btn-custom { color: #F96D00 !important; font-weight: 600; letter-spacing: 0.5px; }
   @media (max-width: 768px) {
       body.dark-mode .blog-entry { flex-direction: column; text-align: center; }
       body.dark-mode .blog-entry .img { margin: 0 auto 1.5rem auto !important; }
   }
   
   /* Sidebar */
   body.dark-mode .sidebar { background: transparent !important; }
   body.dark-mode .sidebar-box { background:#1F2937 !important; border: 1px solid #374151 !important; border-radius: 12px; padding: 2rem !important; box-shadow: 0 4px 6px rgba(0,0,0,0.2); }
   body.dark-mode .sidebar-box h3, body.dark-mode .sidebar-box .heading { color:#F3F4F6 !important; margin-bottom: 1.5rem; }
   body.dark-mode .categories li a { color:#9CA3AF !important; border-bottom: 1px solid #374151 !important; padding: 0.75rem 0 !important; }
   body.dark-mode .categories li a:hover { color:#F96D00 !important; }
   body.dark-mode .categories li a span { color:#6B7280 !important; }
   
   /* Form Elements */
   body.dark-mode .form-control { background:rgba(0,0,0,0.25) !important; border: 1px solid rgba(255,255,255,0.1) !important; color:#F3F4F6 !important; border-radius: 6px; padding-left: 15px; }
   body.dark-mode .form-control:focus { border-color: #F96D00 !important; background:rgba(0,0,0,0.4) !important; box-shadow: 0 0 0 0.2rem rgba(249, 109, 0, 0.25) !important; }
   body.dark-mode .search-form .form-group { background: transparent !important; }
   body.dark-mode .search-form .form-control { background: #111827 !important; border: 1px solid #374151 !important; color: #F3F4F6 !important; border-radius: 8px !important; }
   body.dark-mode .search-form .form-control::placeholder { color: #9CA3AF !important; }
   body.dark-mode .search-form .icon { color: #9CA3AF !important; }
   
   /* Generic & Contact */
   body.dark-mode .bg-light, body.dark-mode .contact-form, body.dark-mode .info, body.dark-mode #map { background:#1F2937 !important; color:#9CA3AF !important; border: 1px solid #374151 !important; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.2); }
   body.dark-mode .info p span { color: #F3F4F6 !important; font-weight: 600; }
   body.dark-mode h1, body.dark-mode h2, body.dark-mode h3, body.dark-mode h4, body.dark-mode h5, body.dark-mode h6 { color:#F3F4F6 !important; }
   body.dark-mode .colorlib-footer p, body.dark-mode .colorlib-footer a { color:#9CA3AF !important; }
   
   /* Toggle Button */
   body.dark-mode #theme-toggle { background:#1F2937 !important; border: 1px solid #374151 !important; color: #F3F4F6 !important; }
   body.dark-mode #theme-toggle:hover { background: #F96D00 !important; color: #fff !important; transform:scale(1.1) rotate(10deg); border-color: #F96D00 !important; }
 </style>

 <script>
   (function() {
     var btn = document.getElementById('theme-toggle');
     var moon = document.getElementById('icon-moon');
     var sun = document.getElementById('icon-sun');
     var isDark = localStorage.getItem('blog-theme') === 'dark';
     function applyTheme(dark) {
       if (dark) { document.body.classList.add('dark-mode'); moon.style.display='none'; sun.style.display='block'; }
       else { document.body.classList.remove('dark-mode'); moon.style.display='block'; sun.style.display='none'; }
     }
     applyTheme(isDark);
     btn.addEventListener('click', function() { isDark=!isDark; localStorage.setItem('blog-theme', isDark?'dark':'light'); applyTheme(isDark); });
   })();
 </script>
