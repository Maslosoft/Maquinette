<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette\Interfaces;

/**
 * Implemet this to allow identifying includes by packages.
 * This is meant to be used by signals implementations.
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class ExternalPackageInterface
{

	/**
	 * Set packages name. This must be name of package which define includes,
	 * ie. composer package name. Do not msiunderstood it with bower or npm package name.
	 * If you composer package defines some assets and uses Maquinette, this method
	 * can be used to identify itself.
	 *
	 * Let's assume that maquinette itself requires `jquery` package. By calling this,
	 * will identify that `maslosoft/maquinette` requires jquery.
	 * ```php
	 * ...
	 * public function reactOn(Black $signal)
	 * {
	 * 		$signal->addPackageFile();
	 * 		// Here we identify itself
	 * 		$signal->setPackage('maslosoft', 'maniquette');
	 * 		// Or shorthand
	 * 		$signal->setPackage('maslosoft/maniquette');
	 * }
	 * ...
	 * ```
	 * @param $name Package name
	 */
	public function setPackage($vendor, $name);
}
