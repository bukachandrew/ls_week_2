<?php
include '../../class/Burger.php';

$burger = new Burger();

$user = $burger->getUserByEmail($_GET['email']);

if (!$user) {
    $userCreate = $burger->setUser($_GET['name'], $_GET['email'], $_GET['phone'], $_GET['street'], $_GET['house'], $_GET['frame'], $_GET['apartment'], $_GET['floor']);
    $user = $burger->getUserByEmail($_GET['email']);
}

$order = $burger->setOrder($user['id'], $_GET['comment'], $_GET['payment'], $_GET['callback']);
$orderUsers = $burger->listOrderByUser($user['id']);


$return = [
    'name' => $user['name'],
    'email' => $user['email'],
    'phone' => $user['phone'],
    'street' => $user['street'],
    'house' => $user['house'],
    'frame' => $user['frame'],
    'apartment' => $user['apartment'],
    'floor' => $user['floor'],
    'order_id' => $order,
    'order_count' => $orderUsers['count'],
];

echo json_encode($return);

