<?php
include 'Db.php';

class Burger
{
    public function getUserByEmail(string $email)
    {
        $db = Db::getInstance();
        $queryUser = "SELECT * FROM `users` WHERE `email` = :user_email";
        return $db->fetchOne($queryUser, [':user_email' => $email]);
    }

    public function setUser(string $name, string $email, string $phone = '', string $street = '', string $house = '', string $apartment = '', string $frame = null, string $floor = null)
    {
        $db = Db::getInstance();
        $queryUserAdd = "INSERT INTO `users` (`name`, `email`, `phone`, `street`, `house`, `frame`, `apartment`, `floor`) 
            VALUES (:user_name, :user_email, :user_phone, :user_street, :user_house, :user_frame, :user_apartment, :user_floor)";
        return $db->exec($queryUserAdd, [
            ':user_name' => $name,
            ':user_email' => $email,
            ':user_phone' => $phone,
            ':user_street' => $street,
            ':user_house' => $house,
            ':user_frame' => $frame,
            ':user_apartment' => $apartment,
            ':user_floor' => $floor,
        ]);
    }

    public function setOrder(int $id, string $comment = '', string $payment = null, int $callback = 1)
    {
        $db = Db::getInstance();
        $queryOrderAdd = "INSERT INTO `orders`(`user_id`, `comment`, `payment`, `callback`) 
            VALUES (:user_id, :order_comment, :order_payment, :order_callback)";
        return $db->exec($queryOrderAdd, [
            ':user_id' => $id,
            ':order_comment' => $comment,
            ':order_payment' => $payment,
            ':order_callback' => $callback,
        ], __FILE__);
    }

    public function listOrderByUser(int $id)
    {
        $db = Db::getInstance();
        $queryOrder = "SELECT COUNT(*) as count FROM `orders` WHERE `user_id` = :user_id";
        return $db->fetchOne($queryOrder, [':user_id' => $id]);
    }
}