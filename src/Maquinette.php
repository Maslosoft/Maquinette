<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette;

use Maslosoft\Maquinette\Collections\IncludesCollection;

/**
 * Entry class for maquinette
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Maquinette
{

	public function collect()
	{
		return new IncludesCollection;
	}

}
