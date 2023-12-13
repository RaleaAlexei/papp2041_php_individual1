<?php
$head = "
<style>
body {
  font-family: Arial, sans-serif;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

button {
  margin-right: 10px;
}
.options>button{
	background-color: #007bff;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
</style>
";
include("header.php"); ?>
<h1><a href="/">Masini</a></h1>

<div class="options">
	<button onclick="redirectToForm()" style="background-color:green">Adauga</button>
	<button onclick="redirectToFiltered()" style="background-color:blue">Masini filtrate</button>
</div>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Brand</th>
			<th>Model</th>
			<th>Combustibil</th>
			<th>Cilindri</th>
			<th>Transmisie</th>
			<th>Anul</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($cars as $car): ?>
			<tr>
				<td>
					<?= $car['id'] ?>
				</td>
				<td>
					<?= $car['brand'] ?>
				</td>
				<td>
					<?= $car['model'] ?>
				</td>
				<td>
					<?= $car['combustibil'] ?>
				</td>
				<td>
					<?= $car['cilindri'] ?>
				</td>
				<td>
					<?= $car['transmisie'] ?>
				</td>
				<td>
					<?= $car['anul'] ?>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<script>
	const redirectToForm = () => window.location.href = '/create';
	const redirectToFiltered =  () => window.location.href = '/filteredcars';
</script>
<?php include("footer.php"); ?>