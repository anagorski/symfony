<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator;

trigger_error('The "Symfony\Component\Validator\MetadataFactoryInterface" interface is deprecated since version 2.5 and will be removed in Symfony 3.0. You should use the "Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface" interface instead.', E_USER_DEPRECATED);

/**
 * Returns {@link MetadataInterface} instances for values.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated Deprecated since version 2.5, to be removed in Symfony 3.0.
 *             Use {@link Mapping\Factory\MetadataFactoryInterface} instead.
 */
interface MetadataFactoryInterface
{
    /**
     * Returns the metadata for the given value.
     *
     * @param mixed $value Some value
     *
     * @return MetadataInterface The metadata for the value
     *
     * @throws Exception\NoSuchMetadataException If no metadata exists for the given value
     */
    public function getMetadataFor($value);

    /**
     * Returns whether the class is able to return metadata for the given value.
     *
     * @param mixed $value Some value
     *
     * @return bool Whether metadata can be returned for that value
     */
    public function hasMetadataFor($value);
}
