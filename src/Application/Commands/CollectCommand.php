<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Maquinette\Application\Commands;

use Exception;
use Maslosoft\Sitcom\Command;
use Symfony\Component\Console\Command\Command as ConsoleCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Collect
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class CollectCommand extends ConsoleCommand
{

	protected function configure()
	{
		$this->setName("collect");
		$this->setDescription("Collect all external includes");
		$this->setDefinition([
		]);

		$help = <<<EOT
The <info>collect</info> command will collect all JavaScript, CoffeeScript, CSS, bower assets etc and
	make list of them available for grunt build.
EOT;
		$this->setHelp($help);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		throw new Exception('Not implemented');
	}

	/**
	 * @SlotFor(Command)
	 * @param Command $signal
	 */
	public function reactOn(Command $signal)
	{
		$signal->add($this, 'maquinette');
	}

}
