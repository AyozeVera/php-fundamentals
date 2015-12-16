<?php

class HTML {
  public static function anchor($href, $text){
    return "<a href='$href'>$text</a>";
  }
}

echo HTML::anchor('http://google.es', 'Google');
