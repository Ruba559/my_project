<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
        [
            'name'=>'LG mobile',
            'price'=>'2000',
            'description'=>'A smart phone',
            'category' => 'mobile',
            'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fmobile-phones%2Flg-LMX440IM&psig=AOvVaw2TrtcmvJWgtsl5ID2eoe1Y&ust=1609609688139000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCrscWl--0CFQAAAAAdAAAAABAD'
        ],
            [
                'name'=>'LG mobile',
                'price'=>'2000',
                'description'=>'A smart phone',
                'category' => 'mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fmobile-phones%2Flg-LMX440IM&psig=AOvVaw2TrtcmvJWgtsl5ID2eoe1Y&ust=1609609688139000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCrscWl--0CFQAAAAAdAAAAABAD'
            ],
            [
                'name'=>'LG mobile',
                'price'=>'2000',
                'description'=>'A smart phone',
                'category' => 'mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fmobile-phones%2Flg-LMX440IM&psig=AOvVaw2TrtcmvJWgtsl5ID2eoe1Y&ust=1609609688139000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCrscWl--0CFQAAAAAdAAAAABAD'
            ],
            [
                'name'=>'LG mobile',
                'price'=>'2000',
                'description'=>'A smart phone',
                'category' => 'mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fmobile-phones%2Flg-LMX440IM&psig=AOvVaw2TrtcmvJWgtsl5ID2eoe1Y&ust=1609609688139000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCrscWl--0CFQAAAAAdAAAAABAD'
            ],
            [
                'name'=>'LG mobile',
                'price'=>'2000',
                'description'=>'A smart phone',
                'category' => 'mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fmobile-phones%2Flg-LMX440IM&psig=AOvVaw2TrtcmvJWgtsl5ID2eoe1Y&ust=1609609688139000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCrscWl--0CFQAAAAAdAAAAABAD'
            ],

        ]);
    }

}
