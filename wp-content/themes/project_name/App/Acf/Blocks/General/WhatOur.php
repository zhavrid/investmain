<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class WhatOur implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'whatOur',
				'WhatOur',
				'WhatOur block',
				'templates/parts/whatOur.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "WhatOur block",
					'description' => "WhatOur block"
				),
				'image',
				'custom'
			)
		);
	}
}