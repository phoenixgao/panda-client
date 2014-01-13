<?php

/*
 * This file is part of the XabbuhPandaClient package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\PandaClient\Transformer;

use Xabbuh\PandaClient\Model\Encoding;
use Xabbuh\PandaClient\Serializer\SerializerInterface;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
interface EncodingTransformerInterface
{
    /**
     * Convert a JSON encoded string into an Encoding object.
     *
     * @param string $jsonString The JSON string being transformed
     *
     * @return Encoding The transformed Encoding
     */
    public function fromJSON($jsonString);

    /**
     * Convert a JSON encoded collection of encodings into an array of Encoding
     * objects.
     *
     * @param string $jsonString The JSON string being transformed
     *
     * @return Encoding[] The transformed Encodings
     */
    public function fromJSONCollection($jsonString);
}
 