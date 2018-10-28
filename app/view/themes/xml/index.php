<?php
/* Have to do this with built in fucntionality */
$xml = new SimpleXMLElement('<root/>');
$products = $xml->addChild('products');
if (! empty($pageData['data']) && is_array($pageData['data'])) {
    $array = json_decode(json_encode($pageData['data']), true);
    foreach ($array as $k => $v) {
        if (is_array($v)) {
            $product = $products->addChild('product');
            $attributesXml = $product->addChild('attributes');
            foreach ($v as $k1 => $v1) {
                if ($k1 != 'attributes') {
                    $product->addChild($k1, $v1);
                } else {
                    foreach ($v1 as $k2 => $v2) {
                        if (is_array($v2)) {
                            foreach ($v2 as $k3 => $v3) {
                                $attributesXml->addChild($k3, $v3);
                            }
                        }
                    }
                }
            }
        } 
    }
} else {
    $xml->addChild('products');
    $product = $products->addChild('product');
    $product->addChild('message', 'Your Query Returned No Results');
}
print $xml->asXML();
exit();