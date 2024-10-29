<?php

namespace SkyHub\Api\Service;

/**
 * Class OptionsBuilderInterface
 *
 * @package SkyHub\Api\Service
 */
interface OptionsBuilderInterface
{
    /**
     * @var string
     */
    const BODY_TYPE_DEFAULT = 'body';

    /**
     * @var string
     */
    const BODY_TYPE_JSON = 'json';

    /**
     * @var string
     */
    const BODY_TYPE_MULTIPART = 'multipart';

    /**
     * @return $this
     */
    public function reset();

    /**
     * @param int $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout);

    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setDebug($flag);

    /**
     * @param mixed  $body
     * @param string $type
     *
     * @return $this
     */
    public function setBody($body, $type = self::BODY_TYPE_DEFAULT);

    /**
     * @param bool $body
     *
     * @return $this
     */
    public function setStream($flag);

    /**
     * @param array $options
     *
     * @return $this
     */
    public function addOptions(array $options = []);

    /**
     * @return HeadersBuilderInterface
     */
    public function getHeadersBuilder();

    /**
     * @return array
     */
    public function build();
}
