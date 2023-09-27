<?php

namespace App\Acf\Blocks;

final class Init {
	/**
	 * @var Helpers\BlockItem[]
	 */
	private static array $blocks = array(
		General\Hero::class,
		General\CurrentNews::class,
		General\ImpactPotential::class,
		General\OurFocus::class,
		General\WhatWe::class,
		General\Partfolio::class,
		General\OurTeam::class,
		General\RecentNews::class,
		General\WhatOur::class,
	);
	
	public function __construct()
	{
		/*
		** More info about acf bocks here: https://www.advancedcustomfields.com/resources/acf_register_block_type/
		*/
		foreach (self::$blocks as $block) {
			$block::setBlockParams();
		}
		RegisterBlock::init();
	}

}