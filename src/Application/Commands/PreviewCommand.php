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
 * Preview
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class PreviewCommand extends ConsoleCommand
{

	protected function configure()
	{
		$this->setName("preview");
		$this->setDescription("Show list of files to include");
		$this->setDefinition([
		]);

		$help = <<<EOT
The <info>preview</info> command will display files which will be included in your build.
				These files can be included in your build with <info>collect</info> command.
EOT;
		$this->setHelp($help);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		throw new Exception('Not implemented');
	}

	/**
	 * @SlotFor(Maslosoft\Sitcom\Command)
	 * @param Maslosoft\Signals\Command $signal
	 */
	public function reactOn(Command $signal)
	{
		$signal->add($this, 'hedron');
	}

}
