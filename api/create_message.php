<?php 
    $db = new SQLite3('./api/user_message.db');

    if(isset($_POST['submit']))
    {
        $db->exec("INSERT INTO messages(message, userid, status, expire) VALUES('".$_POST['message']."', '".$_POST['userid']."', '".$_POST['status']."', '".$_POST['expire']."')");
        header("Location: send_message.php");
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
                            <h2><i class="icon icon-commenting"></i> Criar Mensagem</h2>
                        </center>
                    </div>

                    <div class="card-body">
                        <div class="col-12">
                            <h3>Editar Mensagem</h3>
                        </div>
                            <form method="post">
                                <div class="form-group">
                                    <label class="form-label " for="message">Mensagem</label>
                                        <input class="form-control" id="description" name="message" value='' type="text"/>

                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="userid">Nome de usuário</label>
                                        <input class="form-control" id="description" name="userid" value='' type="text"/>

                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="select form-control" id="select" name="status">
                                        <option value="ACTIVE">ATIVO</option>
                                        <option value="INACTIVE">INATIVO</option>
                                    </select>

                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="message">Vencimento</label>
                                    <input type="text" class="form-control" autocomplete="false" name="expire" id="datetimepicker"> 
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