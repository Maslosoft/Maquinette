<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette\Traits;

/**
 * PackagePathsTrait
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
trait PackagePathsTrait
{

	/**
	 * Paths to include in build
	 * @var string[]
	 */
	private $paths = [];

	/**
	 * Add path to include in build. Path must be relative to package folder.
	 * @param string $path
	 * @return static
	 */
	public function addPath($path)
	{
		$package = $this->getPackage();
		if (empty($package))
		{
			throw new \UnexpectedValueException('Package cannot be empty, use setPackage() to set it');
		}
		$this->paths[] = sprintf('%s/%s', $package, ltrim($path, '\\/'));
		return $this;
	}

	public function getPaths()
	{
		return $this->paths;
	}

	abstract public function getPackage();
}
