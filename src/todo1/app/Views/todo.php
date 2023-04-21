<!DOCTYPE html>
<html>
<head>
    <title>TODOアプリ</title>
    <style>
        .errors {
            color: red;
        }
    </style>
</head>
<body>
  <h1>TODOアプリ</h1>
  <ul>
    <?php foreach ($todos as $todo): ?>
      <li><?php echo esc($todo['title']); ?></li>
    <?php endforeach; ?>
  </ul>
  <h2>TODO登録フォーム</h2>
  <?= session()->getFlashdata('error') ?>
  <?= service('validation')->listErrors() ?>
  <form action="/todo" method="post">
      <?= csrf_field() ?>
      <label for="title">タイトル</label>
      <input type="input" name="title" />
      <input type="submit" name="submit" value="登録" />
  </form>
</body>
</html>