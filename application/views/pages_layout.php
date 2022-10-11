<?php $this->load->view('components/header'); ?>

<body>

    <div id="colorlib-page">

        <?php $this->load->view('components/menu'); ?>

        <div id="colorlib-main">

            <?php $this->load->view($subview); ?>

        </div><!-- END COLORLIB-MAIN -->
    </div><!-- END COLORLIB-PAGE -->

    <?php $this->load->view('components/footer'); ?>

</body>

</html>