<?php

add_action( 'customize_register', 'my__sites_customizer' );

function my__sites_customizer( $wp_customize ) {
	$wp_customize->add_section( 'my_super_subscription_seting', array(
		'title'    => __( 'Social Link', 'atletic' ),
		'priority' => 1,
	) );
//-----icon and text facebook
	//-----------тайт1
	$wp_customize->add_setting( 'icon_facebook_subscription', array(
		'default'   => '',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon_facebook_subscription', array(
		'label'    => __( 'icon Facebook', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'icon_facebook_subscription',
	) ) );
//-----------тайт1
	$wp_customize->add_setting( 'facebook_subscription', array(
		'default'   => 'http://',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_subscription', array(
		'label'    => __( 'Facebook', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'facebook_subscription',
	) ) );

//-----icon and text twiter

	//-----------тайт2
	$wp_customize->add_setting( 'icon_twiter_subscription', array(
		'default'   => '',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon_twiter_subscription', array(
		'label'    => __( 'icon Twiter', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'icon_twiter_subscription',
	) ) );

	//-----------тайт2
	$wp_customize->add_setting( 'twiter_subscription', array(
		'default'   => 'http://',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twiter_subscription', array(
		'label'    => __( 'Twiter', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'twiter_subscription',
	) ) );


//------------- icon and text Email
	//-----------тайт3 icon
	$wp_customize->add_setting( 'icon_email_subscription', array(
		'default'   => '',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon_email_subscription', array(
		'label'    => __( 'Email', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'icon_email_subscription',
	) ) );
	//-----------тайт3 text
	$wp_customize->add_setting( 'email_subscription', array(
		'default'   => 'mailto:example@email.com',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_subscription', array(
		'label'    => __( 'Email', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'email_subscription',
	) ) );


//--------------icon and link whatsap
	//-----------тайт4 icon
	$wp_customize->add_setting( 'icon_whatsap_subscription', array(
		'default'   => '',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon_Whatsap_subscription', array(
		'label'    => __( 'icon Whatsap', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'icon_whatsap_subscription',
	) ) );
	//-----------тайт4 text
	$wp_customize->add_setting( 'whatsap_subscription', array(
		'default'   => 'https://api.whatsapp.com/send?phone=3800000000000',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол baner
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'Whatsap_subscription', array(
		'label'    => __( 'Whatsap', 'atletic' ),
		'section'  => 'my_super_subscription_seting',
		'settings' => 'whatsap_subscription',
	) ) );

	//---------------Бонус--------
	$wp_customize->add_section( 'bonus_subscription_seting', array(
		'title'    => __( 'Ціль', 'atletic' ),
		'priority' => 1,
	) );
	//-----------перша
	$wp_customize->add_setting( 'one_subscription', array(
		'default'   => 'ЗДОРОВI ДIТИ',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'one_subscription', array(
		'label'    => __( 'Перша', 'atletic' ),
		'section'  => 'bonus_subscription_seting',
		'settings' => 'one_subscription',
	) ) );
	//-----------друга
	$wp_customize->add_setting( 'two_subscription', array(
		'default'   => 'ВПЕВНЕНIСТЬ У МАЙБУТНЬОМУ',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'two_subscription', array(
		'label'    => __( 'Друга', 'atletic' ),
		'section'  => 'bonus_subscription_seting',
		'settings' => 'two_subscription',
	) ) );
	//-----------третя
	$wp_customize->add_setting( 'thre_subscription', array(
		'default'   => 'ПРОФЕСIЙНI ТРЕНЕРИ',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'thre_subscription', array(
		'label'    => __( 'Третя', 'atletic' ),
		'section'  => 'bonus_subscription_seting',
		'settings' => 'thre_subscription',
	) ) );
	//-----------четверта
	$wp_customize->add_setting( 'four_subscription', array(
		'default'   => 'НОВI ДРУЗI',
		'transport' => 'refresh',
	) );


	//----------тайтл контрол
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'four_subscription', array(
		'label'    => __( 'Четверта', 'atletic' ),
		'section'  => 'bonus_subscription_seting',
		'settings' => 'four_subscription',
	) ) );




	//------------------teams title---
	$wp_customize->add_section( 'team_subscription_seting', array(
		'title'    => __( 'Team', 'atletic' ),
		'priority' => 1,
	) );

	//-----------1 set
	$wp_customize->add_setting( 'title_team_subscription', array(
		'default'   => 'НАША КОМАНДА',
		'transport' => 'refresh',
	) );


	//----------1 kntrol
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title_team_subscription', array(
		'label'    => __( 'Title', 'atletic' ),
		'section'  => 'team_subscription_seting',
		'settings' => 'title_team_subscription',
	) ) );
//-----------2 set
	$wp_customize->add_setting( 'text_team_subscription', array(
		'default'   => 'ПРОФЕСІЙНІ ТА ДОСВІДЧЕНІ ТРЕНЕРИ',
		'transport' => 'refresh',
	) );


	//----------2kontrol
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_team_subscription', array(
		'label'    => __( 'О тренерах', 'atletic' ),
		'section'  => 'team_subscription_seting',
		'settings' => 'text_team_subscription',
	) ) );


//------------------Adressa---
	$wp_customize->add_section( 'Adressa_subscription_seting', array(
		'title'    => __( 'Adressa', 'atletic' ),
		'priority' => 1,
	) );

	//-----------1 set
	$wp_customize->add_setting( 'maps_subscription', array(
		'default'   => 'М. Черкаси, вул. Хрещатик.360',
		'transport' => 'refresh',
	) );


	//----------1 kntrol
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'maps_subscription', array(
		'label'    => __( 'Место положение', 'atletic' ),
		'section'  => 'Adressa_subscription_seting',
		'settings' => 'maps_subscription',
	) ) );

	//-----------2set
	$wp_customize->add_setting( 'tel_subscription', array(
		'default'   => '0936574139',
		'transport' => 'refresh',
	) );


	//---------2 kntrol
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_subscription', array(
		'label'    => __( 'Место положение', 'atletic' ),
		'section'  => 'Adressa_subscription_seting',
		'settings' => 'tel_subscription',
	) ) );
}

?>
