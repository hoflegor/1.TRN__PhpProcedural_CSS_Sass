<?php
$products = [
    [
        'name'  => 'Mydło',
        'vat'   => 7,
        'value' => 19.99,
    ],
    [
        'name'  => 'Obiad',
        'vat'   => 5,
        'value' => 32.45,
    ],
    [
        'name'  => 'Sok Pomarańczowy',
        'vat'   => 7,
        'value' => 4.99,
    ],
    [
        'name'  => 'Paliwo',
        'vat'   => 23,
        'value' => 165.41,
    ],
];

function vatList($products)
{

    $vatVal = [];

    foreach ($products as $product) {

        if (!isset($vatVal[$product['vat']])) {
            $vatVal[$product['vat']] = $product['value'];
        } else {
            $vatVal[$product['vat']] += $product['value'];

        }
    }
    return $vatVal;
}
echo "<pre>";
print_r(vatList($products));
echo "<pre>";