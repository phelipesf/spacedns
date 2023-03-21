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
            'admob_banner_id' => $_POST["admob_banner_id"],
            'admob_interstitial_id' => $_POST["admob_interstitial_id"]
        )
    );
    $newArrayData = array_replace_recursive($arrayData, $replacementData);
    $newJsonData = json_encode($newArrayData, JSON_PRETTY_PRINT);
    file_put_contents("./api/main.json", $newJsonData);
    
    header("Location: appads.php?message=$message");
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
                            <h2><i class="icon icon-money"></i> Anúncios no aplicativo</h2>
                        </center>
                    </div>
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <center>
                            Ganhe mais com seu aplicativo. Clique <a href="https://apps.admob.com/signup/" style="color:green!important;">aqui</a>
                            para obter mais informações.
                        </center>
                    </div>
                    <div class="card-body">
                            <form method="post">
                                <div class="form-group ">
                                    <div class="form-line">
                                        <label class="form-group form-float form-group-lg">ID do banner da AdMob</label>
                                        <input class="form-control" id="description" name="admob_banner_id" value="<?=$json['admob_banner_id']?>" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="form-line">
                                        <label class="form-group form-float form-group-lg">ID intersticial da Admob</label>
                                        <input type="text" class="form-control" name="admob_interstitial_id" id="date" value="<?=$json['admob_interstitial_id'] ?>">
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <center>
                                        <button class="btn btn-info" name="submit" type="submit">
                                            <i class="icon icon-check"></i> Atualizar anúncios
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

<?php include ('includes/footer.php'); ?>

</body>
</html>