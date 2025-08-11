<?php

namespace Database\Seeders;

use App\Models\StaticFilter;
use Illuminate\Database\Seeder;

class StaticFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oredring = 1;

        $filters = [
            [
                'title' => 'فیلتر زیرشاخه ها',
                'type'  => 'child_category',
            ],
            [
                'title' => 'فیلتر موجودی خودرو',
                'type'  => 'stock',
            ],
            [
                'title' => 'فیلتر برند خودرو',
                'type'  => 'brand',
            ],
            [
                'title' => 'فیلتر قیمت خودرو',
                'type'  => 'price',
            ],
        ];

        $filters_id = [];

        foreach ($filters as $filter) {
            $inserted_filter = StaticFilter::updateOrCreate(
                [
                    'title' => $filter['title'],
                    'type'  => $filter['type']
                ],
                [
                    'ordering' => $oredring++,
                ]
            );

            $filters_id[] = $inserted_filter->id;
        }

        StaticFilter::whereNotIn('id', $filters_id)->delete();
    }
}
