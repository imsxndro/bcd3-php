<?php

// data.php

// functions.php

function execute($module) {
    global $data;
    $content .= '<div>';
    foreach($data[$module] as $item) {
        $content .= '<span>' . $item['date'] . '</span>';
        $content .= '<h1>'. $item['h1'] . '</h1>';
        // $content .= ...
    }
    $content .= "</div>";
    return $content;
}

?>