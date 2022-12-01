<?php
include '../../class/Db.php';

$db = Db::getInstance();
$queryUser = "SELECT * FROM `users` WHERE `email` = :user_email";
$ret = $db->fetchOne($queryUser, [':user_email' => $_GET['email']], __FILE__);

if (!$ret) {
    $queryUserAdd = "INSERT INTO `users` (`name`, `email`, `phone`, `street`, `house`, `frame`, `apartment`, `floor`) 
    VALUES (:user_name, :user_email, :user_phone, :user_street, :user_house, :user_frame, :user_apartment, :user_floor)";
    $userId = $db->exec($queryUserAdd, [
        ':user_name' => $_GET['name'] ?? '',
        ':user_email' => $_GET['email'] ?? '',
        ':user_phone' => $_GET['phone'] ?? '',
        ':user_street' => $_GET['street'] ?? '',
        ':user_house' => $_GET['house'] ?? '',
        ':user_frame' => $_GET['frame'] ?? null,
        ':user_apartment' => $_GET['apartment'] ?? '',
        ':user_floor' => $_GET['floor'] ?? null,
    ], __FILE__);

    $queryUser = "SELECT * FROM `users` WHERE `id` = :user_id";
    $ret = $db->fetchOne($queryUser, [':user_id' => $userId], __FILE__);
}

$queryOrderAdd = "INSERT INTO `orders`(`user_id`, `comment`, `payment`, `callback`) 
VALUES (:order_id, :order_comment, :order_payment, :order_callback)";
$order = $db->exec($queryOrderAdd, [
    ':order_id' => $ret['id'] ?? '',
    ':order_comment' => $_GET['comment'] ?? '',
    ':order_payment' => $_GET['payment'] ?? null,
    ':order_callback' => $_GET['callback'] ?? 1,
], __FILE__);

$queryOrder = "SELECT COUNT(*) as count FROM `orders` WHERE `user_id` = :user_id";
$orderCount = $db->fetchOne($queryOrder, [':user_id' => $ret['id']], __FILE__);


$return = [
    'name' => $ret['name'],
    'email' => $ret['email'],
    'phone' => $ret['phone'],
    'street' => $ret['street'],
    'house' => $ret['house'],
    'frame' => $ret['frame'],
    'apartment' => $ret['apartment'],
    'floor' => $ret['floor'],
    'order_id' => $order,
    'order_count' => $orderCount['count'],
];

echo json_encode($return);
