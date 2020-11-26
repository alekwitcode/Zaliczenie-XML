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
      return ("<full-response>\r\n" . $convertedXML . "</full-response>");
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
          $str.="<item key=\"$k\">".json_to_xml($v)."</item>"."\r\n";
      } else {
        $str.= "<list>\r\n";
        foreach($obj as $v)
          $str.="<list-item>".json_to_xml($v)."</list-item>"."\r\n";
        $str .= "</list>";
      }
      return $str;
    } elseif(is_string($obj)) {
      return htmlspecialchars($obj) != $obj ? "<![CDATA[".$obj."]]>" : $obj;
    } elseif(is_scalar($obj))
      return $obj;
    else
      throw new Exception("Unsupported type $obj");
  }


  //     /** 
//     * Convert jSON object to XML
//     */
//     /** 
//      * Iterative XML constructor 
//      * @param array|string $value
//      * @param object|boolean $xml 
//      * @return XML
//      */
//     function json2xml($data) {
//       $jsonArr = json_decode($data, true);
//       $convertedXML = json_to_xml($jsonArr);
//       $convertedXML = "<full-response>".$convertedXML."</full-response>";

//       $xmlWriter = new XMLWriter();
//       $xmlWriter->openUri('localhost/xml/xml/request.xml');
//       $xmlWriter->openMemory();
//       $xmlWriter->setIndent(1);
//       $xmlWriter->startDocument('1.0', 'utf-8');
//       $xmlWriter->startElement('full-response');
//       json_to_xml($jsonArr, $xmlWriter);
//       $xmlWriter->endElement();

//       return $xmlWriter;
//   }

//   function json_to_xml($obj, XMLWriter $xml){
//     $xml->flush();
// //  $xml->startElement('foo');
// //  $xml->writeAttribute('bar', 'baz');
// //  $xml->writeCdata('Lorem ipsum');
// //  $xml->endElement();

// // <foo>bar</foo>
      
//     if(is_null($obj))
//       return "<null/>";
//     elseif(is_array($obj)) {
//         //a list is a hash with 'simple' incremental keys
//       $is_list = array_keys($obj) == array_keys(array_values($obj));
//       if(!$is_list) {
//         foreach($obj as $k=>$v)
//           $xml->startElement($k);
//             json_to_xml($v,$xml);
//           $xml->endElement();
//       } else {
//           $xml ->startElement('list');
//           foreach($obj as $v) {
//             $xml->startElement('list-item');
//               json_to_xml($v,$xml);
//             $xml->endElement();
//           }
//           $xml->endElement();
//       }
//       return $xml;
//     } elseif(is_string($obj)) {
//       return htmlspecialchars($obj) != $obj ? $xml->writeCdata($obj) : $obj;
//     } elseif(is_scalar($obj))
//       return $obj;
//     else
//       throw new Exception("Unsupported type $obj");
//   }


?>