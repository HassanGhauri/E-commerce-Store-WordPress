<?php

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="eci-inventory">

    <h1>Inventory Management</h1>

    <?php

    $table = new ECI_Frontend_Table();

    $table->render();

    ?>

</div>