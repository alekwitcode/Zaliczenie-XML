<?xml version="2.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<request xsi:noNamespaceSchemaLocation="request-schema.xsd">
<xsl:template match="/">

  <html>
  <body>
    <h2 align="center">Testing grounds</h2>
   <table border="1" width="80%" align="center">
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
</xsl:stylesheet>

