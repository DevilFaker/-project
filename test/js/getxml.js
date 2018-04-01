
<html>
<head>
</head>
<script>
function getxml()
{
    try //Internet Explorer
    {
        xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc.async=false;
        xmlDoc.load('clotheslisting2.xml');
    }
    catch(e)
    {
        try //Firefox, Mozilla, Opera, etc.
        {
            xmlDoc=document.implementation.createDocument("","",null);
            xmlDoc.async=false;
            xmlDoc.load('clotheslisting2.xml');
        }
        catch(e)
        {
            try //Google Chrome
            {
               var xmlhttp = new window.XMLHttpRequest();
               xmlhttp.open("GET",'clotheslisting2.xml',false);
               xmlhttp.send(null);
               xmlDoc = xmlhttp.responseXML.documentElement;
            }
            catch(e)
            {
                error=e.message;
            }
        }
    }
    return xmlDoc;
}

</script>

</body>
</html>