<!DOCTYPE html>  
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="seminar.css">
  </head>
  <body>
    <div id="wrapper">
      <img src="images/top.jpg" title="top" id="image">
    
  <?php
  $db = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
  $db['dbname'] = ltrim($db['path'], '/');
  $dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8";
  $user = $db['user'];
  $password = $db['pass'];
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY =>true,
  );
  $dbh = new PDO($dsn,$user,$password,$options);

  $sql='SELECT*FROM user';
  $stmt=$dbh->prepare($sql);
  $stmt->execute();

  $dbh=null;
  $rec=$stmt->fetch(PDO::FETCH_ASSOC);
  var_dump($rec);

  ?>

    <div id="nav">
        <ul>
            <li><a href="index.html">セミナー情報</a></li>
            <li><a href="#">アクセス</a></li>
            <li><a href="login.html">マイページ</a></li>
            <li><a href="#footer">お問合せ</a></li>
        </ul>
    </div>
    <div id="main">
          <div id="main-seminar">
              <h1>9月開催セミナー</h1>
              <table id="seminar1_table">
              <tbody>
              <tr>
                <th>セミナー名</th>
                <td>AR社製品導入セミナー</td>
              </tr>
              <tr>
                <th>開催日時</th>
                <td>2020年9月10日(木)</td>
              </tr>    
              <tr>
                <th>会場名</th>
                <td>TKP東京駅大手町カンファレンスセンター</td>
              </tr>
              <tr>
                <th>参加費</th>
                <td>無料（事前登録制）</td>
              </tr> 
              <tr>
                <th>定員</th>
                <td>100名</td>
              </tr> 
            </tbody>
          </table>
              <button class="btn"><a href="form.html">参加申込はこちら</a></button>
              
             
          </div>
          <div id="main-access">
              <h1>アクセスマップ</h1>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.565268788546!2d139.7623363154506!3d35.68770498019286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c064d44be97%3A0xb6f9127e6793aa51!2zVEtQ5p2x5Lqs6aeF5aSn5omL55S644Kr44Oz44OV44Kh44Os44Oz44K544K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1598080636071!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
    </div>
    <div id="footer">
      <p>お問合せ先</p>
      <p>セミナー運営事務局</p>
      <p>Mail：ARseminar@event.jp</p>
    </div>
    </div>
</body>