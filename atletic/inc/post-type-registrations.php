<?php

add_action( 'init', 'home_seting_top' );

function home_seting_top() {

	register_post_type( 'teams', array(
		'public'   => true,
		'supports' => array(
			'title',
			'thumbnail',
			'editor',
			'excerpt'
		),
		'labels'   => array(
			'name'      => __( 'Team' ),
			'home',
			'add_new'   => 'Додати ще',
			'all_items' => 'Дивитися всe'
		)
	) );
    register_post_type( 'advantages', array(
        'public'   => true,
        'supports' => array(
            'title',
            'thumbnail',

        ),
        'labels'   => array(
            'name'      => __( 'Advantages' ),
            'home',
            'add_new'   => 'Додати ще',
            'all_items' => 'Дивитися всe'
        )
    ) );

}
