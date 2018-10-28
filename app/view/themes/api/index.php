<?php
if (! empty($pageData['data']) && is_array($pageData['data'])) {
    echo json_encode($pageData['data']);
} else {
    echo json_encode(array('message'=>'Your Query Returned No Results'));
}