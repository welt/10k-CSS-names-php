<?php 
$colours = array("F0F8FF"=>"Alice Blue","FAEBD7"=>"Antique White","00FFFF"=>"Aqua","7FFFD4"=>"Aquamarine","F0FFFF"=>"Azure","F5F5DC"=>"Beige","FFE4C4"=>"Bisque","000000"=>"Black","FFEBCD"=>"Blanched Almond","0000FF"=>"Blue","8A2BE2"=>"Blue Violet","A52A2A"=>"Brown","DEB887"=>"Burly Wood","5F9EA0"=>"Cadet Blue","7FFF00"=>"Chartreuse","D2691E"=>"Chocolate","FF7F50"=>"Coral","6495ED"=>"Cornflower Blue","FFF8DC"=>"Cornsilk","DC143C"=>"Crimson","00FFFF"=>"Cyan","00008B"=>"Dark Blue","008B8B"=>"Dark Cyan","B8860B"=>"Dark Golden Rod","A9A9A9"=>"Dark Gray","006400"=>"Dark Green","BDB76B"=>"Dark Khaki","8B008B"=>"Dark Magenta","556B2F"=>"Dark Olive Green","FF8C00"=>"Dark Orange","9932CC"=>"Dark Orchid","8B0000"=>"Dark Red","E9967A"=>"Dark Salmon","8FBC8F"=>"Dark Sea Green","483D8B"=>"Dark Slate Blue","2F4F4F"=>"Dark Slate Gray","00CED1"=>"Dark Turquoise","9400D3"=>"Dark Violet","FF1493"=>"Deep Pink","00BFFF"=>"Deep Sky Blue","696969"=>"Dim Gray","1E90FF"=>"Dodger Blue","B22222"=>"Fire Brick","FFFAF0"=>"Floral White","228B22"=>"Forest Green","FF00FF"=>"Fuchsia","DCDCDC"=>"Gainsboro","F8F8FF"=>"Ghost White","FFD700"=>"Gold","DAA520"=>"Golden Rod","808080"=>"Gray","008000"=>"Green","ADFF2F"=>"Green Yellow","F0FFF0"=>"Honey Dew","FF69B4"=>"Hot Pink","CD5C5C"=>"Indian Red ","4B0082"=>"Indigo","FFFFF0"=>"Ivory","F0E68C"=>"Khaki","E6E6FA"=>"Lavender","FFF0F5"=>"Lavender Blush","7CFC00"=>"Lawn Green","FFFACD"=>"Lemon Chiffon","ADD8E6"=>"Light Blue","F08080"=>"Light Coral","E0FFFF"=>"Light Cyan","FAFAD2"=>"Light Golden Rod Yellow","D3D3D3"=>"Light Gray","90EE90"=>"Light Green","FFB6C1"=>"Light Pink","FFA07A"=>"Light Salmon","20B2AA"=>"Light Sea Green","87CEFA"=>"Light Sky Blue","778899"=>"Light Slate Gray","B0C4DE"=>"Light Steel Blue","FFFFE0"=>"Light Yellow","00FF00"=>"Lime","32CD32"=>"Lime Green","FAF0E6"=>"Linen","FF00FF"=>"Magenta","800000"=>"Maroon","66CDAA"=>"Medium Aqua Marine","0000CD"=>"Medium Blue","BA55D3"=>"Medium Orchid","9370DB"=>"Medium Purple","3CB371"=>"Medium Sea Green","7B68EE"=>"Medium Slate Blue","00FA9A"=>"Medium Spring Green","48D1CC"=>"Medium Turquoise","C71585"=>"Medium Violet Red","191970"=>"Midnight Blue","F5FFFA"=>"Mint Cream","FFE4E1"=>"Misty Rose","FFE4B5"=>"Moccasin","FFDEAD"=>"Navajo White","000080"=>"Navy","FDF5E6"=>"Old Lace","808000"=>"Olive","6B8E23"=>"Olive Drab","FFA500"=>"Orange","FF4500"=>"Orange Red","DA70D6"=>"Orchid","EEE8AA"=>"Pale Golden Rod","98FB98"=>"Pale Green","AFEEEE"=>"Pale Turquoise","DB7093"=>"Pale Violet Red","FFEFD5"=>"Papaya Whip","FFDAB9"=>"Peach Puff","CD853F"=>"Peru","FFC0CB"=>"Pink","DDA0DD"=>"Plum","B0E0E6"=>"Powder Blue","800080"=>"Purple","663399"=>"Rebecca Purple","FF0000"=>"Red","BC8F8F"=>"Rosy Brown","4169E1"=>"Royal Blue","8B4513"=>"Saddle Brown","FA8072"=>"Salmon","F4A460"=>"Sandy Brown","2E8B57"=>"Sea Green","FFF5EE"=>"Sea Shell","A0522D"=>"Sienna","C0C0C0"=>"Silver","87CEEB"=>"Sky Blue","6A5ACD"=>"Slate Blue","708090"=>"Slate Gray","FFFAFA"=>"Snow","00FF7F"=>"Spring Green","4682B4"=>"Steel Blue","D2B48C"=>"Tan","008080"=>"Teal","D8BFD8"=>"Thistle","FF6347"=>"Tomato","40E0D0"=>"Turquoise","EE82EE"=>"Violet","F5DEB3"=>"Wheat","FFFFFF"=>"White","F5F5F5"=>"White Smoke","FFFF00"=>"Yellow","9ACD32"=>"Yellow Green");

function getlist($amount, $colours, $names) {
  $rand = array_rand($colours, $amount);
  $tc = $rand[array_rand($rand,1)];
  $json = array();
  $list = '<ul class="cols" data-target="'.$tc.'x'.$colours[$tc].'">';
  foreach ($rand as $r) {
    $list .= '<li><button name="c" value="'.$r.'"  style="background:#'.$r.'"></li>';
    array_push($json, '"'.$r.'":"'.$colours[$r].'"');
  }
  $list .= '</ul>';
  if ($names) {
    $list.='{'.join($json,',').'}';
  }
  return $list;
}
if (isset($_GET['showlist'])) {
  echo getlist($_GET['showlist'], $colours, 1);
}

?>