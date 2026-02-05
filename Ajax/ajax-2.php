<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript">
        function show()
        {
            var request;
            if (window.XMLHttpRequest) 
            {
                request=new XMLHttpRequest();
            }
            else
            {
                request=new ActiveXObject("Microsoft.XMLHTTP");
            }

            request.onreadystatechange=function()
            {
                if (request.readyState==4 && request.status==200) 
                {
                    getData(request);
                }
            }
            request.open("GET", "mycrush.xml", true);
            request.send();

            function getData(xml)
            {
                var xmlDOC=xml.responseXML;
                var x=xmlDOC.getElementsByTagName("name");


                for (var i = 0; i < x.length; i++) 
                {
                    document.getElementById("displayArea").innerHTML+=x[i].childNodes[0].nodeValue+"<br>";
                }
            }
        }
    </script>
</head>
<body>
    <button onclick="show()">Show My Crush Name</button>
    <p id="displayArea"></p>
</body>
</html>