<button type="button" onclick="setupAjax()">
    Click Me
</button>
<p id="content">
    Coming Soon
</p>
<script type="text/javascript">
    function setupAjax()
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
                document.getElementById("content").innerHTML=request.responseText;
            }
        }
        request.open("GET","test.txt", true);
        request.send();
    }
</script>