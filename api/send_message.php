<?php 
	$db = new SQLite3('./api/user_message.db');
	$db->exec("CREATE TABLE IF NOT EXISTS messages(id INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL, message VARCHAR(100), userid TEXT, status TEXT, expire TEXT)");
	$res = $db->query('SELECT * FROM messages');

	if(isset($_GET['delete']))
	{
		$db->exec("DELETE FROM messages WHERE id=".$_GET['delete']);
		header("Location: send_message.php");
	}
	include ('includes/header.php');
?>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Confirme</h2>
            </div>
            <div class="modal-body">
                Você realmente quer deletar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Excluir</a>
            </div>
        </div>
    </div>
</div>
<div class="has-sidebar-left has-sidebar-tabs">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <div class="col-md-8 mx-auto">
            <div class="card-body">
                <div class="card bg-primary text-white">
                    <div class="card-header card-header-warning">
                        <center>
                            <h2><i class="icon icon-commenting"></i> Enviar mensagens</h2>
                        </center>
                    </div>

                    <div class="card-body">
                        <div class="col-12">
                        	<center>
	        					<a id="button" href="./create_message.php" class="btn btn-info">Nova mensagem</a>
	        				</center>
    					</div>

    					<hr>

						<div class="table-responsive">
							<table class="table table-striped table-sm">
							<thead style="color:white!important">
								<tr>
								<th>Índice</th>
								<th>Nome de usuário</th>
								<th>Mensagem</th>
								<th>Status</th>
								<th>Expirar</th>
								<th>Excluir</th>
								</tr>
							</thead>
							<? while ($row = $res->fetchArray()) {?>
							<tbody>
								<tr>
								<td><?=$row['id'] ?></td>
								<td><a href="./update_message.php?update=<?=$row['id'] ?>" style="color:black!important;font-weight:bold!important"><?=$row['userid'] ?></a></td>
								<td><?=$row['message'] ?></td>
								<td><?=$row['status'] ?></td>
								<td><?=$row['expire'] ?></td>
								<td><a class="btn btn-danger btn-ok" href="#" data-href="./send_message.php?delete=<?=$row['id'] ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-fw fa-chart-area"></i>X</a></td>
								</tr>
							</tbody>
							<? }?>
							</table>
						</div>
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