<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette\Traits;

/**
 * PackageTrait
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
trait PackageTrait
{

	private $package = '';

	public function getPackage()
	{
		return $this->package;
	}

	public function setPackage($package)
	{
		$this->package = $package;
		return $this;
	}

}
