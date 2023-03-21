<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $jsondata = file_get_contents("./api/main.json");
    $data = json_decode($jsondata, true);
    $json = $data['app'];
    $message = '<div class="has-sidebar-left has-sidebar-tabs"><div class="container-fluid relative animatedParent animateOnce p-lg-5"><div class="alert alert-success" id="flash-msg"><center><h4 style="color:white!important"><i class="icon fa fa-check"></i>Updated!</h4></center></div></div></div>';
    $lurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER["PHP_SELF"]) . '/api/';

    if (isset($_POST['submit_support']))
    {
        $jsonData = file_get_contents("./api/main.json");
        $arrayData = json_decode($jsonData, true);
        if (empty($_POST["announcement_enabled"]))
        {
            $announcement_enabled = 'no';
        }
        else
        {
            $announcement_enabled = $_POST["announcement_enabled"];
        }
        if (empty($_POST["message_enabled"]))
        {
            $message_enabled = 'no';
        }
        else
        {
            $message_enabled = $_POST["message_enabled"];
        }
        if (empty($_POST["updateuserinfo_enabled"]))
        {
            $updateuserinfo_enabled = 'no';
        }
        else
        {
            $updateuserinfo_enabled = $_POST["updateuserinfo_enabled"];
        }
        if (empty($_POST["btn_login_account"]))
        {
            $btn_login_account = 'no';
        }
        else
        {
            $btn_login_account = $_POST["btn_login_account"];
        }
        if (empty($_POST["login_type"]))
        {
            $login_type = 'login';
        }
        else
        {
            $login_type = $_POST["login_type"];
        }
        if (empty($_POST["version_code"]))
        {
            $version_code = '589';
        }
        else
        {
            $version_code = $_POST["version_code"];
        }

        $replacementData = array(
            'app' => array(
                'announcement_enabled' => $_POST['announcement_enabled'],
                'message_enabled' => $_POST['message_enabled'],
                'updateuserinfo_enabled' => $_POST['updateuserinfo_enabled'],
                'appname' => $_POST['appname'],
                'customerid' => $_POST["customerid"],
                'expire' => 'No Expiration',
                'version_code' => $version_code,
                'support_email' => $_POST["support_email"],
                'support_phone' => $_POST["support_phone"],
                'login_type' => $_POST["login_type"],
                'btn_signup' => $_POST["btn_signup"],
                'btn_login_account' => $_POST["btn_login_account"],
                'btn_login_settings' => $_POST["btn_login_settings"],
                'logurl' => $lurl
            )
        );

        $newArrayData = array_replace_recursive($arrayData, $replacementData);
        $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
        file_put_contents("./api/main.json", $newJsonData);
        header("Location: app.php?message=$message");
    }
    if (isset($_POST['submit']))
    {
        $jsonData = file_get_contents("./api/main.json");
        $arrayData = json_decode($jsonData, true);
        $replacementData = array(
            'app' => array(

                'portal' => $_POST['portal'],
                'portal2' => $_POST["portal2"],
                'portal3' => $_POST["portal3"],
                'portal4' => $_POST["portal4"],
                'portal5' => $_POST["portal5"],
                'portal_name' => $_POST["portal_name"],
                'portal2_name' => $_POST["portal2_name"],
                'portal3_name' => $_POST["portal3_name"],
                'portal4_name' => $_POST["portal4_name"],
                'portal5_name' => $_POST["portal5_name"],
                'portal_vod' => $_POST["portal_vod"],
                'portal_series' => $_POST["portal_series"],
                'epg_url' => $_POST["epg_url"],
                'ovpn_url' => $_POST["ovpn_url"],
                "stream_type" => $_POST["stream_type"]
            )
        );
        $newArrayData = array_replace_recursive($arrayData, $replacementData);
        $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
        file_put_contents("./api/main.json", $newJsonData);
        header("Location: app.php?message=$message");
    }

    if (isset($_POST['submit_app_custom']))
    {
        $jsonData = file_get_contents("./api/main.json");
        $arrayData = json_decode($jsonData, true);

        if (empty($_POST["btn_live"]))
        {
            $btn_live = 'No';
        }
        else
        {
            $btn_live = $_POST["btn_live"];
        }
        if (empty($_POST["btn_live2"]))
        {
            $btn_live2 = 'No';
        }
        else
        {
            $btn_live2 = $_POST["btn_live2"];
        }
        if (empty($_POST["btn_live3"]))
        {
            $btn_live3 = 'No';
        }
        else
        {
            $btn_live3 = $_POST["btn_live3"];
        }
        if (empty($_POST["btn_live4"]))
        {
            $btn_live4 = 'No';
        }
        else
        {
            $btn_live4 = $_POST["btn_live4"];
        }
        if (empty($_POST["btn_live5"]))
        {
            $btn_live5 = 'No';
        }
        else
        {
            $btn_live5 = $_POST["btn_live5"];
        }
        if (empty($_POST["btn_vod"]))
        {
            $btn_vod = 'No';
        }
        else
        {
            $btn_vod = $_POST["btn_vod"];
        }
        if (empty($_POST["btn_vod2"]))
        {
            $btn_vod2 = 'No';
        }
        else
        {
            $btn_vod2 = $_POST["btn_vod2"];
        }
        if (empty($_POST["btn_vod3"]))
        {
            $btn_vod3 = 'No';
        }
        else
        {
            $btn_vod3 = $_POST["btn_vod3"];
        }
        if (empty($_POST["btn_vod4"]))
        {
            $btn_vod4 = 'No';
        }
        else
        {
            $btn_vod4 = $_POST["btn_vod4"];
        }
        if (empty($_POST["btn_vod5"]))
        {
            $btn_vod5 = 'No';
        }
        else
        {
            $btn_vod5 = $_POST["btn_vod5"];
        }
        if (empty($_POST["btn_epg"]))
        {
            $btn_epg = 'No';
        }
        else
        {
            $btn_epg = $_POST["btn_epg"];
        }
        if (empty($_POST["btn_epg2"]))
        {
            $btn_epg2 = 'No';
        }
        else
        {
            $btn_epg2 = $_POST["btn_epg2"];
        }
        if (empty($_POST["btn_epg3"]))
        {
            $btn_epg3 = 'No';
        }
        else
        {
            $btn_epg3 = $_POST["btn_epg3"];
        }
        if (empty($_POST["btn_epg4"]))
        {
            $btn_epg4 = 'No';
        }
        else
        {
            $btn_epg4 = $_POST["btn_epg4"];
        }
        if (empty($_POST["btn_epg5"]))
        {
            $btn_epg5 = 'No';
        }
        else
        {
            $btn_epg5 = $_POST["btn_epg5"];
        }
        if (empty($_POST["btn_series"]))
        {
            $btn_series = 'No';
        }
        else
        {
            $btn_series = $_POST["btn_series"];
        }
        if (empty($_POST["btn_series2"]))
        {
            $btn_series2 = 'No';
        }
        else
        {
            $btn_series2 = $_POST["btn_series2"];
        }
        if (empty($_POST["btn_series3"]))
        {
            $btn_series3 = 'No';
        }
        else
        {
            $btn_series3 = $_POST["btn_series3"];
        }
        if (empty($_POST["btn_series4"]))
        {
            $btn_series4 = 'No';
        }
        else
        {
            $btn_series4 = $_POST["btn_series4"];
        }
        if (empty($_POST["btn_series5"]))
        {
            $btn_series5 = 'No';
        }
        else
        {
            $btn_series5 = $_POST["btn_series5"];
        }
        if (empty($_POST["btn_radio"]))
        {
            $btn_radio = 'No';
        }
        else
        {
            $btn_radio = $_POST["btn_radio"];
        }
        if (empty($_POST["btn_radio2"]))
        {
            $btn_radio2 = 'No';
        }
        else
        {
            $btn_radio2 = $_POST["btn_radio2"];
        }
        if (empty($_POST["btn_radio3"]))
        {
            $btn_radio3 = 'No';
        }
        else
        {
            $btn_radio3 = $_POST["btn_radio3"];
        }
        if (empty($_POST["btn_radio4"]))
        {
            $btn_radio4 = 'No';
        }
        else
        {
            $btn_radio4 = $_POST["btn_radio4"];
        }
        if (empty($_POST["btn_radio5"]))
        {
            $btn_radio5 = 'No';
        }
        else
        {
            $btn_radio5 = $_POST["btn_radio5"];
        }
        if (empty($_POST["btn_catchup"]))
        {
            $btn_catchup = 'No';
        }
        else
        {
            $btn_catchup = $_POST["btn_catchup"];
        }
        if (empty($_POST["btn_catchup2"]))
        {
            $btn_catchup2 = 'No';
        }
        else
        {
            $btn_catchup2 = $_POST["btn_catchup2"];
        }
        if (empty($_POST["btn_catchup3"]))
        {
            $btn_catchup3 = 'No';
        }
        else
        {
            $btn_catchup3 = $_POST["btn_catchup3"];
        }
        if (empty($_POST["btn_catchup4"]))
        {
            $btn_catchup4 = 'No';
        }
        else
        {
            $btn_catchup4 = $_POST["btn_catchup4"];
        }
        if (empty($_POST["btn_catchup5"]))
        {
            $btn_catchup5 = 'No';
        }
        else
        {
            $btn_catchup5 = $_POST["btn_catchup5"];
        }
        if (empty($_POST["btn_account"]))
        {
            $btn_account = 'no';
        }
        else
        {
            $btn_account = $_POST["btn_account"];
        }
        if (empty($_POST["btn_account2"]))
        {
            $btn_account2 = 'no';
        }
        else
        {
            $btn_account2 = $_POST["btn_account2"];
        }
        if (empty($_POST["btn_account3"]))
        {
            $btn_account3 = 'no';
        }
        else
        {
            $btn_account3 = $_POST["btn_account3"];
        }
        if (empty($_POST["btn_account4"]))
        {
            $btn_account4 = 'no';
        }
        else
        {
            $btn_account4 = $_POST["btn_account4"];
        }
        if (empty($_POST["btn_account5"]))
        {
            $btn_account5 = 'no';
        }
        else
        {
            $btn_account5 = $_POST["btn_account5"];
        }
        if (empty($_POST["ms"]))
        {
            $ms = 'no';
        }
        else
        {
            $ms = $_POST["ms"];
        }
        if (empty($_POST["ms2"]))
        {
            $ms2 = 'no';
        }
        else
        {
            $ms2 = $_POST["ms2"];
        }
        if (empty($_POST["ms3"]))
        {
            $ms3 = 'no';
        }
        else
        {
            $ms3 = $_POST["ms3"];
        }
        if (empty($_POST["ms4"]))
        {
            $ms4 = 'no';
        }
        else
        {
            $ms4 = $_POST["ms4"];
        }
        if (empty($_POST["ms5"]))
        {
            $ms5 = 'no';
        }
        else
        {
            $ms5 = $_POST["ms5"];
        }
        if (empty($_POST["btn_fav"]))
        {
            $btn_fav = 'no';
        }
        else
        {
            $btn_fav = $_POST["btn_fav"];
        }
        if (empty($_POST["btn_fav2"]))
        {
            $btn_fav2 = 'no';
        }
        else
        {
            $btn_fav2 = $_POST["btn_fav2"];
        }
        if (empty($_POST["btn_fav3"]))
        {
            $btn_fav3 = 'no';
        }
        else
        {
            $btn_fav3 = $_POST["btn_fav3"];
        }
        if (empty($_POST["btn_fav4"]))
        {
            $btn_fav4 = 'no';
        }
        else
        {
            $btn_fav4 = $_POST["btn_fav4"];
        }
        if (empty($_POST["btn_fav5"]))
        {
            $btn_fav5 = 'no';
        }
        else
        {
            $btn_fav5 = $_POST["btn_fav5"];
        }
        if (empty($_POST["stream_type"]))
        {
            $stream_type = 'ts';
        }
        else
        {
            $stream_type = $_POST["stream_type"];
        }

        $replacementData = array(
            'app' => array(
                "btn_live" => $btn_live,
                "btn_live2" => $btn_live2,
                "btn_live3" => $btn_live3,
                "btn_live4" => $btn_live4,
                "btn_live5" => $btn_live5,
                "btn_vod" => $btn_vod,
                "btn_vod2" => $btn_vod2,
                "btn_vod3" => $btn_vod3,
                "btn_vod4" => $btn_vod4,
                "btn_vod5" => $btn_vod5,
                "btn_epg" => $btn_epg,
                "btn_epg2" => $btn_epg2,
                "btn_epg3" => $btn_epg3,
                "btn_epg4" => $btn_epg4,
                "btn_epg5" => $btn_epg5,
                "btn_series" => $btn_series,
                "btn_series2" => $btn_series2,
                "btn_series3" => $btn_series3,
                "btn_series4" => $btn_series4,
                "btn_series5" => $btn_series5,
                "btn_radio" => $btn_radio,
                "btn_radio2" => $btn_radio2,
                "btn_radio3" => $btn_radio3,
                "btn_radio4" => $btn_radio4,
                "btn_radio5" => $btn_radio5,
                "btn_catchup" => $btn_catchup,
                "btn_catchup2" => $btn_catchup2,
                "btn_catchup3" => $btn_catchup3,
                "btn_catchup4" => $btn_catchup4,
                "btn_catchup5" => $btn_catchup5,
                "btn_account" => $btn_account,
                "btn_account2" => $btn_account2,
                "btn_account3" => $btn_account3,
                "btn_account4" => $btn_account4,
                "btn_account5" => $btn_account5,
                "ms" => $ms,
                "ms2" => $ms2,
                "ms3" => $ms3,
                "ms4" => $ms4,
                "ms5" => $ms5,
                "btn_fav" => $btn_fav,
                "btn_fav2" => $btn_fav2,
                "btn_fav3" => $btn_fav3,
                "btn_fav4" => $btn_fav4,
                "btn_fav5" => $btn_fav5,
                "stream_type" => $stream_type
            )
        );
        $newArrayData = array_replace_recursive($arrayData, $replacementData);
        $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
        file_put_contents("./api/main.json", $newJsonData);

        header("Location: app.php?message=$message");
    }

    if (isset($_POST['aditional_submit']))
{
    $jsonData = file_get_contents("./api/main.json");
    $arrayData = json_decode($jsonData, true);

    if (empty($_POST["show_cat_count"]))
    {
        $show_cat_count = 'yes';
    }
    else
    {
        $show_cat_count = $_POST["show_cat_count"];
    }
    if (empty($_POST["load_last_channel"]))
    {
        $load_last_channel = 'no';
    }
    else
    {
        $load_last_channel = $_POST["load_last_channel"];
    }
    if (empty($_POST["btn_pr"]))
    {
        $btn_pr = 'yes';
    }
    else
    {
        $btn_pr = $_POST["btn_pr"];
    }
    if (empty($_POST["btn_rec"]))
    {
        $btn_rec = 'yes';
    }
    else
    {
        $btn_rec = $_POST["btn_rec"];
    }
    if (empty($_POST["btn_vpn"]))
    {
        $btn_vpn = 'yes';
    }
    else
    {
        $btn_vpn = $_POST["btn_vpn"];
    }
    if (empty($_POST["btn_noti"]))
    {
        $btn_noti = 'yes';
    }
    else
    {
        $btn_noti = $_POST["btn_noti"];
    }
    if (empty($_POST["btn_update"]))
    {
        $btn_update = 'yes';
    }
    else
    {
        $btn_update = $_POST["btn_update"];
    }
    if (empty($_POST["show_expire"]))
    {
        $show_expire = 'yes';
    }
    else
    {
        $show_expire = $_POST["show_expire"];
    }
    if (empty($_POST["login_logo"]))
    {
        $login_logo = 'yes';
    }
    else
    {
        $login_logo = $_POST["login_logo"];
    }
    if (empty($_POST["logs"]))
    {
        $logs = 'yes';
    }
    else
    {
        $logs = $_POST["logs"];
    }
    if (empty($_POST["all_cat"]))
    {
        $all_cat = 'yes';
    }
    else
    {
        $all_cat = $_POST["all_cat"];
    }
    if (empty($_POST["filter_status"]))
    {
        $filter_status = 'No';
    }
    else
    {
        $filter_status = $_POST["filter_status"];
    }
    if (empty($_POST["agent"]))
    {
        $agent = 'XCIPTV';
    }
    else
    {
        $agent2 = $_POST["agent"];
        $agent = str_replace(' ', '-', $agent2);
    }
    if (empty($_POST["activation_url"]))
    {
        $activation_url = 'no';
    }
    else
    {
        $activation_url = $_POST["activation_url"];
    }
    $replacementData = array(
        'app' => array(
            "show_cat_count" => $show_cat_count,
            "load_last_channel" => $load_last_channel,
            "btn_pr" => $btn_pr,
            "btn_rec" => $btn_rec,
            "btn_vpn" => $btn_vpn,
            "btn_noti" => $btn_noti,
            "btn_update" => $btn_update,
            "show_expire" => $show_expire,
            "login_logo" => $login_logo,
            "logs" => $logs,
            "all_cat" => $all_cat,
            "filter_status" => $filter_status,
            "agent" => $agent,
            "activation_url" => $activation_url
        )
    );
    $newArrayData = array_replace_recursive($arrayData, $replacementData);
    $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
    file_put_contents("./api/main.json", $newJsonData);

    header("Location: app.php?message=$message");
    }

    include ('includes/header.php');
