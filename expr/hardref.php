<?php ## Жесткая ссылка на несуществующий элемент массива.
  $A = array(
    'вилка'     => '271 руб. 82 коп.',
    'сковорода' => '818 руб. 28 коп.'
  );
  $b =& $A['ложка'];  // $b — то же, что и элемент с индексом 'ложка'
  echo "Элемент с индексом 'ложка': ".$A['ложка']."<br>";
  echo "Тип несуществующего элемента 'ложка': ".gettype($A['ложка']);
?>
