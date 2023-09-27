<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class WhatWe implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'whatWe',
				'WhatWe',
				'WhatWe block',
				'templates/parts/whatWe.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "WhatWe block",
					'description' => "WhatWe block"
				),
				'image',
				'custom'
			)
		);
	}
}