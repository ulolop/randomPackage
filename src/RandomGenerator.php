<?php

declare(strict_types=1);

namespace Ulolop\RandomPackage;

class RandomGenerator
{
	public function hex(int $length = 8): string
	{
		$bytes = random_bytes($length);
		return bin2hex($bytes);
	}

	public function string($length = 8)
	{
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charsCount = strlen($chars);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $chars[random_int(0, $charsCount - 1)];
		}
		return $randomString;
	}

	public function password($length = 8)
	{
		$charsGroups = [
			'abcdefghijklmnopqrstuvwxyz',
			"1234567890",
			'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
			" !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~",
		];
		$randomPassword = '';
		for ($i = 0; $i < $length; $i++) {
			$groupIndex = $i % 4;
			$groupLength = strlen($charsGroups[$groupIndex]);
			$chars = $charsGroups[$groupIndex];
			$randomPassword .= $chars[random_int(0, $groupLength - 1)];
		}
		return str_shuffle($randomPassword);
	}
}
