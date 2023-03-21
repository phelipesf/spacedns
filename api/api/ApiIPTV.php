<?php
$Tag = $_GET['tag'];
$Nai = $_GET['naI'];
$UserID = $_GET['userid'];
$cid = $_GET['cid'];
$aid =$_GET['aid'];

if (isset($_GET['tag']))
{
    if ($Tag == "licV3")
    {
        echo bin2hex(openssl_encrypt(file_get_contents("./main.json") , "AES-128-CBC", "mysecretkeywsdef", OPENSSL_RAW_DATA, "myuniqueivparamu"));
    }
    if ($Tag == "man" || $Tag == "ann")
    {
        echo file_get_contents("./" . $Tag . ".json");
    }
    if ($Tag == "conn" || $Tag == "msg_conf")
    {
        echo '{"tag":"' . $Tag . '","success":"1","api_ver":"1.0v"}';
    }
    if ($Tag == "whatsup")
    {
        echo '{"tag":"whatsup","success":"0","api_ver":"1.0v","whatsup":"no"}';
    }
    if ($Tag == "gfilter")
    {
        echo '{"tag":"gfilter_n","success":"1","api_ver":"1.0v","status":"No","filter":[]}';
    }

    if ($Tag == "msg_cat_view" || $Tag == "msg")
    {
        $db = new SQLite3('./user_message.db');
        $res = $db->query("SELECT * FROM messages WHERE userid='" . $UserID . "'");
        $row = $res->fetchArray();
        $message = $row['message'];
        $userid = $row['userid'];
        $status = $row['status'];
        $expire = $row['expire'];
        if (empty($message))
        {
            echo '{"tag":"' . $Tag . '","success":"0","api_ver":"1.0v","message":"No Messages"}';
        }
        else
        {
            echo '{"tag":"' . $Tag . '","success":"1","api_ver":"1.0v","status":"$status","msgid":"1646","message":"$message"}';
        }
    }
    if($Tag == "connv2")
    {
        $db = new SQLite3('./user_message.db');
        $res = $db->query("SELECT * FROM messages WHERE userid='" . $UserID . "'");
        $row = $res->fetchArray();
        $msgid = $row['id'];
        $message = $row['message'];
        $userid = $row['userid'];
        $status = $row['status'];
        $expire = $row['expire'];

        $jsonData = file_get_contents("./connv2.json");

        if($message != '')
        {

            $arrayData = json_decode($jsonData, true);
            $replacementData = array(
                'success' => '1',
                'message' => $message,
                'msg_status' => $status,
                'msg_expire' => $expire,
                'msgid' => $msgid
            );
            $newArrayData = array_replace_recursive($arrayData, $replacementData);
            $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
            echo $newJsonData;
        }
        else
        {
            echo file_get_contents("./connv2.json");
        }
    }
    if($Tag == "vpnconfigV2")
    {
        $output = '{"tag":"vpnconfigV2","success":"1","api_ver":"1.0v","vpnconfigs":[';

        $db = new SQLite3('./vpn_config.db');
        $res = $db->query("SELECT * FROM vpnconfig");

        while ($row = $res->fetchArray()) {
            $id = $row['id'];
            $userid = $row['userid'];
            $vpn_appid = $row['vpn_appid'];
            $vpn_country = $row['vpn_country'];
            $vpn_state = $row['vpn_state'];
            $vpn_config = $row['vpn_config'];
            $vpn_status = $row['vpn_status'];
            $auth_type = $row['auth_type'];
            $auth_embedded = $row['auth_embedded'];
            $username = $row['username'];
            $password = $row['password'];
            $vdate = $row['vdate'];

            if(!empty($vpn_config))
            {
                $output.='{"id":"'.$id.'","userid":"'.$cid.'","vpn_appid":"'.$aid.'","vpn_country":"'.$vpn_country.'","vpn_state":"'.$vpn_state.'","vpn_config":"'.$vpn_config.'","vpn_status":"'.$vpn_status.'","auth_type":"'.$auth_type.'","auth_embedded":"'.$auth_embedded.'","username":"'.$username.'","password":"'.$password.'","date":"'.$vdate.'"},';
            }
        }
        $x = substr($output, -1);
        if($x == ",")
        {
            $output=substr_replace($output,"",-1);
        }
        $output.=']}';
        echo bin2hex(openssl_encrypt($output, "AES-128-CBC", "mysecretkeywsdef", OPENSSL_RAW_DATA, "myuniqueivparamu"));
    }
}
else
{
    include ('index.php');
}
?>
