<?php 
    $db = new SQLite3('./api/vpn_config.db');

    if(isset($_POST['submit']))
    {
        $db->exec("INSERT INTO vpnconfig(userid, vpn_appid, vpn_country, vpn_state, vpn_config, vpn_status, auth_type, auth_embedded, username, password, vdate) VALUES('".$_POST['userid']."', '".$_POST['vpn_appid']."', '".$_POST['vpn_country']."', '".$_POST['vpn_state']."', '".$_POST['vpn_config']."', '".$_POST['vpn_status']."', '".$_POST['auth_type']."', '".$_POST['auth_embedded']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['vdate']."')");
        header("Location: vpn_config.php");
    }

    include ('includes/header.php');
?>

<div class="has-sidebar-left has-sidebar-tabs">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <div class="col-md-8 mx-auto">
            <div class="card-body">
                <div class="card bg-primary text-white">
                    <div class="card-header card-header-warning">
                        <center>
                            <h2><i class="icon icon-map-marker"></i> Adicionar VPN</h2>
                        </center>
                    </div>

                    <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <label class="form-label " for="userid" hidden>ID do usuário</label>
                                    <input class="form-control" id="userid" name="userid" value='521064' type="text" hidden/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="vpn_appid" hidden>ID do aplicativo</label>
                                    <input class="form-control" id="vpn_appid" name="vpn_appid" value='1646' type="text" hidden/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="vpn_country">Código do país</label>
                                    <input class="form-control" id="vpn_country" name="vpn_country" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="vpn_state">Estado</label>
                                    <input class="form-control" id="vpn_state" name="vpn_state" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="vpn_config">Url OVPN</label>
                                    <input class="form-control" id="vpn_config" name="vpn_config" type="url"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="vpn_status">Status</label>
                                    <select class="select form-control" id="select" name="vpn_status">
                                        <option value="ACTIVE">ATIVO</option>
                                        <option value="INACTIVE">INATIVO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="auth_type">Tipo de Autorização</label>
                                    <select class="select form-control" id="select" name="auth_type">
                                        <option value="up">Usuário e senha</option>
                                        <option value="noup">Sem nome de usuário e senha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="auth_embedded" hidden>Auth Embedded</label>
                                    <select class="select form-control" id="select" name="auth_embedded" hidden>
                                        <option value="NO">NÃO</option>
                                        <option value="YES">SIM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="username">nome de usuário</label>
                                        <input class="form-control" id="username" name="username" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="password">Senha</label>
                                    <input class="form-control" id="password" name="password" type="text"/>
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="vdate">Data</label>
                                    <input type="text" class="form-control" autocomplete="false" name="vdate" id="datetimepicker"> 
                                </div>

                                <div class="form-group">
                                    <center>
                                        <button class="btn btn-info " name="submit" type="submit">
                                            <i class="icon icon-check"></i> Enviar
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

<?php include ('includes/footer.php');?>

<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>

</body>
</html>