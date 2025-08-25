<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarAgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $groupId          = 5;        // attribute_groups.id for "سال ساخت"
        $startGregorian   = 1956;
        $endGregorian     = 2025;
        $defaultValue     = '#000000'; // your example value
        $now              = now();

        $toInsert = [];

        for ($g = $startGregorian; $g <= $endGregorian; $g++) {
            $p = $g - 621;                 // simple mapping: 2025→1404, 1956→1335
            $name = "{$p}-{$g}";           // e.g. "1400-2021"

            // idempotent: skip if already exists (and not soft-deleted)
            $exists = DB::table('attributes')
                ->where('attribute_group_id', $groupId)
                ->where('name', $name)
                ->whereNull('deleted_at')
                ->exists();

            if (!$exists) {
                $toInsert[] = [
                    'attribute_group_id' => $groupId,
                    'name'               => $name,
                    'value'              => $defaultValue,
                    'month'              => null,
                    'created_at'         => $now,
                    'updated_at'         => $now,
                ];
            }
        }

        if (!empty($toInsert)) {
            DB::table('attributes')->insert($toInsert);
        }
    }
}


