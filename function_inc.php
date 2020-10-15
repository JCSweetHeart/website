<?php

// Function Werbung
function adsense()
{
    // Stautsänderung wegen Werbung (0 = AUS | 1 = An)
$status_werb = 0;

If ($status_werb == 1)
{
echo "<script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- Werbung_PrivateHP -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5862787031516169'
     data-ad-slot='3541702761'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> ";
}
 elseif ($status_werb === 0) {
    echo "<br><br>Werbung kommt bald";
} else {
    echo "Hier sollte <br> Werbung stehen";
}
}

//Function Changelog
function change()
{
    $fp = fopen("include/changelog/changelog.txt","r");
if($fp){
	while(!feof($fp)){
		$zeile = fgets($fp,100);
		echo "$zeile<br>";	
	}
	fclose($fp);
}
else
	echo "News wurden nicht gefunden";
}
//Kontaktformular - Funktion
Function contact()
{
// Kontaktformular
        /*
        Kontaktformular by: Jan 'JCSweetHeart' Claassen
        Letze Aktualisierung am: 17.02.2020
        Version: 0.0.5
        */
        $absender = '';
        $name = '';
        $empfang = 'jsweetheart1988@gmail.com';
        $text = '';
        $status_contact = 1; // 0 = aus | 1 = an

        
        if($status_contact == 1)
        {
      	echo "<br><br>Kontktformular<br><br>
       <form method='post' action='include/send_email.php'>
						<label for='Name'><b>Name:</b></label><br>
						<input type='text' id='Name' name='Name'><br><br>
 
						<label for='Email'><b>E-Mail:</b></label><br>
						<input type='text' id='Email' name='Email'><br><br>
 
						<label for='Betreff'><b>Betreff:</b></label><br>
						<input type='text' id='Betreff' name='Betreff'><br><br>
 
						<label for='Nachricht'><b>Nachricht:</b></label><br>
						<textarea id='Nachricht' name='Nachricht' rows='10' cols='50'></textarea> 							 			
						<br><br><input type='submit' name='submit'></form>";
        }
        //recaptcha();    
        
        elseif($status_contact == 0)
        {
            echo '<br><br><br>Kontaktformular momentan <b>nicht</b> verf&uuml;gbar, bitte E-Mail im Impressum nutzen!';
        }
}

// Function Header
function head()
{
echo "<center><img src='images/banner/logo.png' height='35%' width='75%'  alt='Banner'>";
echo '<script data-ad-client="ca-pub-5862787031516169" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
}

//Function Hello (Begrüssung)
function hello()
{
date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$uhrzeit = date("H:i",$timestamp);

switch ($uhrzeit)
{
case ("06:00"):
    echo "Guten Morgen,";
    break;
case ("12:00"):
    echo "Mahlzeit,";
    break;  
case ("14:00"):
    echo "Guten Tag,";
    break;
case ("18:00"):
    echo "Guten Abend,";
    break;
case ("22:00"):
    echo "Hallo Nachtschw&auml;rmer,";
    break;
case ("23:59"):
    echo "Nachtschw&auml;rmer im Anflug .. Halllooo...!";
    break;
  default:
  echo "Herzlich Willkommen,";
  break;
}
    
}

// Footer
function footer()
{
$vers1 = "1"; // Hauptversion
$vers2 = "4"; //Haupt-Subversion
$vers3 = "0"; // Werksversion (mittlere Arbeiten)
$vers4 = "1"; // Sub - Werksversion (kl. Arbeiten)
$version = $vers1 .".". $vers2.".".$vers3.".".$vers4;
$cr = "&copy; 2020 by Jan Claassen";
$status = "BETA";
$stand = "06.10.2020";

echo "<center>".$cr . " Version: $version - Status: " .$status. " || "."Last Update: $stand</center>";
}

//function gallery
Function gallery()
{
     // Config - Dateien
$gall_stat = 1; // Status der Gallerie (0 = AUS | 1 = AN)
$count_temp = 0;  // Temporärer Counter!
$copyright = "Alle Bilder &copy; 2019 by Jan &quot;JCSweetHeart&quot; Claassen ";
//$count_imgpp = count($img_pp);   /// Counter für PetPlay_Bilder (=pp)

// Bilder

        // PetPlay
//            $img_pp[] = "<a href='images/gallery/folsum2019berlin1.jpg' target='_blank'><img src='images/gallery/folsum2019berlin1.jpg' width='300px' height=200px' alt='folsum001'></a>";
//            $img_pp[] = "<a href='images/gallery/folsum2019berlin2.jpg' target='_blank'><img src='images/gallery/folsum2019berlin2.jpg' width='300px' height=200px' alt='folsum002'></a>";
//            $bosko_insta = "<a href='https://www.instagram.com/p/B3QOxQSoekW/' target='_blank'><img src='https://www.instagram.com/p/B3QOxQSoekW/' width='300px' height=200px' alt='bosko001'></a>";


//$img_out = $img_pp[sort($img_pp)];


if ($gall_stat === 1)
{
echo "<b><u>PetPlay-Fotos</u></b><br><br>";
// LightWidget WIDGET 
echo '<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/206921fb0c545d62922f49420a07560d.html" scrolling="no" allowtransparency="false" class="lightwidget-widget" style="width:430px;height:25%;border:0;overflow:hidden;"></iframe>';
//echo $img_out;
echo "<br>";
echo $copyright;
}

elseif ($gall_stat == 0)     
{
 echo "Gallery moemtan <br><br><b>ausser Betrieb</b><br><br>- versuche es sp&auml;ter nochmal -";
} 
}

