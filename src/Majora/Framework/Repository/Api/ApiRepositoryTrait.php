<?php

namespace Majora\Framework\Repository\Api;

use Majora\Framework\Model\CollectionableInterface;

/**
 * Base trait for api repository.
 */
trait ApiRepositoryTrait
{
    /**
     * @see RepositoryInterface::persist()
     */
    public function persist(CollectionableInterface $entity)
    {
        return;
    }

    /**
     * @see RepositoryInterface::remove()
     */
    public function remove(CollectionableInterface $entity)
    {
        return;
    }
}
