<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaderboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO leaderboards (cluster, name, score, playtime) VALUES
            ('4man', 'Iron Wolves', 98200, 1450),
            ('4man', 'Stone Legion', 104500, 1620),
            ('4man', 'Night Raiders', 87500, 1380),
            ('4man', 'Ashen Order', 112300, 1750),
            ('4man', 'Blood Pact', 96300, 1510),
            ('4man', 'Stormbound', 120450, 1820),
            ('4man', 'Grim Howl', 89500, 1400),
            ('4man', 'Black Anvil', 101200, 1580),
            ('4man', 'Rift Walkers', 109800, 1700),
            ('4man', 'Frostfall', 93400, 1470),
            ('4man', 'Iron Resolve', 118900, 1790),
            ('4man', 'Void Sentinels', 99000, 1550),
            ('4man', 'Warborn', 106700, 1660),
            ('4man', 'Crimson Tide', 113400, 1740),
            ('4man', 'Last Bastion', 125600, 1900),
            ('3man', 'Shadow Core', 74200, 1180),
            ('3man', 'Iron Fangs', 81500, 1290),
            ('3man', 'Obsidian', 79000, 1250),
            ('3man', 'Wraith Pack', 86200, 1360),
            ('3man', 'Nightfall', 90400, 1420),
            ('3man', 'Gravebound', 83100, 1310),
            ('3man', 'Steel Talons', 88000, 1390),
            ('3man', 'Dark Horizon', 91700, 1450),
            ('3man', 'Raven Guard', 76800, 1210),
            ('3man', 'Ash Wolves', 84500, 1340),
            ('3man', 'Iron Circle', 90300, 1410),
            ('3man', 'Void Runners', 78900, 1240),
            ('3man', 'Feral Pact', 85800, 1370),
            ('3man', 'Black Spear', 92600, 1480),
            ('3man', 'Storm Echo', 87200, 1380);");
    }
}
