<?php
	register_nav_menu("menu-principal", "Mon menu principal");
	register_nav_menu("menu-footer", "Le menu du footer");
	add_theme_support( 'post-thumbnails' );

	function page_content() {
		$GLOBALS['wp_query'] = new WP_Query( ['pagename' => $_POST['page']] );
		$ajax = true;
		$content['name'] = $_POST['page'];
		include(locate_template('page.php'));
		die();
	}
	add_action( 'wp_ajax_page_content', 'page_content' );
	add_action( 'wp_ajax_nopriv_page_content', 'page_content' );



	add_filter("login_redirect", "gkp_subscriber_login_redirect", 10, 3);
	function gkp_subscriber_login_redirect($redirect_to, $request, $user) {

	  // if(is_array($user->roles))
	  //     if(in_array('administrator', $user->roles)) return site_url('/wp-admin/');

	  return home_url();
	}


	// Fonction qui insere le lien vers le css qui surchargera celui d'origine
	function custom_login_css()  {
	    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/style-login.css" />';
	}
	add_action('login_head', 'custom_login_css');



	/*---------------------------------------------------
	register settings
	----------------------------------------------------*/
	// function theme_settings_init(){
	// register_setting( 'theme_settings', 'theme_settings' );
	// }

	/*---------------------------------------------------
	add settings page to menu
	----------------------------------------------------*/
	// function add_settings_page() {
	// add_menu_page( __( 'Your theme name' .' Theme Panel' ), __( 'Gite Acker' .' Theme Panel' ), 'manage_options', 'settings', 'theme_settings_page');
	// }

	/*---------------------------------------------------
	Theme Panel Output
	----------------------------------------------------*/
	// function theme_settings_page() {

	// }

	/* ----------------------------------------------------------
	Declare vars
	------------------------------------------------------------- */
	$themename = "Gites ACKER";
	$shortname = "giteacker";

	$categories = get_categories('hide_empty=0&orderby=name');
	$all_cats = array();
	foreach ($categories as $category_item ) {
		$all_cats[$category_item->cat_ID] = $category_item->cat_name;
	}
	array_unshift($all_cats, "Select a category");

	/*---------------------------------------------------
	register settings
	----------------------------------------------------*/
	function theme_settings_init(){
	register_setting( 'theme_settings', 'theme_settings' );
	wp_enqueue_style("panel_style", get_template_directory_uri()."/panel.css", false, "1.0", "all");
	wp_enqueue_script("panel_script", get_template_directory_uri()."/panel_script.js", false, "1.0");
	}

	/*---------------------------------------------------
	add settings page to menu
	----------------------------------------------------*/
	function add_settings_page() {
	add_menu_page( __( 'Gites ACKER' .'' ), __( 'Gites ACKER' .'' ), 'edit_posts', 'settings', 'theme_settings_page');
	}

	/*---------------------------------------------------
	add actions
	----------------------------------------------------*/
	add_action( 'admin_init', 'theme_settings_init' );
	add_action( 'admin_menu', 'add_settings_page' );

	/* ---------------------------------------------------------
	Declare options
	----------------------------------------------------------- */

	$theme_options = array (

		array( 	"name" => $themename." Options",
				"type" => "title"),

		/* ---------------------------------------------------------
		General section
		----------------------------------------------------------- */
		// array( 	"name" => "General",
		// 		"type" => "section"
		// ),
		// array( 	"type" => "open"
		// ),

		// array( 	"name" => "Logo URL",
		// 		"desc" => "Enter le lien vers l'image du logo",
		// 		"id" => $shortname."_logo",
		// 		"type" => "text",
		// 		"std" => ""
		// ),
		// array( 	"name" => "Custom Favicon",
		// 		"desc" => "Une favicone a 16x16 pixel qui représente le site; colle une URL vers une image .ico que vous voulez utiliser.",
		// 		"id" => $shortname."_favicon",
		// 		"type" => "text",
		// 		"std" => get_bloginfo('url') ."/img/favicon.ico"
		// ),

		// array( 	"type" => "close"
		// ),

		/* ---------------------------------------------------------
		Home section
		----------------------------------------------------------- */
		// array( 	"name" => "Homepage",
		// 		"type" => "section"),
		// array( 	"type" => "open"),

		// array( 	"name" => "Homepage Featured",
		// 		"desc" => "Choose a category from which featured posts are drawn",
		// 		"id" => $shortname."_feat_cat",
		// 		"type" => "select",
		// 		"options" => $all_cats,
		// 		"std" => "Select a category"),

		// array( "type" => "close"),

		/* ---------------------------------------------------------
		Footer section
		----------------------------------------------------------- */
		// array( 	"name" => "Footer",
		// 		"type" => "section"),
		// array( 	"type" => "open"),

		// array( 	"name" => "Footer Credit",
		// 		"desc" => "You can customize footer credit on footer area her.",
		// 		"id" => $shortname."_footer_text",
		// 		"type" => "text",
		// 		"std" => ""),

		// array( 	"type" => "close")

		/* ---------------------------------------------------------
		Menu section
		----------------------------------------------------------- */
		array( 	"name" => "Menu",
				"type" => "section"
		),
		array( 	"type" => "open"
		),
		array( 	"name" => "Item 1",
				"desc" => "vous pouvez personaler le titres 1 du menu.",
				"id" => $shortname."_menu_item1",
				"type" => "text",
				"std" => "Accueil"
		),
		array( 	"name" => "Item 2",
				"desc" => "vous pouvez personaler le titres 2 du menu.",
				"id" => $shortname."_menu_item2",
				"type" => "text",
				"std" => "Les Gîtes"
		),
		array( 	"name" => "Item 3",
				"desc" => "vous pouvez personaler le titres 3 du menu.",
				"id" => $shortname."_menu_item3",
				"type" => "text",
				"std" => "Contact"
		),
		array( 	"type" => "close"
		),
		/* ---------------------------------------------------------
		Description section
		----------------------------------------------------------- */
		array( 	"name" => "Description",
				"type" => "section"
		),
		array( 	"type" => "open"
		),
		array( 	"name" => "Titre",
				// "desc" => "You can customize contact credit on contact area her.",
				"id" => $shortname."_description_title",
				"type" => "text",
				"std" => "Description"
		),
		array( 	"name" => "Contenu",
				// "desc" => "You can customize contact credit on contact area her.",
				"id" => $shortname."_description_content",
				"type" => "textarea",
				"std" => "Gîte aménagé à l'étage de la maison du propriétaire située en périphérie de village. 1 ch (3 lits 1p), séjour avec accès direct sur balcon couvert (1 lit 2p, prise TV), petite cuisine (micro-ondes), salle de bain avec wc. Chauffage central inclus. Location de draps. Présence du G714 sur la propriété. En commun : Lave-linge au sous-sol, jardin, mobilier de jardin, bac à sable, barbecue, ping-pong, parking dans cour. Supplément animaux: 5€/jour/animal."
		),
		array( 	"type" => "close"
		),

		/* ---------------------------------------------------------
		Contact section
		----------------------------------------------------------- */
		array( 	"name" => "Contact",
				"type" => "section"
		),
		array( 	"type" => "open"
		),
		array( 	"name" => "Titre",
				// "desc" => "You can customize contact credit on contact area her.",
				"id" => $shortname."_contact_title",
				"type" => "text",
				"std" => "Contact"
		),
		array( 	"name" => "Nom et prenom",
				// "desc" => "You can customize contact credit on contact area her.",
				"id" => $shortname."_contact_name",
				"type" => "text",
				"std" => "Antoine ACKER"
		),
		array( 	"name" => "Tel fixe",
				// "desc" => "You can customize contact credit on contact area her.",
				"id" => $shortname."_contact_phone_fixe",
				"type" => "text",
				"std" => "03 88 80 06 19"
		),
		array( 	"name" => "Tel portable",
				// "desc" => "You can customize contact credit on contact area her.",
				"id" => $shortname."_contact_phone_cell",
				"type" => "text",
				"std" => "06 41 77 04 31"
		),
		array( 	"type" => "close"
		)
	);

	/*---------------------------------------------------
	Theme Panel Output
	----------------------------------------------------*/
	function theme_settings_page() {
		global $themename,$theme_options;
		$i=0;
		$message=''; 
		if ( 'save' == $_REQUEST['action'] ) {
		 
			foreach ($theme_options as $value) {
				update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
		 
			foreach ($theme_options as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
			$message='saved';
		}
		else if( 'reset' == $_REQUEST['action'] ) {
			 
			foreach ($theme_options as $value) {
				delete_option( $value['id'] ); }
			$message='reset'; 		 
		}
	 
		?> <div class="wrap options_wrap"><div id="icon-options-general"></div><h2><?php _e( ' Theme Options' ) //your admin panel title ?></h2> <?php
			if ( $message=='saved' ) echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
			<p>'.$themename.' configuration sauveguardé.</strong></p></div>';
			if ( $message=='reset' ) echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
			<p>'.$themename.' settings reset.</strong></p></div>';
			?> <ul><li>Theme version 1.0</li></ul><div class="content_options"><form method="post"><input type="hidden" name="action" value="save"> <?php foreach ($theme_options as $value) {
			 
						// echo ($value['type']);

					switch ( $value['type'] ) {
						case "open": ?> <div class="all_options"> <?php break;



						case "close": ?> </div><br> <?php break;



						case "title": ?> <div class="message"><p>© Copyright 2016 Thomas BATT & Faress Hank.</p></div> <?php break;



						case 'text': ?> <div class="option_input option_text"><label for="<?php echo $value['id']; ?>"> <?php echo $value['name']; ?> </label><input id="" type="<?php echo $value['type']; ?>" name="<?php echo $value['id']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>"> <small><?php echo $value['desc']; ?></small><div class="clearfix"></div></div> <?php break;



						case 'textarea': ?> <div class="option_input option_textarea"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><textarea name="<?php echo $value['id']; ?>" rows="" cols=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea><small><?php echo $value['desc']; ?></small><div class="clearfix"></div></div> <?php break;



						case 'select': ?> <div class="option_input option_select"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"> <?php foreach ($value['options'] as $option) { ?> <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option> <?php } ?> </select><small><?php echo $value['desc']; ?></small><div class="clearfix"></div></div> <?php break;




						case "checkbox": ?> <div class="option_input option_checkbox"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label> <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?> <input id="<?php echo $value['id']; ?>" type="checkbox" name="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> > <small><?php echo $value['desc']; ?></small><div class="clearfix"></div></div> <?php break;




						case "section": 
						$i++; ?> <div class="input_title"><h3><img src="<?php echo get_template_directory_uri();?>/images/options.png" alt="">&nbsp;<?php echo $value['name']; ?> </h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" class="button-primary" value="Sauvegarder"></span><div class="clearfix"></div></div> <?php break;
					}
				}?> </form><form method="post"><p class="submit"><input name="reset" type="submit" value="Restaurer"> <input type="hidden" name="action" value="reset"></p></form></div><div class="footer-credit"><p>Ce theme est realisé par <a title="Thomas BATT" href="http://thomasbatt.fr" target="_blank">Thomas BATT & Faress Hank</a>.</p></div></div> <?php
		// echo 'taagle'.get_option();
	}

?>