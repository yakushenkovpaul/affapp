<?php
/*
|--------------------------------------------------------------------------
| Merchant Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Merchant::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
		'name' => 'suscipit',
		'image' => '1',
		'description' => 'laboriosam accusamus odit rerum',
		'seo_title' => 'possimus',
		'seo_description' => 'animi',
		'url' => 'doloremque',
		'status' => '1',
		'commission' => '1.1',
		'cashback' => '1.1',
		'rate' => '1',
		'added' => '1',
    ];
});

/*
|--------------------------------------------------------------------------
| Club Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Club::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
		'name' => 'ipsam',
		'image' => 'est',
		'url' => 'unde',
		'country' => 'nostrum',
		'address' => 'aperiam',
		'zip' => 'eum',
		'contacts' => 'quis',
		'bank_details' => 'ad',
		'fans' => '1',
		'total_commission' => '1.1',
		'total_paid' => '1.1',
		'rate' => '1',
		'fee' => '1.1',
    ];
});

/*
|--------------------------------------------------------------------------
| Sale Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Sale::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
		'status' => '1',
		'value' => '1.1',
		'comission' => '1.1',
		'merchant_id' => '1',
		'user_id' => '1',
		'club_id' => '1',
		'service_fee' => '1.1',
		'commission' => '1.1',
		'updated_at' => 'dolorum',
		'created_at' => 'atque',
    ];
});
