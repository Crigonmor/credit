<?php include 'header.php' ?>
<style>
input{
  padding-top: 20px;
}
</style>

  <div class="container">
<div class="col-md-6">
							<label>Tu nombre:</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>

						<div class="col-md-6">
							<label>Email:</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
            <div class="col-md-12">
            <label>Missatge:</label>
                      <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
                      </br>
                      <input type="submit" class="btn btn-info" value="Enviar">
  </div>
</div>
<?php include 'footer.php' ?>
