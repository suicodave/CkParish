@extends('base-entity-index',[
'createLink'=>true,
'formLink'=>'priests.create',
'tableName'=>'priest.table',
'tableKey'=>'priests',
'collection'=>$priests,
'indexName'=>'Priest'
])