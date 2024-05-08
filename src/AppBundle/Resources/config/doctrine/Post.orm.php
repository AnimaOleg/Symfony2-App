<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Entity\PostRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'title',
   'fieldName' => 'title',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'summary',
   'fieldName' => 'summary',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'content',
   'fieldName' => 'content',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'authorEmail',
   'fieldName' => 'authorEmail',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'publishedAt',
   'fieldName' => 'publishedAt',
   'type' => 'datetime',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);