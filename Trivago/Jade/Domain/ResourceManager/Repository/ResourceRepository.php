<?php

/*
 * Copyright (c) 2017-present trivago GmbH
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Trivago\Jade\Domain\ResourceManager\Repository;

use Trivago\Jade\Domain\Resource\Constraint;
use Trivago\Jade\Domain\Resource\SortCollection;

interface ResourceRepository
{
    /**
     * @param mixed     $id
     * @param string[] $relationships
     *
     * @return object
     */
    public function fetchOneResource($id, array $relationships);

    /**
     * @param array    $ids
     * @param string[] $relationships
     *
     * @return array
     */
    public function fetchResourcesByIds(array $ids, array $relationships);

    /**
     * @param array          $relationships
     * @param Constraint     $constraint
     * @param SortCollection $sortCollection
     *
     * @return array
     */
    public function fetchResourcesWithConstraint(array $relationships, Constraint $constraint, SortCollection $sortCollection);

    /**
     * @param object $resource
     */
    public function deleteResource($resource);

    /**
     * @param object $resource
     */
    public function saveResource($resource);
}
