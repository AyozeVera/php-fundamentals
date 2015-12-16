<?php

class HTML {
  public function anchor($href, $text){
    return "<a href='$href'>$text</a>";
  }
}

$html = new HTML();
echo $html->anchor('http://google.es', 'Google');
