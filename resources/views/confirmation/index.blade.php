@extends('base-entity-index',[
'createLink'=>true,
'formLink'=>'confirmations.create',
'tableName'=>'confirmation.table',
'tableKey'=>'confirmations',
'collection'=>$confirmations,
'indexName'=>'Confirmation'
])