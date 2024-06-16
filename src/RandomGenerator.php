<?php

declare(strict_types=1);

namespace Ulolop\RandomPackage;

class RandomGenerator
{
	public function generate(int $length): string
	{
		return random_bytes($length);
	}
}
