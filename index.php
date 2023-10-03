<?php

  $url = "data.json";
  $json = file_get_contents($url);
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $arry = json_decode($json, true);

  if($arr === null) {
    var_dump("jsonの読み込みに失敗しました");
  } else {
    var_dump("jsonの読み込みに成功しました");
  }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotto Motto</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <link rel="stylesheet" href="asset/style/style.css">
</head>
<body>
  <header class="header">
    <div class="header__logo">
      <img src="/asset/images/logo_header.png" alt="">
    </div>
    <ul class="header__nav">
      <li>メニュー</li>
      <li>店舗</li>
      <li class="active">ネット注文</li>
      <li>会員サービス</li>
      <li>その他</li>
    </ul>
  </header>
  <main>
    <div class="l-inner">
      <ul class="tab">
        <li>お弁当</li>
        <li>おかずのみ</li>
        <li>サイトメニュー</li>
      </ul>
      <section class="content-01 ">
        <h2 class="sec-ttl">おすすめメニュー（期間限定）</h2>
        <ul class="menu">
          <li class="menu__item">
            <div class="menu__img">
              <img src="/asset/images/img-01.jpg" alt="">
            </div>
            <div class="menu__detail">
              <p class="menu__name">プラスサラダ 100円サラダ【ドレッシング付き】</p>
              <p class="menu__price">100円</p>
              <select name="" id="" class="menu__select">
                <option value="">ライス普通</option>
                <option value="">ライス大盛（＋５０）</option>
              </select>
              <div class="menu__count">
                <span>-</span>
                <input type="text" name="name" class="menu__input" min="0" max ="100">
                <span>+</span>
              </div>
            </div>
          </li>
          <li class="menu__item">
            <div class="menu__img">
              <img src="/asset/images/img-01.jpg" alt="">
            </div>
            <div class="menu__detail">
              <p class="menu__name">プラスサラダ 100円サラダ【ドレッシング付き】</p>
              <p class="menu__price">100円</p>

            </div>
          </li>
          <li class="menu__item">
            <div class="menu__img">
              <img src="/asset/images/img-01.jpg" alt="">
            </div>
            <div class="menu__detail">
              <p class="menu__name">プラスサラダ 100円サラダ【ドレッシング付き】</p>
              <p class="menu__price">10０円</p>

            </div>
          </li>
          <li class="menu__item">
            <div class="menu__img">
              <img src="/asset/images/img-01.jpg" alt="">
            </div>
            <div class="menu__detail">
              <p class="menu__name">プラスサラダ 100円サラダ【ドレッシング付き】</p>
              <p class="menu__price">100円</p>

            </div>
          </li>
        </ul>
      </section>
      <section class="content-02">

      </section>
      <section class="content-03">

      </section>
    </div>
  </main>
</body>
</html>