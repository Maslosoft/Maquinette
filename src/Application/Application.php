<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette\Application;

use Symfony\Component\Console\Application as ConsoleApplication;

/**
 * MaquinetteApplication
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Application extends ConsoleApplication
{

	/**
	 * Logo
	 * font: slant
	 */
	const Logo = <<<LOGO
     __  ___                  _            __  __
   /  |/  /___ _____ ___  __(_)___  ___  / /_/ /____
  / /|_/ / __ `/ __ `/ / / / / __ \/ _ \/ __/ __/ _ \
 / /  / / /_/ / /_/ / /_/ / / / / /  __/ /_/ /_/  __/
/_/  /_/\__,_/\__, /\__,_/_/_/ /_/\___/\__/\__/\___/
                /_/

LOGO;

	public function __construct()
	{
		parent::__construct('Maquinette', require __DIR__ . '/../version.php');
	}

	public function getHelp()
	{
		return self::Logo . parent::getHelp();
	}

	/**
	 * Gets the default commands that should always be available.
	 *
	 * @return Command[] An array of default Command instances
	 */
	public function getDefaultCommands()
	{
		$commands = parent::getDefaultCommands();

		$commands[] = new SingleCommand();

		return $commands;
	}

}
