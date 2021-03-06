<?php
/*
*
* Copyright (C) 2017 Muqsit Rayyan
*
*  _____ _               _   _____ _                 
* /  __ \ |             | | /  ___| |                
* | /  \/ |__   ___  ___| |_\ `--.| |__   ___  _ __  
* | |   | '_ \ / _ \/ __| __|`--. \ '_ \ / _ \| '_ \ 
* | \__/\ | | |  __/\__ \ |_/\__/ / | | | (_) | |_) |
*  \____/_| |_|\___||___/\__\____/|_| |_|\___/| .__/ 
*                                             | |    
*                                             |_|    
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Lesser General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
*
* @author Muqsit Rayyan
*
*/
namespace ChestShop\Chest;

use pocketmine\block\Block;
use pocketmine\level\Level;
use pocketmine\nbt\tag\{CompoundTag, IntTag};

class CustomChest extends \pocketmine\tile\Chest{

	public function __construct(Level $level, CompoundTag $nbt){
		parent::__construct($level, $nbt);
		$this->inventory = new CustomChestInventory($this);
	}

	public function getReplacement() : Block{
		$replace = $this->namedtag->replace->getValue() ?? [0, 0];
		return Block::get($replace[0], $replace[1]);
	}
}
