<div class="" style="width: 100%;">
	<div><?php
if (! empty($pageData['num_rows'])) {
    echo "Found {$pageData['num_rows']}";
}
?>
</div>
<div class="row">
<?php

if ($pageData['num_rows'] > 0) {
    foreach ($pageData['data'] as $k => $v) {
        require 'boxes/productBoxes.php';
    }
} else {
    echo 'We are sorry, the search returned no results, please search again ';
}
?>
</div>
</div>