<?php

namespace Database\Factories;

use App\Models\Pageview;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pageview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'page_url'         => $this->faker->slug(),
            'Referer'          => $this->faker->domainName,
            'utm'              => [
                'source'   => $this->faker->randomElement(['facebook','twitter','google']),
                'medium'   => $this->faker->randomElement(['cpc','share','post']),
                'campaign' => $this->faker->randomElement(['diwali-dhamaka','new_year_sale','raksh bhandhan']),
                'term'     => $this->faker->randomElement(['FOMO','Buy 1 Get 1','free_shipping']),
                'content'  => $this->faker->randomElement(['logolink','textlink','bannerlink']),
            ],
            'device_type'      => $this->faker->randomElement(['desktop','laptop','tablet','mobile']),
            'device'           => $this->faker->randomElement(['iPhone','Nexus','AsusTablet','Moto G']),
            'browser'          => $this->faker->randomElement(['Chrome','IE','Safari','Firefox']),
            'broser_verison'   => $this->faker->randomFloat(2,35,80),
            'operating_system' => $this->faker->randomElement(['Ubuntu','Red hat','Chromium','Ubuntu','OS X']), 
            'fresh_visit'      => $this->faker->boolean, 
            'created_at'       => $this->faker->dateTimeThisYear(Carbon::today()->endOfYear()), 
        ];
        
    }
}
