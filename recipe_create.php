<?php
// var_dump($_POST);
// exit();

// データの受取
$recipename = $_POST["recipename"];
$category = $_POST["category"];
$recipecategory = $_POST["recipecategory"];
$howto = $_POST["howto"];
$nutrition = $_POST["nutrition"];
$enagy = $_POST["enagy"];
$salt = $_POST["salt"];
// $img_name = $_FILES['upimg']['name'];
// // var_dump($recipename);
// // exit();

// // 画像を保存
// move_uploaded_file($_FILES['upimg']['tmp_name'], './upload/' . $img_name);

// echo '<img src="img.php?img_name=' . $img_name . '">';

// $upimg = $_POST["upimg"];

// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_data = "{$category} {recipecategory} {$recipename} {$howto} {$nutrition} {$enagy} {$salt}\n";

// ファイルを開く処理
$file = fopen('data/recipe.csv', 'a');

// ファイルロックの処理
flock($file, LOCK_EX);

// ファイル書き込み処理
fwrite($file, $write_data);
// ファイルアンロックの処理
flock($file, LOCK_UN);

// ファイルを閉じる処理
fclose($file);

// 入力画面へ移動
header("Location:index.html");


// csvファイルへの書き込みのみ行うので表示する画面は存在しない

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出力結果</title>

</head>

<body>
    <?php
    print_r($_POST);
    echo htmlspecialchars($_POST['recipename']), ENT_QUOTES, 'UTF-8';
    echo "<br>";
    if ($_POST['category'] === '1') echo "主食/ごはん、パン、麺類";
    if ($_POST['category'] === '2') echo "主菜/肉、魚";
    if ($_POST['category'] === '3') echo "主菜/卵、大豆・大豆製品";
    if ($_POST['category'] === '4') echo "副菜・汁物/野菜、海藻、いも類";
    if ($_POST['category'] === '5') echo "デザート";
    echo "<br>";
    ?>


</body>

</html>