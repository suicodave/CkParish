@extends('base-entity-index',[
'createLink'=>false,
'indexName'=>'Certificate Issuances',
'collection'=>$certificates,
'tableName'=>'certificate-issuance.table',
'tableKey'=>'certificates'
])