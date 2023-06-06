<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' type='text/css' href='style.css' />
    <script type="text/javascript" src="script.js"></script>
    <title>Chuj.sex.pl</title>
</head>
<body>
    <div id="main">
        <a href="index.html"><img src="Logo.png" id="logo" alt=""></a>
    <nav id="menu">
        <a href="index.html"><button>MC</button></a>
        <a href="zgloszenie.php"><button>Zgłoszenie</button></a>
        <a href="#"><button>Wkrótce...</button></a>
        <a href="#"><button>Wkrótce...</button></a>
    </nav>
    <form id="zgloszenieForm" method="POST" onsubmit="return walidacja()">
        <p>Imię:</p>
        <input type="text" name="imie" id="imie" placeholder="Twoje imię">
        <p>Kontakt:</p>
        <select name="platforma" id="platforma" >
            <option name="platforma" value="Ig">Instagram</option>
            <option name="platforma" value="Discord" selected="selected" >Discord</option>
        </select>
        <input type="text" name="kontakt" id="kontakt" placeholder="Nazwa IG lub Discord">
        <p>Nick w grze:</p>
        <input type="text" name="nick" id="nick" placeholder="Twój nick z mc">
        <p>Opisz siebie:</p>
        <textarea name="opis" id="opis" placeholder="np. Dzień dobry, nazywam się Zbigniew Kucharski, jestem pedałem i ekshibicjonistą..." cols="30" rows="5"></textarea>
        <input id="submit" type="submit" name="przycisk" value="Wyślij zgłoszenie">
    </form>  
    </div>
    
</body>
</html>

<?php
    if(isset($_POST['przycisk']))
    {
        $imie=$_POST['imie'];
        $platforma=$_POST['platforma'];
        $kontakt=$_POST['kontakt'];
        $nick=$_POST['nick'];
        $opis=$_POST['opis'];
        $file = fopen('daneZForm.txt', 'a');
        fwrite($file, "=====================================\n");
        fwrite($file, "Imie : ");
        fwrite($file, $imie ."\n");
        fwrite($file, $platforma.": ");
        fwrite($file, $kontakt ."\n");
        fwrite($file, "Nick : ");    
        fwrite($file, $nick ."\n");
        fwrite($file, "Opis : ");    
        fwrite($file, $opis ."\n");
        fwrite($file, "=====================================\n");
        fclose($file);
    }
        
        
        
?>