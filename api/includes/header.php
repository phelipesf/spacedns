<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['loggedin']))
{
    header("location:"."index.php");
    exit();
}
if(isset($_GET['message']))
{
    echo $_GET['message'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ian">
    <title>Painel de controle XCIPTV</title>
    <link rel="stylesheet" href="css/app.css">

    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>

</head>
<body class="theme-dark">
<div id="app">
<aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
    <div class="sidebar">
        <div class="d-flex hv-100 align-items-stretch">
            <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="relative brand-wrapper sticky b-b">
                        <div class="d-flex justify-content-between align-items-center p-3">
                            
                            <div class="text-xs-center d-flex justify-content-center text-allign centre">
                                <center>
                                    &emsp;&emsp;&emsp;&emsp;
                                    <span class="font-weight-lightest text-white"><strong>RSATIPTV XC_600 Panel</strong></span>
                                </center>
                            </div>

                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="app.php">
                                <i class="icon icon-cogs s-24"></i>
                                <span>Configurações Gerais</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="player.php">
                                <i class="icon icon-play-circle s-24"></i>
                                <span>Seleção de jogador</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="theme.php">
                                <i class="icon icon-paint-brush s-24"></i>
                                <span>Seleção de Tema</span>
                            </a>
                        <li class="treeview">
                            <a href="language.php">
                                <i class="icon icon-globe s-24"></i>
                                <span>Seleção de idioma</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="announcement.php">
                                <i class="icon icon-bullhorn s-24"></i>
                                <span>Anúncio no aplicativo</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="send_message.php">
                                <i class="icon icon-commenting s-24"></i>
                                <span>Mensagens no aplicativo</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="vpn_config.php">
                                <i class="icon icon-map-marker s-24"></i>
                                <span> VPN no aplicativo</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="appads.php">
                                <i class="icon icon-money s-24"></i>
                                <span>Anúncios no aplicativo</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="parental_reset.php">
                                <i class="icon icon-lock s-24"></i>
                                <span>Redefinição do PIN dos pais</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="maintenance.php">
                                 <i class="icon icon-wrench s-24"></i>
                                <span>Modo de manutenção</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="update.php">
                                <i class="icon icon-cloud-upload s-24"></i>
                                <span>Atualização Remota</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="user_update.php">
                                <i class="icon icon-user s-24"></i>
                                <span>Atualizar Login e Senha</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="logout.php">
                                <i class="icon icon-sign-out s-24"></i>
                                <span>Sair</span>
                            </a>
                        </li>
                        <li class="treeview">
                                <i class="icon icon-gn-ut s-24"></i>
                                <span>RSATIPTV BY RSAT</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

    <a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
        <img src="img/logo.png" width="40" height="40" class="d-flex justify-content-center text-allign centre" alt="">
    </a>