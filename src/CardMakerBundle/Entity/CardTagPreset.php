<?php

namespace CardMaker\Entity;

class CardTagPreset
{
    /**
     * @var string
     */
    private $tag;

    /**
     * @var array
     */
    private $layers = [];

    /**
     * init
     *
     * @param string $tag
     * @param array $layers
     */
    public function init($tag, array $layers)
    {
        $this->tag = $tag;
        $this->layers = $layers;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @return array
     */
    public function getLayers(): array
    {
        return $this->layers;
    }
}
