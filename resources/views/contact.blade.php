@extends('layouts.common')
{{-- @include('layouts.common') --}}
<body>
  <h1 class="top-logo">Zebra</h1>
  <h2 class="contact">問い合わせ</h2>
  <form action=" {{ action('ContactController@finish')}}" method="POST">
    @csrf
    <div class="name">
      <input class="fname" type="text" name="first_name" placeholder="姓" value="">
      <input class="lname" type="text" name="last_name" placeholder="名" value="">
    </div>
    <div class="contact-mail">
    <input class="contact-mail-form" type="text" name="email" value="" placeholder="メールアドレス">
    <input class="contact-remail-form" type="text" name="remail" value="" placeholder="メールアドレス確認用">
    </div>
    <div class="item-name1">
    <span class="item-name">お問い合わせ内容</span>
    </div>
    <div class="textarea-wrap">
      <textarea name="text" rows="8" cols="80" value=""></textarea>
    </div>
    </div>
    <div class="submit-wrap">
      <input type="submit" value="送信">
    </div>
  </form>

</body>

</html>
