<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Partfolio implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'partfolio',
				'Partfolio',
				'Partfolio block',
				'templates/parts/partfolio.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Partfolio block",
					'description' => "Partfolio block"
				),
				'image',
				'custom'
			)
		);
	}
}