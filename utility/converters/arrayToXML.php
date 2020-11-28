<?php 
    /** 
    * Convert jSON object to XML
    */
    /** 
     * Iterative XML constructor 
     * @param array|string $value
     * @param object|boolean $xml 
     * @return string 
     * 
     */
    function json2xml($data) {
      $jsonArr = json_decode($data, true);
      $convertedXML = json_to_xml($jsonArr);
      echo $convertedXML;
    return ('<?xml version="1.0" encoding="UTF-8"?>
    <?xml-stylesheet type="text/xml" href="#stylesheet"?>
    <!DOCTYPE catelog [
    <!ATTLIST xsl:stylesheet
      id    ID  #REQUIRED>
    ]>
    <full-response>
    <xsl:stylesheet id="stylesheet" version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    
    <xsl:template match="/">
    
      <html>
      <body>
        <h2 align="center">Results</h2>
        
        
       <table border="1" width="100%" align="center">
       
        <tr bgcolor="#00FFFF">
         <xsl:for-each select="full-response/list/list-item/item">
           <th><xsl:value-of select="@key"/>  </th>
         </xsl:for-each>
        </tr>
        
        
          
         <tr height="100px">
         <xsl:for-each select="full-response/list/list-item/item">
        <td style="text-align:center;">
        <xsl:value-of select="text()"/>
        </td>
        </xsl:for-each>
        </tr>
       </table>
    
    
      </body>
      </html>
    </xsl:template>
    </xsl:stylesheet>'.$convertedXML.'</full-response>'
      );
  }

  function json_to_xml($obj){
    $str = "\r\n\t";
    if(is_null($obj))
      return "<null/>";
    elseif(is_array($obj)) {
      $is_list = array_keys($obj) == array_keys(array_values($obj));
      if(!$is_list) {
        foreach($obj as $k=>$v)
          $str.="\r\n<item key=\"$k\">\r\n".json_to_xml($v)."\r\n</item>";
      } else {
        $str.= "\r\n<list>";
        foreach($obj as $v)
          $str.="\r\n<list-item>\t".json_to_xml($v)."\r\n</list-item>";
        $str .= "\r\n</list>";
      }
      return $str."\r\n";
    } elseif(is_string($obj)) {
      return htmlspecialchars($obj) != $obj ? "<![CDATA[".$obj."]]>" : $obj;
    } elseif(is_scalar($obj))
      return $obj."\r\n";
    else
      throw new Exception("Unsupported type $obj");
  }
?>