<?php
if (! empty($pageData['num_rows'])){
    echo "Found {$pageData['num_rows']}\n";
}
if (! empty($pageData['data']) && is_array($pageData['data'])) {
    foreach ($pageData['data'] as $k => $v) {
        require 'boxes/productBoxes.php';
    }
} else {
    echo 'No results';
}