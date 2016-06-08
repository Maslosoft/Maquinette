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
interface PackageCssInterface extends PackageInterfaces
{

	public function addPath($path);

	public function getPaths();
}
