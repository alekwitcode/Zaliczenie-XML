<?xml version="1.0" encoding="UTF-8"?>
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
        
      

       <table border="1" width="100%" align="center" style="font:10px Arial;" >
         <tr height="50px" bgcolor="#00FFFF">
         <xsl:for-each select="full-response/list/list-item/item">
         <th style="table-layout:fixed; width:50px">
        <xsl:value-of select="@key"/>
        </th>
        </xsl:for-each>
        </tr>
        </table>
        
          <table border="1" width="100%" align="center" style="font:10px Arial;">
         <tr height="100px">
         <xsl:for-each select="full-response/list/list-item/item">
        <th style="table-layout:fixed; width:50px">
        <xsl:value-of select="text()"/>
        </th>
        </xsl:for-each>
        </tr>
       </table>
    
    
      </body>
      </html>
    </xsl:template>
    </xsl:stylesheet>
	
	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>

	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>
	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>
	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>

  	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>

	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>

	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>

	
<list>
<list-item>	
	
<item key="id">
2244994945
</item>
<item key="name">
Twitter Dev
</item>
<item key="username">
TwitterDev
</item>

</list-item>
</list>
</full-response>