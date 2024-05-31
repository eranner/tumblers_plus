<?php

require('includes/header.php');
require('includes/navbar.php');
?>
<div class="container main-products-container" style="padding-top: 100px;">
    <?php
    while(have_posts()){
        the_post();
        the_content();
    }
    ?>

</div>
<?php

require('includes/cta.php');
require('includes/footer.php');

