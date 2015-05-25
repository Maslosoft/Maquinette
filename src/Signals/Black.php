<?php

namespace Maslosfot\Maquinette\Signals;

use Maslosoft\Signals\ISignal;

/**
 * DRAFT For adding bower package file or path to compilation.
 */
class Black implements ISignal
{

	const JavaScript = 1;
	const CoffeeScript = 2;
	const CSS = 3;

	public function addPackageFile($package, $file, $type = self::JavaScript)
	{

	}

	public function addPackagePath($package, $path)
	{

	}

}
