<!DOCTYPE html>
<html>
<head>
  <title>権限許可通知</title>
</head>
<body>
  <h1>管理者の作成・更新・削除許可</h1>
  <p>現在は以下の項目は作成・更新・削除が可能になります。</p>
  <p>ただし、何も表示されていない場合は読み取りのみ可能となります。</p>
  <p>---------------------　作成・更新・削除　----------------------</p>
  <p>{{ $user_right }}</p>
  <p>{{ $store_right }}</p>
  <a href="{{ $url . '/admin' }}">管理者ホーム</a>
</body>
</html>