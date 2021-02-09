@extends('layouts.common')
{{-- @include('layouts.common') --}}
<body>
  <h1 class="top-logo">Zebra</h1>
  <h2 class="contact">問い合わせ</h2>
  <form action="#" method="GET">
    <div class="name">
      <input class="fname" type="text" name="first-name" placeholder="姓" value="">
      <input class="lname" type="text" name="last-name" placeholder="名" value="">
    </div>
    <input type="text" name="mail" value="" placeholder="メールアドレス">
    <input type="text" name="remail" value="" placeholder="メールアドレス確認用">
    <span class="item-name">お問い合わせ</span>

    <div class="textarea-wrap">
      <textarea name="name" rows="8" cols="80" value=""></textarea>
    </div>
    </div>
    <div class="submit-wrap">
      <input type="submit" value="送信">
    </div>
  </form>

</body>

</html>
