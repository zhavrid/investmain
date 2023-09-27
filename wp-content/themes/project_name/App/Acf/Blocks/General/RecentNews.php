<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class RecentNews implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'recentNews',
				'RecentNews',
				'RecentNews block',
				'templates/parts/recentNews.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "RecentNews block",
					'description' => "RecentNews block"
				),
				'image',
				'custom'
			)
		);
	}
}