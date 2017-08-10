<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\UnitOfWork;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadataInfo;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AppBundleDocumentDataHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $return = $value instanceof \MongoId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['date'])) {
            $value = $data['date'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['date']->setValue($document, clone $return);
            $hydratedData['date'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['neoReferenceId']) || (! empty($this->class->fieldMappings['neoReferenceId']['nullable']) && array_key_exists('neoReferenceId', $data))) {
            $value = $data['neoReferenceId'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['neoReferenceId']->setValue($document, $return);
            $hydratedData['neoReferenceId'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['name']) || (! empty($this->class->fieldMappings['name']['nullable']) && array_key_exists('name', $data))) {
            $value = $data['name'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['name']->setValue($document, $return);
            $hydratedData['name'] = $return;
        }

        /** @Field(type="float") */
        if (isset($data['kilometersPerHour']) || (! empty($this->class->fieldMappings['kilometersPerHour']['nullable']) && array_key_exists('kilometersPerHour', $data))) {
            $value = $data['kilometersPerHour'];
            if ($value !== null) {
                $return = (float) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['kilometersPerHour']->setValue($document, $return);
            $hydratedData['kilometersPerHour'] = $return;
        }

        /** @Field(type="bool") */
        if (isset($data['isPotentiallyHazardousAsteroid']) || (! empty($this->class->fieldMappings['isPotentiallyHazardousAsteroid']['nullable']) && array_key_exists('isPotentiallyHazardousAsteroid', $data))) {
            $value = $data['isPotentiallyHazardousAsteroid'];
            if ($value !== null) {
                $return = (bool) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['isPotentiallyHazardousAsteroid']->setValue($document, $return);
            $hydratedData['isPotentiallyHazardousAsteroid'] = $return;
        }
        return $hydratedData;
    }
}