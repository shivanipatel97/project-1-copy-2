<header>
  <h1 id="name"> SHIVANI PATEL </h1>
<nav id="menu">
  <ul>
    <?php
    foreach($links as $link_id => $link_name) {
      // utilize the current location to style it differently
      if ($link_id == $current_link) {
        $style_id = "class='current_link'";
      } else {
        $style_id = "class='link'";
      }
      echo ("<li><a " . $style_id . " href='" . $link_id. ".php'>$link_name</a></li>");
    }
    ?>
  </ul>
</nav>
</header>
