<?php
//Programmer: Alexander Curit
//Audio File Picker
//Description: This program is meant to take in a variable from the URL
//which corresponds with an audio file.  Built for Heidi's Kindergarten
//class.

if(!$_GET[code]){
  echo "No Audio file Selected / show all files?";
  exit();
}
$mp3File="http://audio.chirbit.com/Mrs_Ferg_$_GET[code].mp3";
echo "
<audio controls autoplay>
    <source src=\"http://audio.chirbit.com/Mrs_Ferg_$_GET[code].mp3\" type=\"audio/mpeg\">
Your browser does not support the audio element.
</audio>


";

?>
