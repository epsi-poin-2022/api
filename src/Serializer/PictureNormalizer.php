<?php

declare(strict_types = 1);

namespace App\Serializer;

use App\Entity\Picture;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use App\Service\FileUploader;


/**
 * PictureNormalizer
 */
final class PictureNormalizer implements ContextAwareNormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    private const ALREADY_CALLED = 'PICTURE_NORMALIZER_ALREADY_CALLED';

    public function __construct(private FileUploader $fileUploader) {}

    /**
     * @param             $data
     * @param string|null $format
     * @param array       $context
     *
     * @return bool
     */
    public function supportsNormalization($data, ?string $format = null, array $context = []): bool {
        return !isset($context[self::ALREADY_CALLED]) && $data instanceof Picture;
    }

    /**
     * Normalizes an object into a set of arrays/scalars.
     *
     * @param             $object  Object to normalize
     * @param string|null $format Format the normalization result will be encoded as
     * @param array       $context Context options for the normalizer
     *
     * @return array|\ArrayObject|bool|float|int|string|null \ArrayObject is used to make sure an empty object is encoded as an object not an array
     * @throws ExceptionInterface
     */
    public function normalize($object, ?string $format = null, array $context = []): float|array|bool|\ArrayObject|int|string|null
    {
        $context[self::ALREADY_CALLED] = true;

        // update the picture with the url
        /** @var Picture $object */
        $object->setFilePath($this->fileUploader->getUrl($object->getFile()));

        return $this->normalizer->normalize($object, $format, $context);
    }
}
