@extends('base-entity-index',[
'createLink'=>true,
'formLink'=>'baptismals.create',
'tableName'=>'baptismal.table',
'tableKey'=>'baptismals',
'collection'=>$baptismals,
'indexName'=>'Baptismal'
])