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
            'mnt_status' => $_POST["mnt_status"],
            'mnt_message' => $_POST["mnt_message"],
            'mnt_expire' => $_POST["mnt_expire"]
        )
    );
    $newArrayData = array_replace_recursive($arrayData, $replacementData);
    $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
    file_put_contents("./api/main.json", $newJsonData);
    header("Location: maintenance.php?message=$message");
}
include ('includes/header.php');
?>

<div class="has-sidebar-left has-sidebar-tabs">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <div class="col-md-8 mx-auto">
            <div class="card-body">
                <div class="card bg-primary text-white">
                    <div class="card-header">
                        <center>
                            <h2><i class="icon icon-wrench"></i> Manutenção</h2>
                        </center>
                    </div>
                    <div class="card-body">
                            <form method="post">
                                <div class="form-group ">
                                    <div class="form-line">
                                        <label class="form-group form-float form-group-lg">Razão para Manutenção</label>
                                        <input class="form-control" id="description" name="mnt_message" value="<?=$json['mnt_message']?>" type="text"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="form-line">
                                      <label class="form-group form-float form-group-lg">Status atual</label>
                                      <select class="form-control" id="select" name="mnt_status">
                                          <option value="INACTIVE" <?=$json['mnt_status']=='INACTIVE'?'selected':'' ?>>INATIVO</option>
                                          <option value="ACTIVE" <?=$json['mnt_status']=='ACTIVE'?'selected':'' ?>>ATIVO</option>
                                      </select>
                                    </div>
                                </div>
                  
                                <div class="form-group">
                                    <div class="form-line">
                                        <label class="form-group form-float form-group-lg">Data Final de Manutenção</label>
                                        <input type="text" autocomeplete="false" class="date-time-picker form-control" id="datetimepicker" name="mnt_expire" value="<?=$json['mnt_expire'] ?>"/>
                                    <div class="input-group focused">
                                </div>

                                <hr>

                                <div class="form-group">
                                    <center>
                                        <button class="btn btn-info" name="submit" type="submit">
                                            <i class="icon icon-check"></i> Atualizar o status
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