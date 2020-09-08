<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>トップページ</title>
<link rel="stylesheet" href="CSSやり直し.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>

<div class="wrapper">
<header>
<div class="container">
<div class="header-left">
<div class="header-logo"><a href="https://www.youtube.com/channel/UCvL96wBA4LLRzgmuPpELd9g/">
<img src="haikei.png" alt="ヘッダーロゴ"></a></div>

<div id="list" class="header-list">
<ul>
  <li id="marion">★ マリオンとは</li>
  <li>● シアン</li>
  <li>&#x26a0 黒歴史</li>
  <li>&#x25b6 ムービー</li>
  <li>&#x1f51e おまけ</li>
</ul>
</div>
<div class="header-right">
<div id="login-show" class="login">&#x25B6 サインイン</div>
</div>
</div>
</header>

<div id="login-modal" class="login-modal-wrapper">
<img id="modal-end" class="finish-modal" src="batu.png" alt="モジュール閉じる">
<div class="modal">
<div class="login-form">
<h2>ログインフォーム</h2>
<form action="sent1.php" method="post">
<input class="email" type="email" name="email" placeholder="メールアドレス" maxlength="40">
<input class="password" type="password" name="password" placeholder="パスワード" maxlength="10">
<input class="submit" type="submit" value="個人情報を流出する">

</div>
</div>
</div>

<div id="video-modal" class="video-modal-wrapper">
<div class="youtube-video-modal">
<div class="video-header">
<h2>問題の動画</h2>
</div>
<p>無責任な彼の思いつきによりマリオンという<br>
謎の宗教が誕生。さらにLINEという勧誘まで始めるという始末。<br>
しかし誰も反応せず、LINEもせっかく登録してくれたのに<br>
対処しきれなくなり放置。そして実況界からも追放となった。</p>
<iframe width="520" height="275" src="https://www.youtube.com/embed/L5Oh0q-tVu8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

<div class="top-wrapper">
<div class="background-video">
<video src="testo4.mp4" loop autoplay muted>
</video>
</div>
</div>

<div class="menber-wrapper">
<div class="container">
<div class="heading">
<h1>通話メンバー</h1>
<p>※恋愛感情はありません</p>
<h2>シアン,山さん,たぬきち,ていと,グリーン</h2>
</div>

<h2>繰り返し処理</h2>

<?php
$sum=0;

for($i=1;$i<=50000;$i++){
$sum+=$i;
}
?>
<p class="p2"><?php
echo "1から10000まで1ずつ足した結果は".'<br>'
.$sum."です。"
?></p>
<audio src="ECサイト/mariten.mp3" controls>
</audio>
<h2>Javascript計算機</h2>

<input type="text" class="keisan" id="id1">
<input type="text" class="kigo" id="id4">
<input type="text" class="keisan" id="id2">

<p><button class="bot"type="button" onclick="cal()">安産しろよ</button></p>
<h2 id="id3">計算結果</h2>


</div>
</div>

<div class="macine-wrapper">
<div class="container">
<div class="macine-header">
<h2>計算機リベンジ</h2>
<h3>上のがうまくいかなかったため</h3>
<p>今度こそマジで作れるようになっていてほしいと願うばかりです<br>
今回は前回と違ってテキスト入力ではなく、ボタンを打ち込んで入力するタイプです。<br>
何でうまくいかなかったのかはよくわかりませんが
とにかくうまくいきますように</p>
</div>
<div class="macine">
<div>
<input type="text" id="result">
</div>
<div>
<input type="button" value="1" onclick="edit(this)">
<input type="button" value="2" onclick="edit(this)">
<input type="button" value="3" onclick="edit(this)">
<input type="button" value="+" onclick="edit(this)">
</div>
<div>
<input type="button" value="4" onclick="edit(this)">
<input type="button" value="5" onclick="edit(this)">
<input type="button" value="6" onclick="edit(this)">
<input type="button" value="-" onclick="edit(this)">
</div>
<div>
<input type="button" value="7" onclick="edit(this)">
<input type="button" value="8" onclick="edit(this)">
<input type="button" value="9" onclick="edit(this)">
<input type="button" value="/" onclick="edit(this)">
</div>
<div>
<input type="button" value="0" onclick="edit(this)">
<input type="button" value="." onclick="edit(this)">
<input type="button" value="*" onclick="edit(this)">
<input type="button" value="=" onclick="calc()">
</div>
</div>
 </div>
  </div>

<div class="sample4 clearfix">
<div class="test">
</div>
<div class=test2>
</div>
<div class=test3>
</div>
</div>

<div class="sample5">
</div>

<script src="script.js"></script>
<script src="java.js"></script>


</body>
</html>