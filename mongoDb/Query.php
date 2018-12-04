<?php
/**
 * 数据库查询 http://php.net/manual/zh/mongodb-driver-query.construct.php
 * @param $filter array|object
 * @param $queryOptions [, array  ]   limit, projection等
 * Created by PhpStorm.
 * User: 13sai
 * Date: 2018/12/4
 * Time: 17:26
 */
$manager = new MongoDB\Driver\Manager("mongodb://localhost:5606");

$filter = ['id' => 2];
$options = [
    'projection' => ['_id' => 0],
    'limit' => 1
];
$query = new MongoDB\Driver\Query($filter, $options);
$rows = $manager->executeQuery('sai.test', $query); // $mongo contains the connection object to MongoDB
foreach($rows as $r){
    print_r($r);
}