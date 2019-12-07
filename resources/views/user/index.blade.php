@extends('base-entity-index',[
'createLink'=>true,
'indexName'=>'User',
'collection'=>$users,
'formLink'=>'users.create',
'tableName'=>'user.table',
'tableKey'=>'users'
])