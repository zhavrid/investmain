<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class CurrentNews implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'currentNews',
				'CurrentNews',
				'CurrentNews block',
				'templates/parts/currentNews.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "CurrentNews block",
					'description' => "CurrentNews block"
				),
				'image',
				'custom'
			)
		);
	}
}