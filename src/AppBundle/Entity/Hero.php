<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;

class Hero
{
    const CHARACTER_GOOD = 'dobry';

    const CHARACTER_NEUTRAL = 'neutralny';

    const CHARACTER_EVIL = 'zły';

    const CHARACTERS = [
        self::CHARACTER_GOOD,
        self::CHARACTER_NEUTRAL,
        self::CHARACTER_EVIL
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $startLocation;

    /**
     * @var string
     */
    private $character;

    /**
     * @var int
     */
    private $strength;

    /**
     * @var int
     */
    private $craft;

    /**
     * @var int
     */
    private $life;

    /**
     * @var int
     */
    private $fate;

    /**
     * @var Collection
     */
    private $skills;

    /**
     * Hero constructor.
     *
     * @param string $name
     * @param string $startLocation
     * @param string $character
     * @param int $strength
     * @param int $craft
     * @param int $life
     * @param int $fate
     */
    public function __construct(
        string $name,
        string $startLocation,
        string $character,
        int $strength,
        int $craft,
        int $life,
        int $fate
    ) {
        $this->name = $name;
        $this->startLocation = $startLocation;
        $this->character = $character;
        $this->strength = $strength;
        $this->craft = $craft;
        $this->life = $life;
        $this->fate = $fate;
    }
}