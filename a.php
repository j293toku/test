#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    // trim() 関数を使って行末の改行を削除
    $line = trim($line);
    
    // strpos() 関数を使って、文字列 "abc" が含まれるかをチェック
    if (strpos($line, 'abc') !== false) {
      // 文字列 "abc" が含まれる場合、その行を表示
      echo "$line\n";
    }
  } 
?>
