<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レシピ（入力画面）</title>
  <style>
    form {
      background-color: #f7c6bd;
      width: 500px;
    }
  </style>
</head>

<body>
  <form action="recipe_create.php" method="POST">
    <fieldset>
      <legend>管理栄養士のレシピ（入力画面）</legend>
      <a href="recipe_read.php">レシピ一覧</a>
      <div>
        料理区分: <select name="category" id="">
          <option value="">選択してください</option>
          <option value="1">主食/ごはん、パン、麺類</option>
          <option value="2">主菜/肉、魚</option>
          <option value="3">主菜/卵、大豆・大豆製品</option>
          <option value="4">副菜・汁物/野菜、海藻、いも類</option>
          <option value="5">デザート</option>
        </select>
        <br>
      </div>
      <div>
        レシピカテゴリ: <select name="recipecategory" id="">
          <option value="">選択してください</option>
          <option value="1">ダイエットレシピ</option>
          <option value="2">筋トレレシピ</option>
          <option value="3">骨活レシピ</option>
          <option value="4">最強トーストレシピ</option>
          <option value="5">その他</option>
        </select>
        <br>
      </div>

      <div>
        料理名: <input type="text" name="recipename"><br>

      </div>
      <div>
        材料・作り方: <textarea name="howto" id="howto" cols="40" rows="10"></textarea>
        <br>
      </div>
      <!-- <div id="nutrition">
        栄養素: 
        <input type="radio" name="ca" value="ca">カルシウム
        <input type="radio" name="VD" value="VD">ビタミンD
        <input type="radio" name="VK" value="VK">ビタミンK
      </div> -->
      <div>
        エネルギー: <input type="number" min="1" max="2000" name="enagy"> kcal
        <br>
      </div>
      <div>
        食塩量: <input type="number" min="0.0" max="20.0" name="salt"> g
        <br>
      </div>
      <div><input type="file" name="upimg" accept="image/*"></div>
      <div>
        <button>レシピ登録</button>
        <img src="img2/こめ.png" alt="" width="20%" height=20%">

      </div>
    </fieldset>
  </form>

</body>

</html>