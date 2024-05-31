<?php

require('includes/header.php');
require('includes/navbar.php');
?>
<div class="about-page-outline">
<div class="container about-page-container" >
    <?php
while(have_posts()) {
    the_post();
    the_content();
};?>
</div>
</div>
<?php
require('includes/cta.php');
require('includes/footer.php');