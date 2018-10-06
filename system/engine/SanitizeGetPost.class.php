<?php
namespace system\engine;

/**
 *
 * @author Bill
 *        
 */
class SanitizeGetPost
{

    /**
     * Filter and sanitize user input
     * @param array $input
     * @return void
     */
    public function sanitize(array &$input): void
    {
        foreach ($input as $k => $v) {
            $filteredV = strip_tags($v);
            $filteredV = filter_var($v, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
            /* more filters here */
            /* */
            $input[$k] = $filteredV;
        }
    }

}

