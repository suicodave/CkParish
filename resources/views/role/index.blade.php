@extends('base-entity-index',[
'createLink'=>true,
'formLink'=>'roles.create',
'tableName'=>'role.table',
'tableKey'=>'roles',
'collection'=>$roles,
'indexName'=>'Role'
])