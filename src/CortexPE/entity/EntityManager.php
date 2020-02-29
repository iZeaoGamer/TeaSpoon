<?php

/**
 *
 * MMP""MM""YMM               .M"""bgd
 * P'   MM   `7              ,MI    "Y
 *      MM  .gP"Ya   ,6"Yb.  `MMb.   `7MMpdMAo.  ,pW"Wq.   ,pW"Wq.`7MMpMMMb.
 *      MM ,M'   Yb 8)   MM    `YMMNq. MM   `Wb 6W'   `Wb 6W'   `Wb MM    MM
 *      MM 8M""""""  ,pm9MM  .     `MM MM    M8 8M     M8 8M     M8 MM    MM
 *      MM YM.    , 8M   MM  Mb     dM MM   ,AP YA.   ,A9 YA.   ,A9 MM    MM
 *    .JMML.`Mbmmd' `Moo9^Yo.P"Ybmmd"  MMbmmd'   `Ybmd9'   `Ybmd9'.JMML  JMML.
 *                                     MM
 *                                   .JMML.
 * This file is part of TeaSpoon.
 *
 * TeaSpoon is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * TeaSpoon is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with TeaSpoon.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author CortexPE
 * @link https://CortexPE.xyz
 *
 */

declare(strict_types = 1);

namespace CortexPE\entity;

use CortexPE\entity\mob\{
	Bat,
	Blaze,
	CaveSpider,
	Chicken,
	Cow,
	Creeper,
	Donkey,
	ElderGuardian,
	EnderDragon,
	Enderman,
	Endermite,
	Evoker,
	Ghast,
	Guardian,
	Horse,
	Husk,
	IronGolem,
	Llama,
	MagmaCube,
	Mooshroom,
	Mule,
	Ocelot,
	Parrot,
	Pig,
	PigZombie,
	PolarBear,
	Rabbit,
	Sheep,
	Shulker,
	Silverfish,
	Skeleton,
	Slime,
	SnowGolem,
	Spider,
	Stray,
	Vex,
	Vindicator,
	Witch,
	Wither,
	WitherSkeleton,
	Wolf,
	ZombieHorse,
	ZombieVillager
};
use CortexPE\entity\object\{
	AreaEffectCloud, ArmorStand, EndCrystal, Lightning
};
use CortexPE\entity\projectile\{
	Arrow, FireworkRocket, FishingHook, LingeringPotion, ThrownTrident
};
use CortexPE\entity\vehicle\Boat;
use CortexPE\entity\vehicle\BrokenMinecart;
use CortexPE\entity\vehicle\Minecart;
use CortexPE\Main;
use pocketmine\entity\Entity;

class EntityManager extends Entity {
	public static function init(): void{
		// TODO: MobAI...
		Main::getPluginLogger()->debug("Registering Entities...");
		if(Main::$registerVanillaEntities){
			self::registerEntity(Creeper::class, true, ['Creeper', 'minecraft:creeper']);
		}

		// Projectiles ////
		self::registerEntity(LingeringPotion::class, true, ['LingeringPotion', 'minecraft:lingeringpotion']);
		self::registerEntity(FishingHook::class, true, ['FishingHook', 'minecraft:fishinghook']);
		self::registerEntity(Arrow::class, true, ['Arrow', 'minecraft:arrow']);
		self::registerEntity(FireworkRocket::class, true, ['Firework', 'minecraft:firework']);
		self::registerEntity(ThrownTrident::class, true, ['Trident', 'minecraft:trident']);

		// Other Entities ////
		self::registerEntity(AreaEffectCloud::class, true, ['AreaEffectCloud', 'minecraft:areaeffectcloud']);
		self::registerEntity(Lightning::class, true, ['Lightning', 'minecraft:lightning']);
		self::registerEntity(EndCrystal::class, true, ['EnderCrystal', 'minecraft:ender_crystal']);
		self::registerEntity(Boat::class, true, ['Boat', 'minecraft:boat']);
		self::registerEntity(ArmorStand::class, true, ['ArmorStand', 'minecraft:armor_stand']);
//		if(strtolower(Main::$cars) === "true"){
//			Main::getPluginLogger()->debug("Using Minecart Vanilla");
//			self::registerEntity(Minecart::class, true, ['Minecart', 'minecraft:minecart']);
//		} else if(strtolower(Main::$cars) === "false") {
//			Main::getPluginLogger()->debug("Using Minecart Genisys");
//			self::registerEntity(BrokenMinecart::class, true, ['Minecart', 'minecraft:minecart']);
//		}
	}
}
