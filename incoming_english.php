<?php
require_once("config.php");
require_once("twilio_utils.php");
$phone=$_REQUEST['Caller'];

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n
<Response>";
playFile("english_prompt.mp3");
//does some machine transcription
$actionUrl=$root_url."insert.php?language=creole";
$actionUrl.="&amp;phone=$phone";
echo "
    <Record transcribe='true' transcribeCallback='$actionUrl' 
        action='confirm.php' finishOnKey='#' maxLength='120' />";
echo "</Response>";

?>

