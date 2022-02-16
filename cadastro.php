<?php include_once "header.php"; ?>
	<div class="mt-5">
		<div class="container w-auto h-min align-items-center justify-content-center bg-white opacity-75 rounded p-5">
		<form action="backend/additem.php" method="POST" class="d-flex flex-column align-items-center">
		<p class="text-center fs-4 mt-2">Cadastrar itens na navbar:</p>
		<div class="mb-3 col-12">
			<label for="inputName" class="form-label">Nome</label>
			<input type="text" class="form-control" id="inputName" name="nome">
		</div>
		<div class="mb-3 col-12">
			<label for="inputLink" class="form-label">Link</label>
			<input type="text" class="form-control" id="inputLink" name="link">
		</div>
		<button type="submit" class="btn btn-primary col-8 p-2 mt-3">Cadastrar</button>
		</form>
	</div>
</div>
	</header>

<hr class="m-0 border border-white border-2"/>
<?php include_once "footer.php"; ?>