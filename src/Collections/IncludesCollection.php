<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette\Collections;

/**
 * This is a collection for whole assets.
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class IncludesCollection
{

	/**
	 *
	 * @var BowerAssets
	 */
	public $bower;
	public $coffee;
	public $js;
	public $css;

	public function __construct()
	{
		$this->bower = new \Maslosfot\Maquinette\Signals\Black;
	}

}
