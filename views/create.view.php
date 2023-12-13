<?php
$head = "
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 8px;
}

input, textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 12px;
  box-sizing: border-box;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
.form-title {
	text-align: center;
}
.submit-wrapper {
	display: flex;
	justify-content: center;
}
#submit {
	margin: auto;
}
</style>
";
include("header.php"); ?>
<form action="/cars" method="post">
	<h2 class="form-title">Adauga Masina</h2>

	<label for="brand">Marca:</label>
	<input type="text" id="brand" name="brand" required>

	<label for="model">Model:</label>
	<input type="text" id="model" name="model" required></input>

	<label for="combustibil">Tip combustibil:</label>
	<input type="text" id="combustibil" name="combustibil" required>
  
	<label for="cilindri">Cilindri:</label>
	<input type="number" id="cilindri" name="cilindri" required>

	<label for="text">Transmisie:</label>
	<input type="text" id="transmisie" name="transmisie" required>
  
	<label for="anul">Anul:</label>
	<input type="number" id="anul" name="anul" required>
	<div class="submit-wrapper">
	<button type="submit" id="submit">Adauaga</button>
	</div>
</form>
<?php include("footer.php"); ?>