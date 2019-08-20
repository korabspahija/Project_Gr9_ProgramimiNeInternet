<?php

$date = "2014-04-13";
print $date;
print "<br>";
if (preg_match ('/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/', $date, $regs)) {
    echo "$regs[3].$regs[2].$regs[1]";
} else {
    echo "Format invalid i dates: $date";
}
?>
