<!doctype html>
<html>
        <head>
               <script>
                    function check() { 
                        var nbr;
                        nbr =
Number (document.getElementbyId("myInput").value);
                if(nbr%2 == 0)
                {
                        alert("Nombre pair");
                }
                else
                {
                        alert("Nombre impair");
                }    
            }
            </script>
           </head>
           <body>
              Entrez un nombre : <input id="myInput">
              <button onclick="check()">Vérifier</button>
            </body>
           </html>     