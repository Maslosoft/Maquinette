<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosfot\Maquinette\Models;

use Maslosoft\Maquinette\Interfaces\PackageJsInterface;

/**
 * BowerJs
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class BowerJs implements PackageJsInterface
{

	use \Maslosoft\Maquinette\Traits\PackageTrait,
	  \Maslosoft\Maquinette\Traits\PackagePathsTrait;
}
