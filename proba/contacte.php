<?php include 'header.php' ?>
<style>
input{
  padding-top: 20px;
}
div{
  padding-top: 10px;
}
</style>
  <form  method="POST" name="form-work" action="logica/guardar.php">
  <div class="container">
<div class="col-md-6">
							<label>Tu nombre:</label>
							<input type="text" name="nombre" id="name" class="form-control">
						</div>

						<div class="col-md-6">
							<label>Email:</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
            <div class="col-md-12">
            <label>Missatge:</label>
                      <textarea name="missatge" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
                      </br>
                      <input type="submit" class="btn btn-info" value="Enviar">

  </div>
</div>
</form>
<?php include 'footer.php' ?>
