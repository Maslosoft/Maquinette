<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosfot\Maquinette\Models;

use Maslosoft\Maquinette\Interfaces\CopyInterface;

/**
 * Copy
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Copy implements CopyInterface
{

	private $cwd = '';
	private $src = '*';
	private $dest = '';

	public function getCwd()
	{
		return $this->cwd;
	}

	public function getSrc()
	{
		return $this->src;
	}

	public function getDest()
	{
		return $this->dest;
	}

	/**
	 * Set currerent working directory.
	 * @param type $cwd
	 * @return static
	 */
	public function setCwd($cwd)
	{
		$this->cwd = $cwd;
		return $this;
	}

	/**
	 * Set source mask. This could be simply `*` to include all files.
	 * In fact asterisk is default value.
	 * @param string $src
	 * @return static
	 */
	public function setSrc($src)
	{
		$this->src = $src;
		return $this;
	}

	/**
	 * Set destination path. This must be relative to project `dist` path.
	 * @param string $dest
	 * @return static
	 */
	public function setDest($dest)
	{
		$this->dest = $dest;
		return $this;
	}

}