//Function Language
function language()
{
            $lang_status = 1;

            if ($lang_status == 1)
            {
           echo "<br><br><br>"; 
           echo '<form method="Post">
          <label>Please select Your Language:</label>
          <button name="lang" value="de"><img src="images/lang/flag_de.png" alt="DE"></img></button>
          <button name="lang" value="en"><img src="images/lang/flag_eng.png" alt="EN"></img></button>
          <button name="lang" value="se"><img src="images/lang/flag_se.png" alt="SE"></img></button>
            </form>';
           
           lang_select();
           exit();
            }
                elseif($lang_status == 0)
                {
                 echo '<br><br><br>Die Sprachauswahl ist momentan <b>deaktiviert</b>, bitte versuche es sp&auml;ter nochmal!<br>
                    Sorry, the Language - Selection is momently <b>deactivated!</b> Please try it later';
                 exit();
                }
}

function lang_select()
{
    $lang = null;
    //$lang_select = null;
    $lang_select = implode($lang, $_POST);
        
       $header1 = '/home.php';
       $header2 = '/en/index.php';
       $header3 = '/se/index.php';

    if($lang_select == "de")
    {
        header('Location:'.$header1);
        exit();
    }
        elseif($lang_select == "en")
        {
           header('Location: '.$header2);
            exit();
        }
            elseif($lang_select == "se")
            {
                echo '<br><br>Sorry, this Language is momemtly not avaible...!';
               //header('Location: '.$header3);
               //exit();
             }
             
             else
             { }
             
}
//Navigation
function nav()
{
echo'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="navbar">
  <a href="home.php">Start</a>
  <div class="subnav">
    <button class="subnavbtn">News&Co <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="news.php">News</a>
      <a href="change.php">Changelog</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">&Uuml;ber <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="about.php">...mich</a>
      <a href="myshow.php">..Sendungen</a>
      <a href="https://www.youtube.com/channel/UChlNk65evstXjCudYWs7qJQ" target="_blank">..YT-Channel</a>
      <a href="https://www.youtube.com/channel/UCTf5A49AcoZRtWA0rkjSR8Q" target="_blank">..GamingChannel</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Mediathek <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="gallery.php">Bilder</a>
      <a href="chat.php">Chat</a>
      <a href="sprueche.php">Spr&uuml;che</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Sonstiges <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="partner.php">Partner/Sponsoren</a>
      <a href="contact.php">Kontakt</a>
    </div>
  </div>
  <a href="impress.php">Impressum</a>
</div>';
}

//Function news
function news()
{
$news_stat = 1;

if($news_stat == 1)
{
$fp = fopen("include/news/news.txt","r");
if($fp){
	while(!feof($fp)){
		$zeile = fgets($fp,100);
		echo "$zeile<br>";	
	}
	fclose($fp);
}
    else
    {
            echo "News wurden nicht gefunden";
    }
}
        elseif($news_stat == 0)
        {
         echo "News momentan nicht verf&uuml;gbar, bitte versuche es sp&auml;ter nochmal!";
        }
}

// ----- RADIO - TEIL --------- //
$radio_name = "Grenzradio.eu</b>";                          //Name des Radios
$radio_url = "http://grenzradio.eu/";                       // URL zum Radio
$radio_listen = 'http://138.201.234.214:9958/listen.pls';   // Streamlink des Radios
$radio_status = 1;                                          // Radio - Status (0 = AUS | 1 = AN)
$show_stat = 1;                                             // Show - Angaben (0 = AUS | 1 = AN)



