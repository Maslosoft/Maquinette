<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette\Interfaces;

/**
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
interface CopyInterface extends BuildableInterface
{

	public function getCwd();

	public function getSrc();

	public function getDest();

	public function setCwd($cwd);

	public function setSrc($src);

	public function setDest($dest);
}
