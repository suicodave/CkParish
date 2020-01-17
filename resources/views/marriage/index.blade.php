@extends('base-entity-index',[
'createLink'=>true,
'formLink'=>'marriages.create',
'tableName'=>'marriage.table',
'tableKey'=>'marriages',
'collection'=>$marriages,
'indexName'=>'Marriage'
])