<div class="quarter floatleft">
    <div class="productbox  ">
    	<h2 class="mar5tb"><?=$v->product_name; ?></h2>
    	<h3 class="mar5tb">Price:<?php
        if (! empty($v->salePrice)) {
            echo '<strike>' . sprintf(" $%01.2f", $v->product_price) . '</strike><br>';
            echo '<b style="color:red">' . sprintf("On Sale: $%01.2f", $v->salePrice) . '</b>';
        } else {
            echo sprintf("Price: $%01.2f", $v->product_price);;
        }
        ?>
        </h3>
    
    	<ul>
    		<li>Product Type: <?=$v->product_type; ?></li>
    		<li style="width: 100%;">Product Attributes:		
    		<?php
            if (is_array($v->attributes)) {
                foreach ($v->attributes as $k1 => $v1) {
                    // var_dump($v1);
                    foreach ($v1 as $k2 => $v2) {
                        if (! empty($v2) && $v2 != 'NULL') {
                            echo '<div style="padding-left:10px;">';
                            echo ucwords($k2);
                            echo ' - ';
                            echo ucwords($v2);
                            echo '</div>';
                        }
                    }
                }
            }
            ?>		
    		</li>
    	</ul>
    </div>
</div>