<?php 
    /** 
    * Convert 
    */
    /** 
     * Iterative XML constructor 
     * 
     * @param array $array 
     * @param string|array $value, $valueValue
     * @return string $query
     */
    function inputToQuerry(array $array) {
        $query = "";

        foreach( $array as $value ) {
            if ( is_string( $value ) || is_numeric( $value ) ) {
                $query .= "$query$value,";
            } elseif ( is_array( $value ) ) {
                foreach( $value as $valueValue ) {
                    $query .= "$query$valueValue,";
                }
                
            } else {
                echo "Something's not right ";
            }
        }

        return $query . "\n";
    }
?>