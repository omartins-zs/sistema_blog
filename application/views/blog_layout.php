<?php $this->load->view('components/header'); ?>

<body>

<div id="colorlib-page">

    <?php $this->load->view('components/menu'); ?>

    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xl-8 py-5 px-md-5">

                    <?php $this->load->view($subview); ?>

                    </div>
                    <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">

                        <?php $this->load->view('components/sidebar'); ?>

                    </div><!-- END COL -->
                </div>
            </div>
        </section>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<?php $this->load->view('components/footer'); ?>

</body>

</html>