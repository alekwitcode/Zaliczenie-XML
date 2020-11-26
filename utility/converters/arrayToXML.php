<?php 
    /** 
    * Convert jSON object to XML
    */
    /** 
     * Iterative XML constructor 
     * @param array|string $value
     * @param object|boolean $xml 
     * @return string 
     */
    function json2xml($data) {
      $jsonArr = json_decode($data, true);
      $convertedXML = json_to_xml($jsonArr);
      return ("<full-response>\r\n" . $convertedXML . "\r\n</full-response>");
  }

  function json_to_xml($obj){
    $str = "";
    if(is_null($obj))
      return "<null/>";
    elseif(is_array($obj)) {
        //a list is a hash with 'simple' incremental keys
      $is_list = array_keys($obj) == array_keys(array_values($obj));
      if(!$is_list) {
        foreach($obj as $k=>$v)
          $str.="\t<item key=\"$k\">\r\n".json_to_xml($v)."\r\n\t</item>\r\n";
      } else {
        $str.= "\t\t<list>\r\n";
        foreach($obj as $v)
          $str.="\t\t\t<list-item>\r\n\t\t\t".json_to_xml($v)."\r\n\t\t\t</list-item>\r\n";
        $str .= "\t\t</list>";
      }
      return $str;
    } elseif(is_string($obj)) {
      return htmlspecialchars($obj) != $obj ? "<![CDATA[$obj]]>" : $obj;
    } elseif(is_scalar($obj))
      return $obj;
    else
      throw new Exception("Unsupported type $obj");
  }
?>