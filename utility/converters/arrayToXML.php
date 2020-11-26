<?php 
    /** 
    * Convert jSON object to XML
    */
    /** 
     * Iterative XML constructor 
     * 
     * @param array $jsonArr $array 
     * @param array|string $value
     * @param object|boolean $xml 
     * @return string 
     */
    function json2xml($data) {
      $jsonArr = json_decode($data, true);
      $convertedXML = array2xml($jsonArr);
      return $convertedXML;
    }

    function array2xml( array $array, $xml = false) {
      // Test if iteration
      if ( $xml === false ) {
        $xml = new SimpleXMLElement('<result/>');
      }
      
      // Loop through array
      foreach( $array as $key => $value ) {
          // Another array? Iterate
          if ( is_array( $value ) ) {
            array2xml( $value, $xml->addChild( $key ) );
          } else {
            $xml->addChild( $key, $value );
          }
      }
      
      // Return XML
      return $xml->asXML();
  }
?>