<?php

namespace MyCommonBundle\Exception;

/**
 * Class ParametrizedException
 * @package MyCommonBundle\Exception
 */
class ParametrizedException extends \Exception
{
    /**
     * Params
     * @var array
     */
    private $params;

    /**
     * ParametrizedException constructor.
     * @param string $message message
     * @param array $params params
     * @param int $code code
     * @param \Exception|null $previous previous exception
     */
    public function __construct($message, $params = [], $code = 0, \Exception $previous = null)
    {
        $this->params = $params;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get exception params
     * @return array
     */
    final public function getParams()
    {
        return $this->params;
    }
}
