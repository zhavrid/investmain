<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class OurTeam implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'ourTeam',
				'OurTeam',
				'OurTeam block',
				'templates/parts/ourTeam.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "OurTeam block",
					'description' => "OurTeam block"
				),
				'image',
				'custom'
			)
		);
	}
}