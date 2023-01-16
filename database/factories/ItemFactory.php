<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $price_og = rand(100, 5000);
        $price_new = $price_og * 0.8;
        $chars = $this->faker->randomElements(array('多樣顏色可供挑選', '尺寸齊全', '30天退款保證', '尺度驚奇', '樣式超多', '支援客製', '免費運送'), $count = 3);
        $str_chars = implode(';', $chars);
        $pics = $this->faker->randomElements(array('elements/1-1.jpg', 'elements/1.jpg', 'elements/914302_1.jpg', 'elements/914302_2.jpg', 'elements/914302_3.jpg', 'elements/914302_4.jpg', 'elements/914302.jpg'), $count = 3);
        $str_pics = json_encode($pics, true);
        return [
            'title' => $this->faker->word,
            'price_og' => $price_og,
            'price_new' => $price_new,
            'star' => rand(1, 10),
            'enabled' => $this->faker->randomElement(array(true, false)),
            'sort' => $this->faker->unique()->numberBetween($min = 0, $max = 200),
            'desc' => $this->faker->sentence,
            'stock' => rand(0, 100),
            'sku' => $this->faker->swiftBicNumber,
            'cgy_id' => rand(1, 3),
            'chars' => $str_chars,
            'badge' => $this->faker->word,
            'pics' => $str_pics,

        ];
    }
}