<?php

if($_SERVER["HTTP_REFERER"]) {
echo "<a href=\"".$_SERVER["HTTP_REFERER"]."\">[Go Back]</a>";
} else {
echo "<a href=\"javascript:history.go(-1);\">[Go Back]</a>";
}
?>