?>

<div class="has-sidebar-left has-sidebar-tabs">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <div class="col-md-8 mx-auto">
        <div class="card bg-primary text-white">
            <div class="card-header card-header-warning">
                <center>
                    <h2><i class="icon icon-cogs"></i> Configura??es gerais de aplicativos</h2>
                </center>
            </div>
            <div class="alert alert-info alert-dismissible" role="alert">
                <center>
                    Atualize uma se??o de cada vez.
                </center>
            </div>
            <center>
                <ul class="nav nav-tabs card-header-tabs nav-material float-left" role="tablist">
                    <li>
                        &emsp;&emsp;
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link active show" href="#application_tab" aria-controls="application_tab" role="tab" data-toggle="tab" aria-expanded="true" aria-selected="true">Op??es de aplica??o</a>
                    </li>
                    <li role="presentation">
                        <a class="nav-link" href="#providers_tab" aria-controls="providers_tab" role="tab" data-toggle="tab" aria-selected="false">Op??es de Provedores</a>
                    </li>
                    <li role="presentation">
                        <a class="nav-link" href="#interface_tab" aria-controls="interface_tab" role="tab" data-toggle="tab" aria-selected="false">Op??es de interface</a>
                    </li>
                    <li role="presentation">
                        <a class="nav-link" href="#extra_application_tab" aria-controls="extra_application_tab" role="tab" data-toggle="tab" aria-selected="false">Op??es extras de interface</a>
                    </li>
                    <li role="presentation">
                        <a class="nav-link" href="#extra_interface_tab" aria-controls="extra_interface_tab" role="tab" data-toggle="tab" aria-selected="false">Op??es de aplicativo extras</a>
                    </li>
                </ul>
            </center>
            <hr>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="application_tab">
                    <div class="card bg-primary text-white">

                        <div class="card-body">

                            <form method="post">
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Nome da Aplica??o</label>
                                        <input class="form-control" id="appname" name="appname" value="<?=$json['appname']?>" type="text"/>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Vers?o do aplicativo N?</label>
                                        <input class="form-control" id="version_code" name="version_code" value="<?=$json['version_code']?>" type="text"/>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Identificador de Aplica??o</label>
                                        <input class="form-control" id="customerid" name="customerid"  value="<?=$json['customerid']?>" type="text"/>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Tipo de login do cliente</label>
                                        <select class="form-control" id="select" name="login_type">
                                            <option value="login"<?=$json['login_type']=='login'?'selected':'' ?>>Login XC</option>
                                            <option value="mac" <?=$json['login_type']=='mac'?'selected':'' ?>>MAC Address</option>
                                            <option value="activation" <?=$json['login_type']=='activation'?'selected':'' ?>>C?digo de ativa??o</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Bot?o de login de contas</label>
                                        <select class="form-control" id="select" name="btn_login_account">
                                            <option value="yes" <?=$json['btn_login_account']=='yes'?'selected':'' ?>>Habilitado</option>
                                            <option value="no" <?=$json['btn_login_account']=='no'?'selected':'' ?>>Desabilitado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Bot?o de configura??es de login</label>
                                        <select class="form-control" id="select" name="btn_login_settings">
                                            <option value="yes" <?=$json['btn_login_settings']=='yes'?'selected':'' ?>>Habilitado</option>
                                            <option value="no" <?=$json['btn_login_settings']=='no'?'selected':'' ?>>Desabilitado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Bot?o de inscri??o</label>
                                        <select class="form-control" id="select" name="btn_signup">
                                            <option value="yes" <?=$json['btn_signup']=='yes'?'selected':'' ?>>Habilitado</option>
                                            <option value="no" <?=$json['btn_signup']=='no'?'selected':'' ?>>Desabilitado</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label" >An?ncios</label>
                                        <select class="form-control" id="select" name="announcement_enabled">
                                            <option value="yes"<?=$json['announcement_enabled']=='yes'?'selected':'' ?>>Habilitado</option>
                                            <option value="no" <?=$json['announcement_enabled']=='no'?'selected':'' ?>>Desabilitado</option>
                                        </select>
                                    </div>
                               </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label" >Mensagens</label>
                                        <select class="form-control" id="select" name="message_enabled">
                                            <option value="yes"<?=$json['message_enabled']=='yes'?'selected':'' ?>>Habilitado</option>
                                            <option value="no" <?=$json['message_enabled']=='no'?'selected':'' ?>>Desabilitado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label" >Atualizar informa??es do usu?rio</label>
                                        <select class="form-control" id="select" name="updateuserinfo_enabled">
                                            <option value="yes"<?=$json['updateuserinfo_enabled']=='yes'?'selected':'' ?>>Habilitado</option>
                                            <option value="no" <?=$json['updateuserinfo_enabled']=='no'?'selected':'' ?>>Desabilitado</option>
                                        </select>
                                    </div>                         
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Nome do desenvolvedor</label>
                                        <input class="form-control" name="support_email" value="<?=$json['support_email'] ?>" type="text"/>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Contato do desenvolvedor</label>
                                        <input class="form-control" name="support_phone"  value="<?=$json['support_phone']?>" type="text"/>
                                    </div>
                                </div>

                                <hr>
                            
                            <div class="form-group form-float form-group-lg">
                                <center>
                                    <button class="btn btn-info" name="submit_support" type="submit">
                                        <i class="icon icon-check"></i> Atualizar aplicativo
                                    </button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane " id="providers_tab">
                <div class="card bg-primary text-white">

                    <div class="card-body">
                            
                            <form method="post">
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#78bcee">Portal 1</font> Nome</label>
                                        <input class="form-control" id="portal_name" name="portal_name" placeholder="Portal 1 Name" type="text" value=<?=$json['portal_name']=='0'?'0':$json['portal_name'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#78bcee">Portal 1</font> URL</label>
                                        <input class="form-control" id="portal" name="portal" placeholder="Poral Address 1" type="text" value=<?=$json['portal']=='0'?'0':$json['portal'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#4285f4">Portal 2</font> Nome</label>
                                        <input class="form-control" id="portal2_name" name="portal2_name" placeholder="Portal 2 Name" type="text" value=<?=$json['portal2_name']=='0'?'0':$json['portal2_name']?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#4285f4">Portal 2</font> URL</label>
                                        <input class="form-control" id="portal2" name="portal2" placeholder="Poral Address 2" type="text" value=<?=$json['portal2']=='0'?'0':$json['portal2'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#a6c">Portal 3 </font> Nome</label>
                                        <input class="form-control" id="portal3_name" name="portal3_name" placeholder="Portal 3 Name" type="text" value=<?=$json['portal3_name']=='0'?'0':$json['portal3_name'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#a6c">Portal 3</font> URL</label>
                                        <input class="form-control" id="portal3" name="portal3" placeholder="Poral Address 3" type="text" value=<?=$json['portal3']=='0'?'0':$json['portal3'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#f80">Portal 4 </font> Nome</label>
                                        <input class="form-control" id="portal4_name" name="portal4_name" placeholder="Portal 4 Name" type="text" value=<?=$json['portal4_name']=='0'?'0':$json['portal4_name'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#f80">Portal 4</font> URL</label>
                                        <input class="form-control" id="portal4" name="portal4" placeholder="Poral Address 4" type="text" value=<?=$json['portal4']=='0'?'0':$json['portal4'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#ed5564">Portal 5 </font> Nome</label>
                                        <input class="form-control" id="portal5_name" name="portal5_name" placeholder="Portal 5 Name" type="text" value=<?=$json['portal5_name']=='0'?'0':$json['portal5_name'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label"><font color="#ed5564">Portal 5</font> URL</label>
                                        <input class="form-control" id="portal3" name="portal5" placeholder="Poral Address 5" type="text" value=<?=$json['portal5']=='0'?'0':$json['portal5'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">VOD Portal</label>
                                        <input class="form-control" id="portal_vod" name="portal_vod" placeholder="Custom VOD Portal" type="text" value=<?=$json['portal_vod']=='no'?'no':$json['portal_vod'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Series Portal</label>
                                        <input class="form-control" id="portal_series" name="portal_series" placeholder="Custom Series Portal" type="text" value=<?=$json['portal_series']=='no'?'no':$json['portal_series'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">EPG Url</label>
                                        <input class="form-control" id="epg_url" name="epg_url" placeholder="EPG URL" type="text" value=<?=$json['epg_url']=='no'?'no':$json['epg_url'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Url OVPN (obsoleto)</label>
                                        <input class="form-control" id="ovpn_url" name="ovpn_url" placeholder="OVPN Config URL" type="text" value=<?=$json['ovpn_url']=='0'?'0':$json['ovpn_url'] ?>>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Formato de fluxo</label>
                                        <select class="form-control" id="select" name="stream_type">
                                            <option value="ts"<?=$json['stream_type']=='ts'?'selected':'' ?>>MPEGTS (.ts)</option>
                                            <option value="m3u8" <?=$json['stream_type']=='m3u8'?'selected':'' ?>>HLS (.m3u8)</option>
                                        </select>
                                    </div>
                                </div>

                                <hr>

                                <div>
                                    <div class="form-group form-float form-group-lg">
                                        <center>
                                            <button class="btn btn-info" name="submit" type="submit">
                                                <i class="icon icon-check"></i>Atualizar portais
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane " id="interface_tab">
                <div class="card bg-primary text-white">

                        
                    <div class="card-body">
                        <center>
                            <div class="mr-5">
                                <form method="post">
                                    <div class="fform-group form-float form-group-lg">
                                        <label class="form-label" for="btn_live">
                                            Show <strong>Live TV</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_live" id="btn_live" value="Yes" <?=$json['btn_live']=='Yes'?'checked':'' ?>>
                                                <label for="btn_live" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_live2" id="btn_live2" value="Yes" <?=$json['btn_live2']=='Yes'?'checked':'' ?>>
                                                <label for="btn_live2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_live3" id="btn_live3" value="Yes" <?=$json['btn_live3']=='Yes'?'checked':'' ?>>
                                                <label for="btn_live3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_live4" id="btn_live4" value="Yes" <?=$json['btn_live4']=='Yes'?'checked':'' ?>>
                                                <label for="btn_live4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_live5" id="btn_live5" value="Yes" <?=$json['btn_live5']=='Yes'?'checked':'' ?>>
                                                <label for="btn_live5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="btn_epg">
                                            Show <strong>TV Guide</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_epg" id="btn_epg" value="Yes" <?=$json['btn_epg']=='Yes'?'checked':'' ?>>
                                                <label for="btn_epg" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_epg2" id="btn_epg2" value="Yes" <?=$json['btn_epg2']=='Yes'?'checked':'' ?>>
                                                <label for="btn_epg2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_epg3" id="btn_epg3" value="Yes" <?=$json['btn_epg3']=='Yes'?'checked':'' ?>>
                                                <label for="btn_epg3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_epg4" id="btn_epg4" value="Yes" <?=$json['btn_epg4']=='Yes'?'checked':'' ?>>
                                                <label for="btn_epg4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_epg5" id="btn_epg5" value="Yes" <?=$json['btn_epg5']=='Yes'?'checked':'' ?>>
                                                <label for="btn_epg5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="btn_vod">
                                            Show <strong>VOD</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_vod" id="btn_vod" value="Yes" <?=$json['btn_vod']=='Yes'?'checked':'' ?>>
                                                <label for="btn_vod" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_vod2" id="btn_vod2" value="Yes" <?=$json['btn_vod2']=='Yes'?'checked':'' ?>>
                                                <label for="btn_vod2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_vod3" id="btn_vod3" value="Yes" <?=$json['btn_vod3']=='Yes'?'checked':'' ?>>
                                                <label for="btn_vod3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_vod4" id="btn_vod4" value="Yes" <?=$json['btn_vod4']=='Yes'?'checked':'' ?>>
                                                <label for="btn_vod4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_vod5" id="btn_vod5" value="Yes" <?=$json['btn_vod5']=='Yes'?'checked':'' ?>>
                                                <label for="btn_vod5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="btn_series">
                                            Show <strong>Series</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_series" id="btn_series" value="Yes" <?=$json['btn_series']=='Yes'?'checked':'' ?>>
                                                <label for="btn_series" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_series2" id="btn_series2" value="Yes" <?=$json['btn_series2']=='Yes'?'checked':'' ?>>
                                                <label for="btn_series2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_series3" id="btn_series3" value="Yes" <?=$json['btn_series3']=='Yes'?'checked':'' ?>>
                                                <label for="btn_series3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_series4" id="btn_series4" value="Yes" <?=$json['btn_series4']=='Yes'?'checked':'' ?>>
                                                <label for="btn_series4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_series5" id="btn_series5" value="Yes" <?=$json['btn_series5']=='Yes'?'checked':'' ?>>
                                                <label for="btn_series5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="btn_catchup">
                                            Show <strong>Catchup</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_catchup" id="btn_catchup" value="Yes" <?=$json['btn_catchup']=='Yes'?'checked':'' ?>>
                                                <label for="btn_catchup" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_catchup2" id="btn_catchup2" value="Yes" <?=$json['btn_catchup2']=='Yes'?'checked':'' ?>>
                                                <label for="btn_catchup2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_catchup3" id="btn_catchup3" value="Yes" <?=$json['btn_catchup3']=='Yes'?'checked':'' ?>>
                                                <label for="btn_catchup3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_catchup4" id="btn_catchup4" value="Yes" <?=$json['btn_catchup4']=='Yes'?'checked':'' ?>>
                                                <label for="btn_catchup4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_catchup5" id="btn_catchup5" value="Yes" <?=$json['btn_catchup5']=='Yes'?'checked':'' ?>>
                                                <label for="btn_catchup5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="btn_radio">
                                            Show <strong>Radio</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_radio" id="btn_radio" value="Yes" <?=$json['btn_radio']=='Yes'?'checked':'' ?>>
                                                <label for="btn_radio" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_radio2" id="btn_radio2" value="Yes" <?=$json['btn_radio2']=='Yes'?'checked':'' ?>>
                                                <label for="btn_radio2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_radio3" id="btn_radio3" value="Yes" <?=$json['btn_radio3']=='Yes'?'checked':'' ?>>
                                                <label for="btn_radio3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_radio4" id="btn_radio4" value="Yes" <?=$json['btn_radio4']=='Yes'?'checked':'' ?>>
                                                <label for="btn_radio4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_radio5" id="btn_radio5" value="Yes" <?=$json['btn_radio5']=='Yes'?'checked':'' ?>>
                                                <label for="btn_radio5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="ms">
                                            Show <strong>Multi-Screens</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="ms" id="ms" value="yes" <?=$json['ms']=='yes'?'checked':'' ?>>
                                                <label for="ms" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="ms2" id="ms2" value="yes" <?=$json['ms2']=='yes'?'checked':'' ?>>
                                                <label for="ms2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="ms3" id="ms3" value="yes" <?=$json['ms3']=='yes'?'checked':'' ?>>
                                                <label for="ms3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="ms4" id="ms4" value="yes" <?=$json['ms4']=='yes'?'checked':'' ?>>
                                                <label for="ms4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="ms5" id="ms5" value="yes" <?=$json['ms5']=='yes'?'checked':'' ?>>
                                                <label for="ms5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="btn_fav">
                                            Show <strong>Favorite</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_fav" id="btn_fav" value="yes" <?=$json['btn_fav']=='yes'?'checked':'' ?>>
                                                <label for="btn_fav" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_fav2" id="btn_fav2" value="yes" <?=$json['btn_fav2']=='yes'?'checked':'' ?>>
                                                <label for="btn_fav2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_fav3" id="btn_fav3" value="yes" <?=$json['btn_fav3']=='yes'?'checked':'' ?>>
                                                <label for="btn_fav3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_fav4" id="btn_fav4" value="yes" <?=$json['btn_fav4']=='yes'?'checked':'' ?>>
                                                <label for="btn_fav4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_fav5" id="btn_fav5" value="yes" <?=$json['btn_fav5']=='yes'?'checked':'' ?>>
                                                <label for="btn_fav5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="form-group form-float form-group-lg">
                                        <label class="form-label" for="btn_account">
                                            Show <strong>Account</strong> Icon?
                                        </label>
                                        <p>
                                            <font color="#78bcee">Portal 1</font>, 
                                            <font color="#4285f4">Portal 2</font>, 
                                            <font color="#a6c">Portal 3</font>,
                                            <font color="#f80">Portal 4</font>,
                                            <font color="#ed5564">Portal 5</font>
                                        </p>
                                        <div class="form-line">
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_account" id="btn_account" value="yes" <?=$json['btn_account']=='yes'?'checked':'' ?>>
                                                <label for="btn_account" class="bg-info" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_account2" id="btn_account2" value="yes" <?=$json['btn_account2']=='yes'?'checked':'' ?>>
                                                <label for="btn_account2" class="bg-primary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_account3" id="btn_account3" value="yes" <?=$json['btn_account3']=='yes'?'checked':'' ?>>
                                                <label for="btn_account3" class="bg-secondary" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_account4" id="btn_account4" value="yes" <?=$json['btn_account4']=='yes'?'checked':'' ?>>
                                                <label for="btn_account4" class="bg-warning" style="width:0px"></label>
                                            </div>
                                            <div class="material-switch form-check-inline" style="margin-right:3rem">
                                                <input type="checkbox" name="btn_account5" id="btn_account5" value="yes" <?=$json['btn_account5']=='yes'?'checked':'' ?>>
                                                <label for="btn_account5" class="bg-danger" style="width:0px"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group form-float form-group-lg">
                                        <center>
                                            <button class="btn btn-info" name="submit_app_custom" type="submit">
                                                <i class="icon icon-check"></i>Update Icons
                                            </button>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane " id="extra_application_tab">
                    <div class="card bg-primary text-white">
                        <div class="card-body">

                            <form method="post">
                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="btn_pr" >Show Reminders Button</label>
                                    <select class="form-control" id="select" name="btn_pr">
                                        <option value="yes" <?=$json['btn_pr']=='yes'?'selected':'' ?> >Enabled</option>
                                        <option value="no" <?=$json['btn_pr']=='no'?'selected':'' ?> >Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="btn_rec" >Show Record Button</label>
                                    <select class="form-control" id="select" name="btn_rec">
                                        <option value="yes" <?=$json['btn_rec']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['btn_rec']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="btn_vpn" >Show VPN Button</label>
                                    <select class="form-control" id="select" name="btn_vpn">
                                        <option value="yes" <?=$json['btn_vpn']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['btn_vpn']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="btn_noti" >Show Message Button</label>
                                    <select class="form-control" id="select" name="btn_noti">
                                        <option value="yes" <?=$json['btn_noti']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['btn_noti']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="btn_update" >Show Update Button</label>
                                    <select class="form-control" id="select" name="btn_update">
                                        <option value="yes" <?=$json['btn_update']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['btn_update']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="show_expire" >Show Sub Expiry</label>
                                    <select class="form-control" id="select" name="show_expire">
                                        <option value="yes" <?=$json['show_expire']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['show_expire']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>
                                </div>

                                <hr>

                                <div class="form-group form-float form-group-lg">
                                    <center>
                                        <button class="btn btn-info" name="aditional_submit" type="submit">
                                            <i class="icon icon-check"></i> Update App Settings
                                        </button>
                                    </center>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane " id="extra_interface_tab">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                            <form method="post">

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="login_logo" >Show Login Logo</label>
                                    <select class="form-control" id="select" name="login_logo">
                                        <option value="yes" <?=$json['login_logo']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['login_logo']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="logs" >Show App Logs</label>
                                    <select class="form-control" id="select" name="logs">
                                        <option value="yes"<?=$json['logs']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['logs']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="all_cat" >Show All Categories</label>
                                    <select class="form-control" id="select" name="all_cat">
                                        <option value="yes"<?=$json['all_cat']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['all_cat']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="show_cat_count" >Show Category Count</label>
                                    <select class="form-control" id="select" name="show_cat_count">
                                        <option value="yes"<?=$json['show_cat_count']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no" <?=$json['show_cat_count']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="agent">User-Agent</label>
                                    <input class="form-control" name="agent"  value="<?=$json['agent']?>" type="text"/>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="load_last_channel" >Load Last Channel</label>
                                    <select class="form-control" id="select" name="load_last_channel">
                                        <option value="yes"<?=$json['load_last_channel']=='yes'?'selected':'' ?>>Enabled</option>
                                        <option value="no"<?=$json['load_last_channel']=='no'?'selected':'' ?>>Disabled</option>
                                    </select>                                
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label" for="activation_url">Activation URL</label>
                                    <input class="form-control" name="activation_url"  value="<?=$json['activation_url']?>" type="text"/>
                                </div>

                                <hr>

                                <div class="form-group form-float form-group-lg">
                                    <center>
                                        <button class="btn btn-info" name="aditional_submit" type="submit">
                                            <i class="icon icon-check"></i> Update App Settings
                                        </button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>

<?php include ('includes/footer.php'); ?>

</body>
</html>