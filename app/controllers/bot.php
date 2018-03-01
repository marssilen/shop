<?php
class Bot extends Controller
{
    public $website="https://api.telegram.org/bot".'508765154:AAE6stiYC9ryLFTYIU-eHCplo8btqdcXywg';
    function index(){
        ini_set('error_reporting',E_ALL);
        $botToken="508765154:AAE6stiYC9ryLFTYIU-eHCplo8btqdcXywg";
        $website="https://api.telegram.org/bot".$botToken;

        $update=file_get_contents('php://input');
        $update=json_decode($update,TRUE);

        $chatId=$update['message']['chat']['id'];
        $message=$update['message']['text'];

        switch($message){
            case "admin":
            case "test":
            case "/test":
                $this->getAdmin($chatId);
                break;
            case "hi":
            case "/hi":
                $this->getdetail($chatId,"سلام");
                break;
            case "member":
                $this->getMembers($chatId);
                break;
            case "photo":
                $this->sendPhoto($chatId,"beauti<b>ful</b> photo");
                break;
            case "gal":
                $this->sendPhotoGallery($chatId);
                break;
            case "action":
                $this->sendAction($chatId,"doing jobs");
                break;
            case "leave":
                $this->leave($chatId);
                break;
            case "count":
                $this->count($chatId);
                break;
            case "check":
                $this->sendMessage($chatId,$update);
                break;
            case "delete":
                $this->deleteMessage($chatId,1);
                break;
            default:
                $this->sendMessage($chatId,"مخلص همگی");
        }
    }
    function sendMessage($chatId,$message){
        $url=$this->website."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
    }
    function sendPhoto($chatId,$message){
        $url=$this->website."/sendPhoto?chat_id=".$chatId."&photo="."AgADBAADkQw8G4MdZAfl8_OiY2Lg_FPBihoABWpPzhnp640P3gACAg"."&caption=".urlencode($message).'&parse_mode=HTML';
        $detail=file_get_contents($url);
        $this->sendMessage($chatId,$detail);
    }
    function sendPhotoGallery($chatId){
        $url=$this->website."/sendMediaGroup?chat_id=".$chatId.
            "&media=".'[{"type"="photo","media":"AgADBAADkQw8G4MdZAfl8_OiY2Lg_FPBihoABWpPzhnp640P3gACAg"},{"type"="photo","media":"AgADBAADkQw8G4MdZAfl8_OiY2Lg_FPBihoABBOi5wzAAAEnuhDeAAIC"},{"type"="photo","media":"AgADBAADkQw8G4MdZAfl8_OiY2Lg_FPBihoABEKWSzCHZbuuEd4AAgI"}]';
        $detail=file_get_contents($url);
        $this->sendMessage($chatId,$detail);
    }
    function getAdmin($chatId){
        $url=$this->website."/getChatAdministrators?chat_id=".$chatId;
        $text=file_get_contents($url).' end';
        $this->sendMessage($chatId,$text);
    }
    function getMembers($chatId){
        $url=$this->website."/getChatMember?chat_id=".$chatId;
        $text=file_get_contents($url).' end';
        $this->sendMessage($chatId,$text);
    }
    function getdetail($chatId,$message){
        $url=$this->website."/getChatAdministrators?chat_id=".$chatId;
        $url=$this->website."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        $text=file_get_contents($url).' end';
        $this->sendMessage($chatId,$text);
    }
    function sendAction($chatId,$message){
        $url=$this->website."/sendMessage?chat_id=".$chatId."&action=".urlencode($message);
        file_get_contents($url);
    }
    function leave($chatID){
        $url=$this->website."/leaveChat?chat_id=".$chatID;
        file_get_contents($url);
    }
    function count($chatID){
        $url=$this->website."/getChatMembersCount?chat_id=".$chatID;
        file_get_contents($url);
    }
    function deleteMessage($chatID,$msgId){
        $url=$this->website."/deleteMessage?chat_id=".$chatID."&message_id=".$msgId;
        file_get_contents($url);
    }

}
