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
            'version_code' => $_POST["version_code"],
            'apkurl' => $_POST["apkurl"],
            'backupurl' => $_POST["backupurl"],
            'apkautoupdate' => $_POST["apkautoupdate"]
        )
    );
    $newArrayData = array_replace_recursive($arrayData, $replacementData);
    $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
    file_put_contents("./api/main.json", $newJsonData);

    header("Location: update.php?message=$message");
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
                            <h2><i class="icon icon-cloud-upload"></i> Criar atualiza??o</h2>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form method="post">
                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label">N? da vers?o atual do aplicativo</label>
                                    <div class="input-group">
                                        <input class="form-control" id="version_code" name="version_code" value="<?=$json['version_code']?>" type="text"/>
                                    </div>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label">For?ar aplicativo de atualiza??o</label>
                                    <select class="form-control" id="select" name="apkautoupdate">
                                        <option value="yes" <?=$json['apkautoupdate']=='yes'?'selected':'' ?>>Habilitado</option>
                                        <option value="no" <?=$json['apkautoupdate']=='no'?'selected':'' ?>>Desabilitado</option>
                                    </select>
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label">URL de atualiza??o do aplicativo (link direto)</label>
                                    <input type="text" class="form-control" name="apkurl" id="apkurl" value="<?=$json['apkurl'] ?>">
                                </div>

                                <div class="form-group form-float form-group-lg">
                                    <label class="form-label">URL de backup da API</label>
                                    <input type="text" class="form-control" name="backupurl" id="backupurl" value="<?=$json['backupurl'] ?>">
                                </div>

                                <hr>

                                <div class="form-group">
                                    <center>
                                        <button class="btn btn-info" name="submit" type="submit">
                                            <i class="icon icon-check"></i>Atualiza??o push
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

<?php include ('includes/footer.php');?>

</body>
</html>