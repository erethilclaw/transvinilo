<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\CamisetaRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'nombre',
   'fieldName' => 'nombre',
   'type' => 'string',
   'length' => '20',
  ));
$metadata->mapField(array(
   'columnName' => 'talla',
   'fieldName' => 'talla',
   'type' => 'string',
   'length' => '20',
  ));
$metadata->mapField(array(
   'columnName' => 'color',
   'fieldName' => 'color',
   'type' => 'string',
   'length' => '20',
  ));
$metadata->mapField(array(
   'columnName' => 'preu',
   'fieldName' => 'preu',
   'type' => 'float',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);