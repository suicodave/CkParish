@extends('base-entity-index',[
'createLink'=>false,
'indexName'=>'Permission',
'collection'=>$permissions,
'tableName'=>'permission.table',
'tableKey'=>'permissions'
])