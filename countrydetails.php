<!DOCTYPE html>
<html>
<head> <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php // Retrieve JSON data for the "Asia" region from the REST Countries API
$path = json_decode(file_get_contents("https://restcountries.com/v3.1/region/Asia"), true);
?>
<?php // Iterate over the retrieved data and display information for each country
foreach($path as $v){
?>
<h2 class="text-center"></h2>
<table class="table table-striped">
<tr></tr>
<tr>
<th>Official Name</th>
<td><?php echo $v['name']['official'] ?></td>
</tr>
<tr>
<th>Capital</th>
<td><?php echo $v['capital'][0]?></td>
</tr>
<tr>
<th>Code</th>
<td><?php echo $v['capital'][0]?></td>
</tr>
<tr>
<th>Currency</th>
<td><?php echo $v['currencies'][key($v['currencies'])]['name']?></td>
</tr>
<tr>
<th>Subregion</th>
<td><?php echo $v['subregion']; ?></td>
</tr>
<tr>
<th>Continent</th>
<td><?php echo $v['continents']; ?></td>
</tr>
<tr>
<th>Languages</th>
<td><?php echo $v['languages']?></td>
</tr>
<tr>
<th>Borders</th>
<td><?php echo $v['borders']?></td>
</tr>
<tr>
<th>Population</th>
<td><?php echo $v['population']?></td>
</tr>
<tr>
<th>Area</th>
<td><?php echo $v['area']?></td>
</tr>
<?php }?>
</table>
</body>
</html>