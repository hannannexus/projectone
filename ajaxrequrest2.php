<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Two</title>
</head>
<body>

    <h2>Ajax Call</h2>
    <div id="content">
    
    </div>

    <button type="button" id="btn" onClick="ajaxCall()">Make A Call </button>
    <script>
            function ajaxCall(){

                var http = new XMLHttpRequest();

               http.onreadystatechange = function(){

                    if( this.readyState == 4 && this.status == 200 ){
                        document.getElementById("content").innerHTML = this.responseText;
                        document.getElementById("content").style.background = "olive";
                        document.getElementById("content").style.color = "white";
                        document.getElementById("content").style.height = "200px";
                        document.getElementById("content").style.width = "200px";
                    }
                }

                http.open("POST","demo.txt",true);
                http.send();
            }
    </script>
</body>
</html>