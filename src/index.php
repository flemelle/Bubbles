<!DOCTYPE html>

<html>
    <head>
        <title>Bubbles</title>
        <meta charset = "utf-8" />
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = 'icon' href = 'img/favicon.ico' type = 'image/x-icon'/>
    </head>
    <body>
        <div id = "pond">
            <canvas id = "canvas">The browser doesn't support the canvas element</canvas>
            
        </div>
        <div id = 'slidecontainer'>
            <div>
                <input type = 'range' min = '0' max = '255' name = 'red'>
            </div>
            <div>
                <input type = 'range' min = '0' max = '255' name = ' green'>
            </div>
            <div>
                <input type = 'range' min = '0' max = '255' name = 'blue'>
            </div>
            <div>
                <input type = 'range' min = '0' max = '10' name = 'alpha'>
            </div>
        </div>
        <div id = 'intro'>
            <div id = 'message'>
                <div><p><h1>BUBBLES</h1></p></div>
                <div>
                    <p>
                        Ce script fait des bulles colorées de taille et de couleur aléatoire. Pour afficher les bulles, il suffit simplement de déplacer son curseur sur la page. Pour réinitialiser le canva, cliquez.
                    </p>
                </div>
                <div>
                    <p>
                        Cliquez pour fermer ce message.
                    </p>
                </div>
            </div>
        </div>
        <script src = "script/script.js"></script>
    </body>
</html>
