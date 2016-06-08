<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosfot\Maquinette\Models;

/**
 * Bower copy build merger.
 *
 * Example usage - copy jQuery UI images:
 * ```
 * $copy = new BowerCopy();
 * $copy->setPackage('jquery-ui');
 * $copy->setCwd('themes/base/images/');
 * $copy->setSrc('*.png');
 * $copy->setDest('images');
 * ```
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class BowerCopy extends Copy
{

	use \Maslosoft\Maquinette\Traits\PackageTrait;

	/**
	 * Set package working directory. This must be relative to package folder.
	 * Leave empty for root package directory.
	 * @param string $src
	 * @return static
	 */
	public function setCwd($src)
	{
		$package = $this->getPackage();
		if (empty($package))
		{
			throw new \UnexpectedValueException('Package cannot be empty, use setPackage() to set it');
		}
		$this->src = sprintf('%s/%s', $package, ltrim($src, '\\/'));
		return $this;
	}

}
