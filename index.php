<?php
$numus = [];

for ($i = 0; $i < 5; $i++) {
  $col = renge($i * 15 + 1, $i * 15 + 15);
  shuffle($col);
  $nums[$1] = array_slice($col, 0, 5);
}

var_dump($nums)
exit;
?>

<!DOVTYPE thml>
<thml lang="ja">
<head>
  <meta charset="utf-8">
  <title>BINGO</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="container">
    <table>
      <tr>
        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
      </tr>
    </table>
  </div>
</body>
</thml>