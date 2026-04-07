<?php
$text = 'Home sweet home';
?>

<p>
  <b>First match (case-sensitive):</b>
  <?= strpos($text, 'ho') ?> (11)<br>

  <b>First match (not case-sensitive):</b>
  <?= stripos($text, 'me', 5)?> (13)<br>

  <b>Last match (case-sensitive):</b>
  <?= strrpos($text, 'Ho')?> (0)<br>

  <b>Last match (not case-sensitive):</b>
  <?= stripos($text, 'Ho')?> (11)<br>

  <b>Text after first match (case-sensitive):</b>
  <?= strstr($text, 'ho')?> (Home)<br>

  <b>Text after first match (not case-sensitive):</b>
  <?= stristr($text, 'ho')?> (Home sweet home)<br>

  <b>Text between two position 1 to length:</b>
  <?= strstr($text, 5, 5)?> (sweet)<br>
</p>
