<!DOCTYPE html> <!-- Sellest peab alustama, muidu �lej��nud kood ei toimi-->
<html>
<head>
    <link type="text/css" rel="stylesheet" href="style.css"/><!--Sellega v�tab kasutusele CSS-i -->
    <title>Avaleht</title>
</head>
git config --global user.name "Heigo Kure"
<body>
<hr/><!--Teeb joonen veebilehek�ljele-->
<div id="One"><!--Teen Div-i, et saaks mugavamalt oma listidele disaini anda CSS-is-->
    <ul id="ull"><!--Algavad listid-->
        <li><p>Huvid</p>
            <ul id="ull1">
                <li><a href="http://localhost:63342/Hoidla/Janre1.php" a>Arvutid</a></li>
                <li ><a href="http://localhost:63342/Hoidla/JanreFilm.php" a>Filmide vaatamine</a></li><!--Listid pluss lingid -->
                <li ><a href="http://localhost:63342/Hoidla/JanreSport.php" a>Sport</a></li>
                <li ><a href="http://localhost:63342/Hoidla/JanreMuusika.php" a>R�pp muusika</a></li>
            </ul>
        </li>
        <li><p>Koolid kus k�inud olen</p>
            <ol>
                <li><a href="http://localhost:63342/Hoidla/JanrePohikool.php" a>V�ru I P�hikool</a></li>
                <li><a href="http://localhost:63342/Hoidla/JanreGumnaasium.php" a>V�ru Kreutzwaldi G�mnaasium</a></li><!--Veel liste -->
                <li><a href="http://localhost:63342/Hoidla/JanreKutsekas.php" a>Tartu Kutsehariduskeskus</a></li>
            </ol>
        </li>
        <li><p>Lemmik n�itlejad</p>
            <ul id="ull1" ">
        <li><a href="http://localhost:63342/Hoidla/JanreNaitlejad.php" a>Kevin Hart</a></li>
        <li><a href="http://localhost:63342/Hoidla/JanreNaitlejad.php" a>Jason Statham</a></li><!--ja isegi veel rohkem liste -->
        <li><a href="http://localhost:63342/Hoidla/JanreNaitlejad.php" a>Channing Tatum</a></li>
    </ul>
    </li>
    </ul>
</div>
</body>
</br>
<div id="bod"> <!--Veel �ks div, et asjadele disaini anda CSS-is-->
    <h3><img id="fot"src="http://andreakihlstedt.com/wpsys/wp-content/uploads/2014/04/Say-Hello1.jpg"><!--Pilt ja v�ike Welcome s�num -->
        Tervist minu kodulehele!</h3>
</div>

</html>