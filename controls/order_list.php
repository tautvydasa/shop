<?php

include 'libraries/orders.class.php';
$ordersObj = new orders();
$elementCount = $ordersObj->getOrdersListCount();
include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);
$paging->process($elementCount, $pageId);
if (!empty($_GET['sort'])) {
    $data = $ordersObj->getSortedOrdersList($paging->size, $paging->first, $_GET['sort']);
} else
    $data = $ordersObj->getOrdersList($paging->size, $paging->first);
include 'templates/order_list.tpl.php';
?>

