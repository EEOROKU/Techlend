<?php
    $p2l1 = "Products/prod2/t&c1.html";
    $p2l2 = "Products/prod2/t&c2.html";
    $p2l3 = "Products/prod2/t&c3.html";
    // Check if a new page is submitted via the form
    if (isset($_POST['new_page'])) {
        $page = $_POST['new_page'];
    }
?>