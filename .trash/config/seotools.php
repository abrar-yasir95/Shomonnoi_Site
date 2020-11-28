<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "ShomonnoiBD", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'The world has not seen such an alarming situation due to the Corona outbreak after World War II. Nearly all the countries have been affected by this devastating virus and Bangladesh is also no exception.
                            It\'s high time we stand together to fight against this invisible enemy. ShomonnoiBD is an initiative to accumulate donors, volunteers, NGOs, private and government stakeholders.
                            We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak.
                            We hope to provide them with the best possible help through our information system.
                            Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'ShomonnoiBD', // set false to total remove
            'description' => 'The world has not seen such an alarming situation due to the Corona outbreak after World War II. Nearly all the countries have been affected by this devastating virus and Bangladesh is also no exception.
                            It\'s high time we stand together to fight against this invisible enemy. ShomonnoiBD is an initiative to accumulate donors, volunteers, NGOs, private and government stakeholders.
                            We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak.
                            We hope to provide them with the best possible help through our information system.
                            Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com.', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'ShomonnoiBD', // set false to total remove
            'description' => 'The world has not seen such an alarming situation due to the Corona outbreak after World War II. Nearly all the countries have been affected by this devastating virus and Bangladesh is also no exception.
                            It\'s high time we stand together to fight against this invisible enemy. ShomonnoiBD is an initiative to accumulate donors, volunteers, NGOs, private and government stakeholders.
                            We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak.
                            We hope to provide them with the best possible help through our information system.
                            Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com.', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
