<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class ImpactPotential implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'impactPotential',
				'ImpactPotential',
				'ImpactPotential block',
				'templates/parts/impactPotential.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "ImpactPotential block",
					'description' => "ImpactPotential block"
				),
				'image',
				'custom'
			)
		);
	}
}