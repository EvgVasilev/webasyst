<?php

return array(
    'name' => 'Watches',
    'icon' => 'ss pt clock',
    'features' => array(
        'mechanism' => array(
            'name' => 'Mechanism',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'values' => array(
                'quartz',
                'mechanical'
            ),
        ),
        'time_display' => array(
            'name' => 'Time display',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'multiple' => true,
            'values' => array(
                'analog',
                'digital',
                'Twelv',
            ),
        ),
        'power_source' => array(
            'name' => 'Power source',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'multiple' => true,
            'values' => array(
                'Kinetic',
                'battery',
                'solar battery',
                'body heat',
                'spring mechanism',
            ),
        ),
        'sex' => array(
            'name' => 'Sex',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'values' => array(
                'men',
                'women',
                'unisex',
            ),
        ),
        'body_material' => array(
            'name' => 'Watch body material',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'multiple' => true,
            'values' => array(
                'aluminium',
                'wolfram alloy',
                'gold',
                'brass',
                'copper',
                'stainless steel',
                'plastic',
                'palladium',
                'platinum',
                'silver',
                'titanium',
                'zinc-aluminum alloy',
                'carbon',
                'ceramics',
            ),
        ),
        'belt material' => array(
            'name' => 'Belt material',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'multiple' => true,
            'values' => array(
                'pearl',
                'gold',
                'rubber',
                'ceramics',
                'leather',
                'stainless steel',
                'plastic',
                'silicone',
                'textile',
                'titanium',
            ),
        ),
        'extra_features' => array(
            'name' => 'Extra features',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'multiple' => true,
            'values' => array(
                'skeleton body',
                'shock-proof',
                'water-resistant',
                'chronometer',
                'self-winding',
                'alarm-clock',
                'date display',
                'weekday display',
                'moon phase display',
                'built-in memory',
                'notepad',
                'pulsometer',
                'perpetual calendar',
                'compass',
                'thermometer',
            ),
        ),
        'water_resistance' => array(
            'name' => 'Water resistance class',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable',
            'values' => array(
                'WR',
                'WR100',
                'WR1000',
                'WR150',
                'WR20',
                'WR200',
                'WR30',
                'WR300',
                'WR3000',
                'WR330',
                'WR50',
                'WR500',
                'WR60',
                'WR600',
            ),
        ),
        'gemstones' => array(
            'name' => 'Gemstones',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'multiple' => true,
            'values' => array(
                'agate',
                'amethyst',
                'turquoise',
                'diamond',
                'garnet',
                'pearl',
                'Swarovski crystals',
                'onyx',
                'ruby',
                'sapphire',
                'topaz',
                'fianit',
                'crystal',
                'zircon',
            ),
        ),
        'time_format' => array(
            'name' => 'Time format',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'selectable' => true,
            'values' => array(
                '12 hours',
                '24 hours',
                '12/24 hours',
            ),
        ),
        'weight' => array(
            'name' => 'Weight',
            'type' => shopFeatureModel::TYPE_DIMENSION.'.weight',
            'available_for_sku' => 1,
            'builtin' => 1
        ),
        'gtin' => array(
            'name' => 'GTIN',
            'type' => shopFeatureModel::TYPE_VARCHAR,
            'status' => shopFeatureModel::STATUS_PRIVATE,
            'available_for_sku' => 1,
            'builtin' => 1
        ),
    ),
);