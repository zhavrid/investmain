<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class OurFocus implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'ourFocus',
				'OurFocus',
				'OurFocus block',
				'templates/parts/ourFocus.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "OurFocus block",
					'description' => "OurFocus block"
				),
				'image',
				'custom'
			)
		);
	}
}