<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Client;
use app\models\Order;
use app\models\OrderWork;
use app\models\Work;
use yii\db\Query;


class OrderController extends Controller
{
    public function actionIndex()
    {
        
        $rows = (new \yii\db\Query())
        ->select(['_order.id', 'client.name','client.phone','_order.name_pet', '_work.name_work'])
        ->from('_order')
        ->innerJoin('client', '_order.client_id = client.id')
        ->innerJoin('orderwork', '_order.id = orderwork.order_id')
        ->innerJoin('_work', 'orderwork.work_id = _work.id')
        ->where('YEAR(_order.date_time) = 2021 AND MONTH(_order.date_time) = 10')
        ->orderBy('_order.date_time ASC')
        ->createCommand();
        // print_r($rows->params);
        // echo count($orders);
        $orders = $rows->queryAll();


        // Напишите сюда код для выборки всех заказов за октябрь 2021 года, отсортированных по возрастанию даты заказа
        // В этом же массиве должна быть информация по связанным клиентам и работам
        // Использовать возможности Yii2 или прямой запрос в БД (считайте, что соединение уже установлено)



        // --------------------------
        return $this->render('index', [
            'orders' => $orders
        ]);
    }
}