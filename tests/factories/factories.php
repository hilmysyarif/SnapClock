<?php

$factory('SnapClock\Departement', function($faker) {
    $organization = 1;

    return [
        'organization_id' => $organization,
        'name' => $faker->name
    ];
});