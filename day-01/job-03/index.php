<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Mon tableau</h1>

<?php
    $booleanVar = true;
    $intVar = 10;
    $stringVar = "Hey";
    $floatVar = 1.1;

    $variables = [
        ['type' => 'boolean', 'nom' => '$booleanVar', 'valeur' => $booleanVar ? 'true' : 'false'],
        ['type' => 'integer', 'nom' => '$intVar', 'valeur' => $intVar],
        ['type' => 'string', 'nom' => '$stringVar', 'valeur' => $stringVar],
        ['type' => 'float', 'nom' => '$floatVar', 'valeur' => $floatVar],
    ];
?>

<table>
  <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
  </tr>
  <?php foreach ($variables as $variable): ?>
      <tr>
          <td><?php echo $variable['type']; ?></td>
          <td><?php echo $variable['nom']; ?></td>
          <td><?php echo $variable['valeur']; ?></td>
      </tr>
  <?php endforeach; ?>
</table>

</body>
</html>
