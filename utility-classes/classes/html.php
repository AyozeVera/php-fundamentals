<?php

class HTML {
  public static function anchor($href, $text){
    return "<a href='$href'>$text</a>";
  }

  public static function items($items){
    return "<ul><li>" . implode('</li><li>', $items) . "</li></ul>";
  }

  public static function image($src, $alt = ''){
    return "<img src='$src' alt='$alt'>";
  }
}
