<?php

function strnatcoll($s1, $s2) {

    $l1 = preg_match_all('/([^0-9]+)|([0-9]+)/', $s1, $m1);
    $l2 = preg_match_all('/([^0-9]+)|([0-9]+)/', $s2, $m2);

    $result = 0;
    for ($i = 0; $i < max($l1, $l2); $i++) {
        if (!isset($m1[0][$i])) {
            $result = -1;
        } else if (!isset($m2[0][$i])) {
            $result = 1;
        } else if ($m1[1][$i] != "" && $m2[1][$i] != "") {
            $result = strcoll($m1[1][$i], $m2[1][$i]);
        } else if ($m1[2][$i] != "" && $m2[2][$i] != "") {
            $result = intval($m1[2][$i]) - intval($m2[2][$i]);
        } else if ($m1[0][$i] != $m2[0][$i]) {
            $result = strnatcmp($m1[0][$i], $m2[0][$i]);
        }
        if ($result) break;
    }

    return $result;
}

?>
