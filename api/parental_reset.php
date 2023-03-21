<?php
  $message = '<div class="has-sidebar-left has-sidebar-tabs"><div class="container-fluid relative animatedParent animateOnce p-lg-5"><div class="alert alert-success" id="flash-msg"><center><h4 style="color:white!important"><i class="icon fa fa-check"></i>Pin Generated!</h4></center></div></div></div>';

  if (isset($_POST['submit']))
  {
    $pin =  ord(substr(@$_POST['mastercode'],-1)).ord(substr(@$_POST['mastercode'], 0, 1));
    echo $message;
    //ty FTG.
  }
  include ('includes/header.php');
?>

<div class="has-sidebar-left has-sidebar-tabs">
  <div class="container-fluid relative animatedParent animateOnce p-lg-5">
    <div class="col-md-8 mx-auto">
      <center>
        <div class="card no-b">
          <div class="card-body">
            <div class="card bg-primary text-white">
              <div class="card-header">
                <h2><i class="icon icon-lock"></i> Redefinição do PIN dos pais</h2>
              </div>
              <div class="card-body">
                <form method="post">
                  <div class="form-group">
                    <label class="control-label" >
                      <h4>Digite o código de redefinição</h4>
                    </label>
                    <div class="row clearfix">
                      <div class="col mx-auto">
                        <div class="form-group">
                            <input type="text" id="mastercode" name="mastercode" placeholder="Reset Code"/>
                          </div>
                      </div>
                    </div>
                  </div>
                  
                  <hr>

                  <div class="form-group">
                    <div>
                      <button class="btn btn-info " name="submit" type="submit">
                        <i class="icon icon-check"></i>Gerar PIN
                      </button>
                      <br><br>
                      <div class="blue1 counter-box p-40">
                        <h4>Código de reinicialização gerado</h4>
                          <input class="text-primary" id="code" name="code" placeholder="New Pin" size="5" value="<?php echo @$pin ?>" type="text"/>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </center>
    </div>
  </div>
</div>

<?php include ('includes/footer.php');?>

</body>

<script>
  $(".inputs").keyup(function() {
    if (this.value.length == this.maxLength) {
      $(this).nextAll('.inputs:enabled:first').focus();
    }
  });
</script>

</html>
