<?="\n"?>Product Name:<?="\t"?><?=$v->product_name; ?> <?="\n"?>	
Product Type: <?=$v->product_type; ?> <?="\n"?>
Product Attributes:<?="\n"?>
<?php
if (is_array($v->attributes)) {
    foreach ($v->attributes as $k1 => $v1) {
        // var_dump($v1);
        foreach ($v1 as $k2 => $v2) {
            if (! empty($v2) && $v2 != 'NULL') {                
                echo "\t" . $k2;
                echo ":\t";
                echo "\t" . $v2;
                echo "\n";
            }
        }
    }
}

?>
<?php
/* price */
if (! empty($v->salePrice)) {
    echo sprintf("Price: $%01.2f", $v->product_price);
    echo "\n";
    echo sprintf("On Sale: $%01.2f", $v->salePrice);
} else {
    echo sprintf("Price: $%01.2f", $v->product_price);
}

echo "\n"?>
-----------------------------------------------