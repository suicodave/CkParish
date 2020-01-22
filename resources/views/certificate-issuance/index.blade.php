@extends('base-entity-index',[
'createLink'=>false,
'indexName'=>'Certificate Issuance',
'collection'=>$certificates,
'tableName'=>'certificate-issuance.table',
'tableKey'=>'certificates'
])