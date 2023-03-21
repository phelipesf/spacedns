<?php
	$db = new SQLite3('./api/user_message.db');
	$db->exec("CREATE TABLE IF NOT EXISTS messages(id INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL, message VARCHAR(100), userid TEXT, status TEXT, expire TEXT)");
	$db = new SQLite3('./api/vpn_config.db');
	$db->exec("CREATE TABLE IF NOT EXISTS vpnconfig(id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, userid text, vpn_appid TEXT, vpn_country TEXT, vpn_state TEXT, vpn_config VARCHAR(150), vpn_status TEXT, auth_type TEXT, auth_embedded TEXT, username VARCHAR(150), password VARCHAR(150), vdate TEXT)");

	$db = new SQLite3('./api/.db.db');
	$res = $db->query("SELECT * FROM users WHERE id='1'");
	$row = $res->fetchArray();

	if (isset($_POST['submit']))
	{
	    $db->exec("UPDATE users SET	username='" . $_POST['username'] . "', password='" . $_POST['password'] . "' WHERE id='1' ");
	    session_start();
	    session_regenerate_id();
	    $_SESSION['loggedin'] = true;
	    $_SESSION['name'] = $_POST['username'];
	    header("Location: user_update.php?");
	}
	$user = $row['username'];
	$pass = $row['password'];

	$lurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER["PHP_SELF"]) . '/api/';
	$jsonData = file_get_contents("./api/main.json");
	$arrayData = json_decode($jsonData, true);
	$replacementData = array('app' => array('backupurl' => $lurl, 'logurl' => $lurl));
    $newArrayData = array_replace_recursive($arrayData, $replacementData);
    $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
    file_put_contents("./api/main.json", $newJsonData);

	include ('includes/header.php');
?>

<div class="has-sidebar-left has-sidebar-tabs">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
    	<div class="col-md-8 mx-auto">
			<div class="card-body">
				<div class="card bg-primary text-white">
					<div class="card-header card-header-warning">
                        <center>
                            <h2><i class="icon icon-user"></i> Atualizar Login e Senha</h2>
                        </center>
                    </div>
					<div class="alert alert-info alert-dismissible" role="alert">
						<center>
							<h3 style="color:black!important">Voce <strong style="color:black!important">não</strong> usar <em>administrador </em> para o usuário ou a senha!!</h3>
							Proteja sua merda.
						</center>
					</div>

					<div class="card-body">
						<form  method="post">

							<div class="form-group">
								<div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Nome de usuário</label>
										<input type="text" class="form-control" name="username" value="<?php echo $user ?>">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <label class="form-label">Senha</label>
										<input type="text" class="form-control" name="password" value="<?php echo $pass ?>">
									</div>
								</div>
							</div>

							<hr>

							<center>
								<button type="submit" name="submit" class="btn btn-info">
									<i class="icon icon-check"></i>Atualizar Login e Senha
								</button>
							</center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('includes/footer.php'); ?>

</body>
</html>