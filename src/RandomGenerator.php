<?php

declare(strict_types=1);

namespace Ulolop\RandomPackage;

class RandomGenerator
{
	public function generate(int $length): string
	{
		$bytes = random_bytes($length);
		return bin2hex($bytes);
	}
}
