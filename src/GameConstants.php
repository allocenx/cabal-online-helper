<?php

namespace cyberinferno\Cabal\Helpers;

/**
 * Class GameConstants
 *
 * Contains explanations for many constants used in Cabal Online server
 *
 * @package cyberinferno\Cabal\Helpers
 * @author Karthik P
 */
class GameConstants
{
    public static function listClasses()
    {
        return [
            1 => 'Warrior',
            2 => 'Blader',
            3 => 'Wizard',
            4 => 'Force Archer',
            5 => 'Force Shielder',
            6 => 'Force Blader'
        ];
    }

    public static function listNations()
    {
        return [
            0 => 'Neutral',
            1 => 'Capella',
            2 => 'Procyon',
            3 => 'GM'
        ];
    }

    public static function listRanks()
    {
        return [
            257 => 'Novice',
            514 => 'Apprentice',
            771 => 'Regular',
            1028 => 'Expert',
            1285 => 'A.Expert',
            1542 => 'Master',
            1799 => 'A.Master',
            2056 => 'G.Master',
            2313 => 'Completer',
            2570 => 'Transcender'
        ];
    }

    public static function listAuras()
    {
        return [
            0 => 'None',
            2 => 'Land Aura',
            4 => 'Aqua Aura',
            6 => 'Wind Aura',
            8 => 'Flame Aura',
            10 => 'Freezing Aura',
            12 => 'Lightning Aura'
        ];
    }

    public static function listItemDurations()
    {
        return [
            0 => 'No Duration',
            1 => '1 Hour',
            2 => '2 Hours',
            3 => '3 Hours',
            4 => '4 Hours',
            5 => '5 Hours',
            6 => '6 Hours',
            7 => '10 Hours',
            8 => '12 Hours',
            9 => '1 Day',
            10 => '3 Days',
            11 => '5 Days',
            12 => '7 Days',
            13 => '10 Days',
            14 => '14 Days',
            15 => '15 Days',
            16 => '20 Days',
            17 => '30 Days',
            18 => '45 Days',
            19 => '60 Days',
            20 => '90 Days',
            21 => '100 Days',
            22 => '120 Days',
            23 => '180 Days',
            24 => '270 Days',
            25 => '365 Days',
            31 => 'Permanent'
        ];
    }

    public static function listBindings()
    {
        return [
            0 => 'None',
            4096 => 'Account Binding',
            524288 => 'Character Binding',
            1572864 => 'Character Binding on Usage'
        ];
    }
}