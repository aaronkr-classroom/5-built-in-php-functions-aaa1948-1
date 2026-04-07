<?php
$text = 'home swEEt homE';
?>


<p>
  <b>Lowercase: 소문자로 변경하기</b>
  <?= strtolower($text) ?><br>

  <b>Uppercase: 대문자로 변경하기</b>
  <?= strtoupper($text) ?><br>

  <b>Uppercase first letter: 첫 문자가 대문자로...</b>
  <?= ucwords($text) ?><br>

  <b>Character count: 문자의 개수...</b>
  <?= strlen($text) ?><br>

  <b>Word count: 단어의 개수...</b>
  <?= str_word_count($text) ?>
</p>
