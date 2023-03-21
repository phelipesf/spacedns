<?php
$jsondata = file_get_contents("./api/main.json");
$data = json_decode($jsondata, true);
$json = $data['app'];
$message = '<div class="has-sidebar-left has-sidebar-tabs"><div class="container-fluid relative animatedParent animateOnce p-lg-5"><div class="alert alert-success" id="flash-msg"><center><h4 style="color:white!important"><i class="icon fa fa-check"></i>Updated!</h4></center></div></div></div>';
if (isset($_POST['submit']))
{
    $jsonData = file_get_contents("./api/main.json");
    $arrayData = json_decode($jsonData, true);
    $replacementData = array(
        'app' => array(
            'player' => $_POST["player"],
            'player_tv' => $_POST["player_tv"],
            'player_vod' => $_POST["player_vod"],
            'player_series' => $_POST["player_series"]
        )
    );
    $newArrayData = array_replace_recursive($arrayData, $replacementData);
    $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
    file_put_contents("./api/main.json", $newJsonData);

    header("Location: player.php?message=$message");
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
                            <h2><i class="icon icon-play-circle"></i> Seleção de jogador</h2>
                        </center>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group ">
                                <label class="form-label">Escolha o reprodutor de vídeo ao vivo</label>
                                <select class="form-control" id="select" name="player">
                                    <option value="EXO" <?=$json['player']=='EXO'?'selected':'' ?>>EXO Player</option>
                                    <option value="VLC" <?=$json['player']=='VLC'?'selected':'' ?>>VLC Player</option>
                                </select>           
                            </div>

                            <div class="form-group ">
                                <label class="form-label">Escolha o reprodutor de vídeo EPG</label>
                                <select class="form-control" id="select" name="player_tv">
                                    <option value="EXO" <?=$json['player_tv']=='EXO'?'selected':'' ?>>EXO Player</option>
                                    <option value="VLC" <?=$json['player_tv']=='VLC'?'selected':'' ?>>VLC Player</option>
                                </select>           
                            </div>

                            <div class="form-group ">
                                <label class="form-label">Escolha o reprodutor de vídeo VOD</label>
                                <select class="form-control" id="select" name="player_vod">
                                    <option value="EXO" <?=$json['player_vod']=='EXO'?'selected':'' ?>>EXO Player</option>
                                    <option value="VLC" <?=$json['player_vod']=='VLC'?'selected':'' ?>>VLC Player</option>
                                </select>           
                            </div>

                            <div class="form-group ">
                                <label class="form-label">Escolha o player de vídeo da série</label>
                                <select class="form-control" id="select" name="player_series">
                                    <option value="EXO" <?=$json['player_series']=='EXO'?'selected':'' ?>>EXO Player</option>
                                    <option value="VLC" <?=$json['player_series']=='VLC'?'selected':'' ?>>VLC Player</option>
                                </select>           
                            </div>

                            <hr>

                            <div class="form-group">
                                <center>
                                  <button class="btn btn-info" name="submit" type="submit">
                                      <i class="icon icon-check"></i> Atualizar jogadores
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

</body>
</html>