function show()
{
        global $show_stat;
        global $radio_name;
        global $radio_url;
        
        $radio_sDate = "14.10.2020 (Engl. Formatdate: 14/10/2020)";
        
            if($show_stat == 1)
            {
          echo "<br><br>auf der Sendungsseite ... hier findest du alle Infos rund um meine Sendungen<br><br><br>
            Mein aktuelles Webradio: <a href='$radio_url' target='_blank'>$radio_name</a><br><br>
            <b><u>Meine normale Sendungen:</b></u><br><br>
            Sendungsname: <b>Halbzeit! - Eure Sendung zur Mitte der Woche:</b> <br>
            Sendezeit: <b>Jeden Mittoch</b> von 18 - 20 Uhr<br><br>
            Geplantes Startdatum: <b> $radio_sDate</b>
             <br><br>
             <i>Alle Angaben ohne Gew&auml;hr - bitte im Sendeplan von $radio_name schauen!</i>
             <br><br>
             -------------------------
             <br><br>
             <b><u>Sondersendungen:</u></b>
             <br><br>
             Sendungsname: Halbzeit! *Sweden - Special* <i><b>- unregelm&auml;ssig!</i></b><br>
             Das kleine Schweden - Special, mit deutscher und englischer Moderation :D<br><br>
             Sendezeit: <b>unregelm&auml;ssig</b> - wird vorrausstichlich ab 2021 regelm&auml;ssiger!
             <br><br>
             -------------------------
             <br><br>
           Sendungsname: &#9924; Kick2Week *XMas-Special*&#9924; - Weihnachtlicher Chaos & Humor: <br>
           Sendezeit: <b>Jeden</b> Adventssonttag von 18 - 20 Uhr 
            <br><br>
            (<b>HINWEIS:</b> <i>Findet NICHT jedes Jahr statt, aus privaten Gr&uuml;nden</i>)
            <br><br><br>
            
            <b><u>Alte Sendungen:</u></b>
            <br>
            <br>
            Kick2Week - Eure Sendung zum Ende der Woche<br><br>
                    MusikBox - Eure Gr&uuml;sse <b>UND</b> W&uuml;nsche - <b>Sendung, ohne festen Plan</b>";
            }
                elseif($show_stat == 0)
                {
                    echo "<br><br>
                    <b>!! ACHTUNG:</b><br><br>
                    Momentan finden aus pers&ouml;nlichen Gr&uuml;nden finden<br>
                    <b>keine</b> Sendungen von mir statt!<br><br><br>";
                }
}

// Function Radio - Player
function radio_stat()
{
global $radio_status;
global $radio_listen;
global $radio_name;


    // Player - Function
    function player()
    {
    global $radio_name;
    global $radio_url;
    global $radio_listen;
	echo '<iframe align="center" src="http://www.grenzradio.eu/streambox/stream_box.php?style=6"
	style="border:0px none" height="260" width="150"
	scrolling="no" frameborder="0"></iframe>';
	//----ENDE STREAMBOX CODE----//>
    }
}

// -----  ENDE RADIO - TEIL ------ //


//Function Partner/Sponsoren
function partner()
{
	$ps_stat = 1; // 0 = deaktiviert | 1 = aktiviert
	$radio1_url = "http://grenzradio.eu/";
	$radio1 = "http://grenzradio.eu/images/bilder_upload/Banner468X6001.jpg";
	
	if ($ps_stat == 0)
	{
	echo "Dieser Bereich wird momentan überarbeitet, bitte versuche es sp&auml;ter nochmal!";
	}
	elseif($ps_stat == 1)
	{
		echo "<br><br><a href=$radio1_url target='_blank'><img src=$radio1></img></a>";
	}
}

//Spruch - Function
function spruch()
{
$spruch[] = "Lass mich das machen, ich kann das ... OOHH kaputt";
$spruch[] = "DAS Internet ist f&uuml;r uns Neuland - ja ist klar";
$spruch[] = "Hallo, ist da jemand? Haalllooo .... Telefon wohl kaputt";
$spruch[] = "Bitte warten Sie, der Anrufer der Hotline steht f&uuml;r sie in wenigen Augenblicken zu Verf&uuml;gung";
$spruch[] = "Letzer Satz eines Klempners? Blubbbb blubbb xD";
$spruch[] = "Berlin, ick liebe dir";
$spruch[] = "Bier wird mit CO2 gezapft. Trink und geniesse es, bevor Greta es erf&auml;hrt";
$spruch[] = "Wenn du eine Pechstr&auml;hne hast, f&auml;rbe sie Pink";
$spruch[] = "Ich sehe Farben, wenn ich Kaffee mit Redbull koche";
$spruch[] = "Das Leben ist immer wertvoll, mach es aber mal bunt";

$spruch_count = count($spruch); //Sprüche zählen
$random_spruch = array_rand($spruch);
$spruch_out = 0;

if($spruch_out < $spruch_count && $random_spruch =! $spruch_out)
{        
$spruch_output = $spruch[$random_spruch];

echo $spruch_output;
echo "<br><br><a href='javascript:location.reload()' target='_self'>>>> Neuer Witz laden <<<<</a>";
//Spruchzähler --> 
echo "<br><br><br>Anzahl der aktuellen Spr&uuml;che: $spruch_count";
$spruch_out = $random_spruch;
}
}

//Function ReCaptcha
function recaptcha()
{
//Recaptcha by Google eingügen inkl. Klasse
echo ' <div class="g-recaptcha" data-sitekey="6LfgT-QSAAAAAJvgQ4Qob0t21HyDgtlME2j-3-Mr"></div>';

//$secretkey = "6LfgT-QSAAAAAFSAzf6ilGqa-udM8a8ITBGuf7KY";
//  $antwortJSON = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
//  $antwortDaten = json_decode($antwortJSON);
//
//  if($antwortDaten->success){
//}
}

// Arbeitsstatus (Wartungsmodus)
function workstat()
{
$status = 0; // Status: 0 = Aus | 1 = An!
$workpage = "../work.php";

    if ($status == 1)
    {
        header('Location: '.$workpage);
        exit();
    }
        ElseIf ($status == 0)
        {
            
        }
}