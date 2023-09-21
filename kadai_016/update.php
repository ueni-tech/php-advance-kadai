<?php
$dsn = 'mysql:dbname=php_book_app;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>書籍編集</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Fontsの読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <nav>
      <a href="index.php">書籍管理アプリ</a>
    </nav>
  </header>
  <main>
    <article class="registration">
      <h1>書籍編集</h1>
      <div class="back">
        <a href="read.php" class="btn">&lt; 戻る</a>
      </div>
      <form action="create.php" method="post" class="registration-form">
        <div>
          <label for="book_code">書籍コード</label>
          <input type="text" name="book_code" min="0" max="100000000" required value="<?= $product['book_code'] ?>">

          <label for="book_name">書籍名</label>
          <input type="text" name="book_name" maxlength="50" required value="<?= $product['book_name'] ?>">

          <label for="price">単価</label>
          <input type="number" name="price" min="0" max="100000000" required value="<?= $product['price'] ?>">

          <label for="stock_quantity">在庫数</label>
          <input type="number" name="stock_quantity" min="0" max="100000000" required value="<?= $product['stock_quantity'] ?>">

          <label for="genre_code">ジャンルコード</label>
          <select name="genre_code" required value="<?= $product['genre_code'] ?>">
            <option disabled selected value>選択してください</option>
            <?php
            foreach ($genre_codes as $genre_code) {
              if($genre_code === $product['genre_code']) {
                echo "<option value='{$genre_code}' selected>{$genre_code}</option>";
              } else {
                echo "<option value='{$genre_code}'>{$genre_code}</option>";
              }
            }
            ?>
          </select>
        </div>
        <button type="submit" class="submit-btn" name="submit" value="create">登録</button>
      </form>
    </article>
  </main>
  <footer>
    <p class=" copyright">&copy; 書籍管理アプリ All rights reserved.</p>
  </footer>
</body>

</html>