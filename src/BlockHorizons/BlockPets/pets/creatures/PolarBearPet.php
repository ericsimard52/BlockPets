<?php

declare(strict_types = 1);

namespace BlockHorizons\BlockPets\pets\creatures;

use BlockHorizons\BlockPets\pets\WalkingPet;

class PolarBearPet extends WalkingPet {

	const NETWORK_NAME = "POLAR_BEAR_PET";
	const NETWORK_ORIG = self::POLAR_BEAR;

	public $height = 1.4;
	public $width = 1.3;

	public $name = "Polar Bear Pet";
}
