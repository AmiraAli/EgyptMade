<form method="post" name="export_orders">
    <input type="submit"
           class="btn btn-primary btn-small"
           style="float:right;margin-bottom:10px;"
           name="export_orders"
           value="<?php
           if (function_exists('pll_e')) {
               pll_e('Export orders');
           } else {
               _e('Export orders', 'wcvendors');
           }
           ?>"
           >
</form>