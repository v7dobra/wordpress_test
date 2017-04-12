<?php
	/**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    
    $google_webfonts = array( 
         'league_gothic'=>"League Gothic",
         'infinity'=>"infinity",
         'nexa_boldregular'=>"Nexa Bold",
         'nexa_lightregular'=>"Nexa Light",
         'Abel' => "Abel",
         'Abril+Fatface' => "Abril Fatface",
         'Aclonica' => "Aclonica",
         'Actor' => "Actor",
         'Adamina' => "Adamina",
         'Aguafina+Script' => "Aguafina Script",
         'Aladin' => "Aladin",
         'Aldrich' => "Aldrich",
         'Alegreya+Sans+SC' => "Alegreya Sans SC",
         'Alice' => "Alice",
         'Alike+Angular' => "Alike Angular",
         'Alike' => "Alike",
         'Allan' => "Allan",
         'Allerta+Stencil' => "Allerta Stencil",
         'Allerta' => "Allerta",
         'Armata' => "Armata",
         'Amaranth' => "Amaranth",
         'Amatic+SC' => "Amatic SC",
         'Andada' => "Andada",
         'Andika' => "Andika",
         'Annie+Use+Your+Telescope' => "Annie Use Your Telescope",
         'Anonymous+Pro' => "Anonymous Pro",
         'Antic' => "Antic",
         'Anton' => "Anton",
         'Arapey' => "Arapey",
         'Architects+Daughter' => "Architects Daughter",
         'Arimo' => "Arimo",
         'Artifika' => "Artifika",
         'Arvo' => "Arvo",
         'Asset' => "Asset",
         'Astloch' => "Astloch",
         'Atomic+Age' => "Atomic Age",
         'Aubrey' => "Aubrey",
         'Bangers' => "Bangers",
         'Bentham' => "Bentham",
         'Bevan' => "Bevan",
         'Bigshot+One' => "Bigshot One",
         'Bitter' => "Bitter",
         'Black+Ops+One' => "Black Ops One",
         'Bowlby+One+SC' => "Bowlby One SC",
         'Bowlby+One' => "Bowlby One",
         'Brawler' => "Brawler",
         'Bubblegum+Sans' => "Bubblegum Sans",
         'Buda' => "Buda",
         'Butcherman+Caps' => "Butcherman Caps",
         'Cabin+Condensed' => "Cabin Condensed",
         'Cabin+Sketch' => "Cabin Sketch",
         'Cabin' => "Cabin",
         'Cagliostro' => "Cagliostro",
         'Calligraffitti' => "Calligraffitti",
         'Candal' => "Candal",
         'Cantarell' => "Cantarell",
         'Cardo' => "Cardo",
         'Carme' => "Carme",
         'Carter+One' => "Carter One",
         'Caudex' => "Caudex",
         'Cedarville+Cursive' => "Cedarville Cursive",
         'Changa+One' => "Changa One",
         'Cherry+Cream+Soda' => "Cherry Cream Soda",
         'Chewy' => "Chewy",
         'Chicle' => "Chicle",
         'Chivo' => "Chivo",
         'Coda+Caption' => "Coda Caption",
         'Coda' => "Coda",
         'Comfortaa' => "Comfortaa",
         'Coming+Soon' => "Coming Soon",
         'Contrail+One' => "Contrail One",
         'Convergence' => "Convergence",
         'Cookie' => "Cookie",
         'Copse' => "Copse",
         'Corben' => "Corben",
         'Cousine' => "Cousine",
         'Coustard' => "Coustard",
         'Covered+By+Your+Grace' => "Covered By Your Grace",
         'Crafty+Girls' => "Crafty Girls",
         'Creepster+Caps' => "Creepster Caps",
         'Crimson+Text' => "Crimson Text",
         'Crushed' => "Crushed",
         'Cuprum' => "Cuprum",
         'Damion' => "Damion",
         'Dancing+Script' => "Dancing Script",
         'Dawning+of+a+New+Day' => "Dawning of a New Day",
         'Days+One' => "Days One",
         'Delius+Swash+Caps' => "Delius Swash Caps",
         'Delius+Unicase' => "Delius Unicase",
         'Delius' => "Delius",
         'Devonshire' => "Devonshire",
         'Didact+Gothic' => "Didact Gothic",
         'Dorsa' => "Dorsa",
         'Dr+Sugiyama' => "Dr Sugiyama",
         'Droid+Sans+Mono' => "Droid Sans Mono",
         'Droid+Sans' => "Droid Sans",
         'Droid+Serif' => "Droid Serif",
         'EB+Garamond' => "EB Garamond",
         'Eater+Caps' => "Eater Caps",
         'Expletus+Sans' => "Expletus Sans",
         'Elsie+Swash+Caps' => "Elsie Swash Caps",
         'Fanwood+Text' => "Fanwood Text",
         'Federant' => "Federant",
         'Federo' => "Federo",
         'Fjord+One' => "Fjord One",
         'Fondamento' => "Fondamento",
         'Fontdiner+Swanky' => "Fontdiner Swanky",
         'Forum' => "Forum",
         'Francois+One' => "Francois One",
         'Gentium+Basic' => "Gentium Basic",
         'Gentium+Book+Basic' => "Gentium Book Basic",
         'Geo' => "Geo",
         'Geostar+Fill' => "Geostar Fill",
         'Geostar' => "Geostar",
         'Give+You+Glory' => "Give You Glory",
         'Gloria+Hallelujah' => "Gloria Hallelujah",
         'Goblin+One' => "Goblin One",
         'Gochi+Hand' => "Gochi Hand",
         'Goudy+Bookletter+1911' => "Goudy Bookletter 1911",
         'Gravitas+One' => "Gravitas One",
         'Gruppo' => "Gruppo",
         'Hammersmith+One' => "Hammersmith One",
         'Herr+Von+Muellerhoff' => "Herr Von Muellerhoff",
         'Holtwood+One+SC' => "Holtwood One SC",
         'Homemade+Apple' => "Homemade Apple",
         'IM+Fell+DW+Pica+SC' => "IM Fell DW Pica SC",
         'IM+Fell+DW+Pica' => "IM Fell DW Pica",
         'IM+Fell+Double+Pica+SC' => "IM Fell Double Pica SC",
         'IM+Fell+Double+Pica' => "IM Fell Double Pica",
         'IM+Fell+English+SC' => "IM Fell English SC",
         'IM+Fell+English' => "IM Fell English",
         'IM+Fell+French+Canon+SC' => "IM Fell French Canon SC",
         'IM+Fell+French+Canon' => "IM Fell French Canon",
         'IM+Fell+Great+Primer+SC' => "IM Fell Great Primer SC",
         'IM+Fell+Great+Primer' => "IM Fell Great Primer",
         'Iceland' => "Iceland",
         'Inconsolata' => "Inconsolata",
         'Indie+Flower' => "Indie Flower",
         'Irish+Grover' => "Irish Grover",
         'Istok+Web' => "Istok Web",
         'Jockey+One' => "Jockey One",
         'Josefin+Sans' => "Josefin Sans",
         'Josefin+Slab' => "Josefin Slab",
         'Judson' => "Judson",
         'Julee' => "Julee",
         'Julius+Sans+One'=>'Julius Sans One',
         'Jura' => "Jura",
         'Just+Another+Hand' => "Just Another Hand",
         'Just+Me+Again+Down+Here' => "Just Me Again Down Here",
         'Kameron' => "Kameron",
         'Kelly+Slab' => "Kelly Slab",
         'Kenia' => "Kenia",
         'Knewave' => "Knewave",
         'Kranky' => "Kranky",
         'Kreon' => "Kreon",
         'Kristi' => "Kristi",
         'La+Belle+Aurore' => "La Belle Aurore",
         'Lancelot' => "Lancelot",
         'Lato' => "Lato",
         'League+Script' => "League Script",
         'Leckerli+One' => "Leckerli One",
         'Lekton' => "Lekton",
         'Lemon' => "Lemon",
         'Limelight' => "Limelight",
         'Linden+Hill' => "Linden Hill",
         'Lobster+Two' => "Lobster Two",
         'Lobster' => "Lobster",
         'Lora' => "Lora",
         'Londrina+Outline' => "Londrina Outline",
         'Love+Ya+Like+A+Sister' => "Love Ya Like A Sister",
         'Loved+by+the+King' => "Loved by the King",
         'Luckiest+Guy' => "Luckiest Guy",
         'Lusitana' => "Lusitana",
         'Maiden+Orange' => "Maiden Orange",
         'Mako' => "Mako",
         'Marck+Script' => "Marck Script",
         'Marvel' => "Marvel",
         'Mate+SC' => "Mate SC",
         'Mate' => "Mate",
         'Maven+Pro' => "Maven Pro",
         'Meddon' => "Meddon",
         'MedievalSharp' => "MedievalSharp",
         'Megrim' => "Megrim",
         'Merienda+One' => "Merienda One",
         'Merriweather' => "Merriweather",
         'Metrophobic' => "Metrophobic",
         'Michroma' => "Michroma",
         'Miltonian+Tattoo' => "Miltonian Tattoo",
         'Miltonian' => "Miltonian",
         'Miss+Fajardose' => "Miss Fajardose",
         'Miss+Saint+Delafield' => "Miss Saint Delafield",
         'Modern+Antiqua' => "Modern Antiqua",
         'Molengo' => "Molengo",
         'Monofett' => "Monofett",
         'Monoton' => "Monoton",
         'Monsieur+La+Doulaise' => "Monsieur La Doulaise",
         'Montserrat' >"Montserrat",
         'Montez' => "Montez",
         'Mountains+of+Christmas' => "Mountains of Christmas",
         'Mr+Bedford' => "Mr Bedford",
         'Mr+Dafoe' => "Mr Dafoe",
         'Mr+De+Haviland' => "Mr De Haviland",
         'Mrs+Sheppards' => "Mrs Sheppards",
         'Muli' => "Muli",
         'Museo' => "Museo",
         'Museo+Sans' => "Museo Sans",
         'Museo+Slab' => "Museo Slab",
         'Neucha' => "Neucha",
         'Neuton' => "Neuton",
         'News+Cycle' => "News Cycle",
         'Niconne' => "Niconne",
         'Nixie+One' => "Nixie One",
         'Nobile' => "Nobile",
         'Nosifer+Caps' => "Nosifer Caps",
         'Nothing+You+Could+Do' => "Nothing You Could Do",
         'Nova+Cut' => "Nova Cut",
         'Nova+Flat' => "Nova Flat",
         'Nova+Mono' => "Nova Mono",
         'Nova+Oval' => "Nova Oval",
         'Nova+Round' => "Nova Round",
         'Nova+Script' => "Nova Script",
         'Nova+Slim' => "Nova Slim",
         'Nova+Square' => "Nova Square",
         'Numans' => "Numans",
         'Nunito' => "Nunito",
         'Old+Standard+TT' => "Old Standard TT",
         'Open+Sans+Condensed' => "Open Sans Condensed",
         'Open+Sans' => "Open Sans",
         'Orbitron' => "Orbitron",
         'Oswald' => "Oswald",
         'Over+the+Rainbow' => "Over the Rainbow",
         'Ovo' => "Ovo",
         'PT+Sans+Caption' => "PT Sans Caption",
         'PT+Sans+Narrow' => "PT Sans Narrow",
         'PT+Sans' => "PT Sans",
         'PT+Serif+Caption' => "PT Serif Caption",
         'PT+Serif' => "PT Serif",
         'Pacifico' => "Pacifico",
         'Passero+One' => "Passero One",
         'Patrick+Hand' => "Patrick Hand",
         'Paytone+One' => "Paytone One",
         'Permanent+Marker' => "Permanent Marker",
         'Petrona' => "Petrona",
         'Philosopher' => "Philosopher",
         'Piedra' => "Piedra",
         'Pinyon+Script' => "Pinyon Script",
         'Play' => "Play",
         'Playfair+Display' => "Playfair Display",
         'Podkova' => "Podkova",
         'Poller+One' => "Poller One",
         'Poly' => "Poly",
         'Pompiere' => "Pompiere",
         'Prata' => "Prata",
         'Prociono' => "Prociono",
         'Puritan' => "Puritan",
         'Quattrocento+Sans' => "Quattrocento Sans",
         'Quattrocento' => "Quattrocento",
         'Questrial' => "Questrial",
         'Quicksand' => "Quicksand",
         'Radley' => "Radley",
         'Raleway' => "Raleway",
         'Rammetto+One' => "Rammetto One",
         'Rancho' => "Rancho",
         'Rationale' => "Rationale",
         'Redressed' => "Redressed",
         'Reenie+Beanie' => "Reenie Beanie",
         'Ribeye+Marrow' => "Ribeye Marrow",
         'Ribeye' => "Ribeye",
         'Righteous' => "Righteous",
         'Rochester' => "Rochester",
         'Rock+Salt' => "Rock Salt",
         'Rokkitt' => "Rokkitt",
         'Rosario' => "Rosario",
         'Ruslan+Display' => "Ruslan Display",
         'Salsa' => "Salsa",
         'Sancreek' => "Sancreek",
         'Sansita+One' => "Sansita One",
         'Satisfy' => "Satisfy",
         'Schoolbell' => "Schoolbell",
         'Shadows+Into+Light' => "Shadows Into Light",
         'Shanti' => "Shanti",
         'Share' => "Share",
         'Short+Stack' => "Short Stack",
         'Sigmar+One' => "Sigmar One",
         'Signika+Negative' => "Signika Negative",
         'Signika' => "Signika",
         'Six+Caps' => "Six Caps",
         'Slackey' => "Slackey",
         'Smokum' => "Smokum",
         'Smythe' => "Smythe",
         'Sniglet' => "Sniglet",
         'Snippet' => "Snippet",
         'Sorts+Mill+Goudy' => "Sorts Mill Goudy",
         'Source+Sans+Pro' => "Source Sans Pro",
         'Special+Elite' => "Special Elite",
         'Spinnaker' => "Spinnaker",
         'Spirax' => "Spirax",
         'Stardos+Stencil' => "Stardos Stencil",
         'Sue+Ellen+Francisco' => "Sue Ellen Francisco",
         'Sunshiney' => "Sunshiney",
         'Supermercado+One' => "Supermercado One",
         'Swanky+and+Moo+Moo' => "Swanky and Moo Moo",
         'Syncopate' => "Syncopate",
         'Tangerine' => "Tangerine",
         'Tenor+Sans' => "Tenor Sans",
         'Terminal+Dosis' => "Terminal Dosis",
         'The+Girl+Next+Door' => "The Girl Next Door",
         'Tienne' => "Tienne",
         'Tinos' => "Tinos",
         'Tulpen+One' => "Tulpen One",
         'Ubuntu+Condensed' => "Ubuntu Condensed",
         'Ubuntu+Mono' => "Ubuntu Mono",
         'Ubuntu' => "Ubuntu",
         'Ultra' => "Ultra",
         'UnifrakturCook' => "UnifrakturCook",
         'UnifrakturMaguntia' => "UnifrakturMaguntia",
         'Unkempt' => "Unkempt",
         'Unlock' => "Unlock",
         'Unna' => "Unna",
         'VT323' => "VT323",
         'Varela+Round' => "Varela Round",
         'Varela' => "Varela",
         'Vast+Shadow' => "Vast Shadow",
         'Vibur' => "Vibur",
         'Vidaloka' => "Vidaloka",
         'Volkhov' => "Volkhov",
         'Vollkorn' => "Vollkorn",
         'Voltaire' => "Voltaire",
         'Waiting+for+the+Sunrise' => "Waiting for the Sunrise",
         'Wallpoet' => "Wallpoet",
         'Walter+Turncoat' => "Walter Turncoat",
         'Wire+One' => "Wire One",
         'Yanone+Kaffeesatz' => "Yanone Kaffeesatz",
         'Yellowtail' => "Yellowtail",
         'Yeseva+One' => "Yeseva One",
         'Zeyada' => "Zeyada",

    );

    // This is your option name where all the Redux data is stored.
    $opt_name = "VAN";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => $opt_name,
        'display_name' => 'SimpleKey Options',
        'display_version' => '2.22',
        'page_slug' => 'SimpleKey_options',
        'page_title' => 'SimpleKey Options',
        'update_notice' => TRUE,
        'intro_text' => '<p>You can manage the settings of site with the following options</p>’',
        'footer_text' => '<p>If you have any questions, please go to <a href="http://www.themevan.com/support" target="_blank">ThemeVan Support Forum</a>. You can also visit our <a href="http://www.themevan.com/" target="_blank">official site</a>.</p>',
        'admin_bar' => TRUE,
        'dev_mode'  => FALSE,
        'forced_dev_mode_off' => true,
        'menu_type' => 'submenu',
        'menu_title' => 'SimpleKey Options',
        'allow_sub_menu' => TRUE,
        'page_parent' => 'themes.php',
        'page_parent_post_type' => 'your_post_type',
        'page_priority' => '30',
        'customizer' => TRUE,
        'class' => 'simplekey_options',
        'hints' => array(
            'icon' => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color' => '#bfbfbf',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'dark',
                'shadow' => '1',
                'rounded' => '1',
                'style' => 'bootstrap',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'effect' => 'slide',
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'effect' => 'fade',
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ThemeVan',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/themevan',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/themevan',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://plus.google.com/+themevan',
        'title' => 'Find us on Google+',
        'icon'  => 'el el-google-plus'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */


    Redux::setSection( $opt_name, array(
        'title'  => __( 'General Setting', 'SimpleKey' ),
        'id'     => 'general',
        'desc'   => __( 'Configure and initialize the general settings for SimpleKey theme.', 'SimpleKey' ),
        'subsection' => false,
        'fields' => array(

                    
                    array(
                        'id' => 'isLoad',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Disable the preloading effect','SimpleKey'),
                        'desc' => '',
                        'default' => 1
                        ),
                    
                    array(
                        'id' => 'isParallax',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Disable Parallax Effect','SimpleKey'),
                        'desc' => __('If you don\'t want the background image of section moved when you scroll down the page, please disable the parallax effect. ','SimpleKey'),
                        'default' => 1
                        ),
                    
                    array(
                        'id' => 'isNiceScroll',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Disable Nice Scroll Plugin','SimpleKey'),
                        'desc' => __('Use the native scroll bar after you disabled','SimpleKey'),
                        'default' => 1
                        ),
                    
                    array(
                        'id' => 'isResponsive',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Disable responsive mode','SimpleKey'),
                        'desc' => __('If you disabled the responsive mode, the website will display as the desktop version on your smartphone and tablet.','SimpleKey'),
                        'default' => 1
                        ),
                    
                    array(
                        'id' => 'blogSidebar',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Enable the post sidebar','SimpleKey'),
                        'default' => 1
                        ),


                    
                    array(
                        'id' => 'portfolio_columns',
                        'type' => 'select',
                        'title' => __('The columns of the "Portfolios Archive" page template','SimpleKey'), 
                        'desc' => __('This option is effect on the "Portfolios Archives" template.','SimpleKey'),
                        'options' => array(3=>'3',4=>'4',5=>'5'),
                        'default' => '3'
                        ),
  
                    array(
                        'id' => 'hide_backtoTop',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Hide the "Back To Top" button','SimpleKey'),
                        'default' => 1
                        ),
        )
    ) );

    Redux::setSection( $opt_name, array(
	'title'  => __( 'Header', 'SimpleKey' ),
        'id'     => 'header',
        'desc'   => __( 'Manage the header elements', 'SimpleKey' ),
        'subsection' => false,
        'icon'   => 'el el-home',
        'fields' => array(
        	       
        			/*$fields = array(
					    'id'       => 'header-layout',
					    'type'     => 'image_select',
					    'title'    => __('Header Layout', 'SimpleKey'), 
					    'desc' => __('Select a preset header layout for your website.', 'SimpleKey'),
					    'options'  => array(
					        'default'      => array(
					            'alt'   => 'Default Header', 
					            'img'   => ReduxFramework::$_url.'../assets/default-header.jpg'
					        ),
					        'center-logo'      => array(
					            'alt'   => 'Centered LOGO', 
					            'img'   => ReduxFramework::$_url.'../assets/center-logo.jpg'
					        ),
					        'right-logo'      => array(
					            'alt'   => 'Right LOGO', 
					            'img'  => ReduxFramework::$_url.'../assets/right-logo.jpg'
					        ),
					        'minimal'      => array(
					            'alt'   => 'Minimal Header', 
					            'img'   => ReduxFramework::$_url.'../assets/minimal.jpg'
					        ),
					        'float'      => array(
					            'alt'   => 'Float Header', 
					            'img'   => ReduxFramework::$_url.'../assets/float-menu.jpg'
					        )
					    ),
					    'default' => 'default'
					),*/

                    array(
                        'id' => 'logo',
                        'type' => 'media',
                        'title' => __('Custom LOGO','SimpleKey'),
                        'desc' => __('Upload your own LOGO, the best size: 170X65px','SimpleKey')
                    ),
                        
                    array(
                        'id' => 'high_logo',
                        'type' => 'media',
                        'title' => __('Retina(HiDPI) LOGO','SimpleKey'),
                        'desc' => __('Upload the Double Size LOGO for the Retina Screen. For example, 340X130px','SimpleKey')
                    ),
                        
                    array(
                        'id' => 'favicon',
                        'type' => 'media',
                        'title' => __('Favicon','SimpleKey'),
                        'desc' => __('Setting your favicon which will display at the browser address bar.','SimpleKey')
                     ),
                    
                     array(
                        'id' => 'home_revslider',
                        'type' => 'text',
                        'title' => __('Revolution Slider Shortcode','SimpleKey'),
                        'desc' => __('Enter the shortcode of revolution slider, it will show up at the top of the front page.','SimpleKey'),
                        'default' => ''
                     ),
                    
                     /*array(
                        'id' => 'home_top_height',
                        'type' => 'text',
                        'title' => __('The height of the top slider','SimpleKey'),
                        'desc' => __('Don\'t forget the unit - px','SimpleKey'),
                        'desc' => __('Please enter the height value which you set for the top slider in Revolution Slider setting page.','SimpleKey'),
                        'default' => '400px'
                   ), */

                   array(
                        'id' => 'sticky_top',
                        'type' => 'editor',
                        'title' => __('Custom content of sticky top area. ','SimpleKey'),
                        'desc' => __('You can add your custom content or HTML codes in this field, it will displayed above the top menu bar.','SimpleKey'),
                        'default' => ''
                    ),
                    
                  array(
                        'id' => 'top_social',
                        'type' => 'button_set',
                        'options' => array('1' => 'Yes', '0' => 'No'),
                        'title' => __('Hide the social icons from the top bar.','SimpleKey'),
                        'desc' => __('The top social icons will be hidden from the default header.','SimpleKey'),
                        'default' => 0
                        ),               
        )
    ) );

     Redux::setSection( $opt_name, array(
    'title'  => __( 'Footer', 'SimpleKey' ),
    'id'     => 'footer',
    'desc'   => __( 'Manage the footer elements', 'SimpleKey' ),
    'subsection' => false,
    'icon'   => 'el el-screen',
    'fields' => array(
                   array(
                        'id' => 'copyright',
                        'type' => 'text',
                        'title' => __('Copyright Info','SimpleKey'),
                        'validate' => 'html',
                        'desc' => __('HTML Allowed','SimpleKey'),
                        'default' => __('Copyright 2016. All right reserved','SimpleKey')
                   ),
                    
                   array(
                        'id' => 'theme_credit',
                        'type' => 'button_set',
                        'options' => array('1' => 'Yes', '0' => 'No'),
                        'title' => __('Show Theme Credit?','SimpleKey'),
                        'desc' => __('If you choose NO,"Theme designed by ThemeVan" text will be removed from the footer.','SimpleKey'),
                        'default' => 1
                        ),

                    array(
                        'id' => 'hide_foot',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Remove the footer from each page bottom','SimpleKey'),
                        'desc' => '',
                        'default' => 1
                        ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Section', 'SimpleKey' ),
        'desc'       => __( 'Fill in your Email,telphone number,fax and other contact page setting,they will be displayed at the bottom of pages. ', 'SimpleKey' ),
        'id'         => 'contact_section',
        'icon'		 => 'el el-inbox-box',
        'fields'     => array(
        	 array(
                        'id' => 'hide_contact',
                        'type' => 'button_set',
                        'options' => array('1' => 'No', '0' => 'Yes'),
                        'title' => __('Remove the contact section from each page bottom','SimpleKey'),
                        'desc' => '',
                        'default' => 1
                        ),

            array(
                        'id' => 'enable_captcha',
                        'type' => 'button_set',
                        'options' => array('1' => 'Yes', '0' => 'No'),
                        'title' => __('Enable captcha for contact form','SimpleKey'),
                        'desc' => '',
                        'default' => 0
                        ),  
                        
                  array(
                        'id' => 'contact_custom',
                        'type' => 'editor',
                        'title' => __('Custom Section Content','SimpleKey'),
                        'desc' => __('If you add your custom content here, it will replace all the content from the whole right side of the contact section.','SimpleKey'),
                        'desc' => __('HTML Tags allowed','SimpleKey'),
                        'default' => ''
                        ),
                
                   array(
                        'id' => 'name',
                        'type' => 'text',
                        'title' => __('Your name','SimpleKey'),
                        'desc' => __('','SimpleKey'),
                        'default' => get_bloginfo('name').' Administrator'
                        ),
                
                    array(
                        'id' => 'email',
                        'type' => 'text',
                        'title' => __('E-mail','SimpleKey'),
                        'validate' => 'email',
                        'msg' => __('The email address is invalid,please check it again.','SimpleKey'),
                        'desc' => __('You will use this email to receive the customer message via the contact page','SimpleKey'),
                        'default' => get_bloginfo('admin_email')
                        ),
                    array(
                        'id' => 'phone',
                        'type' => 'text',
                        'title' => __('Telphone','SimpleKey'),
                        'default' => ''
                        ),
                    array(
                        'id' => 'skype',
                        'type' => 'text',
                        'title' => __('Skype','SimpleKey'),
                        'default' => ''
                        ),
                    array(
                        'id' => 'fax',
                        'type' => 'text',
                        'title' => __('Fax','SimpleKey'),
                        'default' => ''
                        ),
                    array(
                        'id' => 'address',
                        'type' => 'text',
                        'title' => __('Address','SimpleKey'),
                        'default' => ''
                        ),
                    array(
                        'id' => 'contact_title',
                        'type' => 'text',
                        'title' => __('Page main title','SimpleKey'),
                        'validate' => 'no_html',
                        'default' => 'Contact us'
                        ),
                    array(
                        'id' => 'contact_sub_title',
                        'type' => 'text',
                        'title' => __('Page subtitle','SimpleKey'),
                        'validate' => 'html',
                        'default' => 'Using the contact form to send us email at below'
                        ),
                    array(
                        'id' => 'contact_intro_title',
                        'type' => 'text',
                        'title' => __('Introduction title','SimpleKey'),
                        'validate' => 'html',
                        'default' => '<strong>Keep in touch</strong> with us'
                        ),
                    array(
                        'id' => 'contact_content',
                        'type' => 'editor',
                        'title' => __('Introduction Content','SimpleKey'),
                        'subtitle' => __('It will display below the introduction title.','SimpleKey'),
                        'desc' => __('HTML Tags allowed','SimpleKey'),
                        'default' => 'You can use the following information to contact us if you wanna join us or anything need to communicate.'
                        ),
                        
                    array(
                        'id' => 'subscribe_intro_title',
                        'type' => 'text',
                        'title' => __('Subscribe title','SimpleKey'),
                        'validate' => 'html',
                        'default' => 'You can <strong>subscribe to us</strong>'
                        ),
                    
                    array(
                        'id' => 'subscribe_form',
                        'type' => 'ace_editor',
                        'theme'    => 'monokai',
                        'title' => __('Subscribe form code','SimpleKey'),
                        'desc' => __('First,go to <a href="http://mailchimp.com/" target="_blank">mailchimp</a> and get the form code, then replace URL of the form action property to yours. Leave empty if you want to remove it','SimpleKey'),
                        'default' => '<form action="http://themevan.us6.list-manage2.com/subscribe/post?u=2740080adc389393d6694082d&amp;id=0eb745d701" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>'.PHP_EOL.'<input type="text" id="mce-EMAIL" name="EMAIL" class="subscribe-input" value="" placeholder="Submit your Email" required />'.PHP_EOL.'<button type="submit" name="submit" id="mc-embedded-subscribe" class="large_btn subscribe-btn">Subscribe</button>'.PHP_EOL.'</form>'
                        ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Custom Style', 'SimpleKey' ),
        'desc'       => __( 'Customize color or font for text, section and elements of the default homepage. ', 'SimpleKey' ),
        'id'         => 'custom_style',
        'icon'		 => 'el el-tint',
        'fields'     => array(
            array(
                        'id' => 'enable_custom',
                        'type' => 'button_set',
                        'options' => array('1' => 'Yes', '0' => 'No'),
                        'title' => __('Enable Custom Styles','SimpleKey'),
                        'desc' => '',
                        'default' => 0
                        ),
                
                    array(
                        'id' => 'global_link',
                        'type' => 'color',
                        'title' => __('Global Link Color', 'SimpleKey'), 
                        'desc' => __('Customize global link color', 'SimpleKey'),
                        'default' => '#f26c4f'
                        ),
                    
                    array(
                        'id' => 'global_link_hover',
                        'type' => 'color',
                        'title' => __('Global Hover Link Color', 'SimpleKey'), 
                        'desc' => __('Customize global hover link color', 'SimpleKey'),
                        'default' => '#232527'
                        ),
                    
                    array(
                        'id' => 'selection_color',
                        'type' => 'color',
                        'title' => __('Selection Color', 'SimpleKey'), 
                        'desc' => __('Customize the background color when you selected the text', 'SimpleKey'),
                        'default' => '#83b350'
                        ),
                    
                    array(
                        'id' => 'sticky_top_bg',
                        'type' => 'color',
                        'title' => __('Background Color of Extra Top Bar ', 'SimpleKey'), 
                        'desc' => __('Customize background color for the extra top bar which is above the top menu.', 'SimpleKey'),
                        'default' => '#222222'
                        ),
                
                    array(
                        'id' => 'navi_bg',
                        'type' => 'color',
                        'title' => __('Navigation Background Color', 'SimpleKey'), 
                        'desc' => __('Customize background color for the navigation menu', 'SimpleKey'),
                        'default' => '#000000'
                        ),
                    
                    array(                      
                        'id' => 'navi_link_font',
                        'title' => __('Navigation Link Font:'),
                        'type' => 'select',
                        'options' => $google_webfonts,
                        'desc' => __('Change the navigation link font,it is not act on mobile Phone device.','SimpleKey'),
                        'default' => 'nexa_boldregular'
                        ),
                    
                    array(                      
                        'id' => 'navi_link_size',
                        'title' => __('The Font Size of Navigation Link:','SimpleKey'),
                        'type' => 'text',
                        'desc' =>__('px','SimpleKey'),
                        'default' => '14'
                        ),
                    
                    array(
                        'id' => 'navi_link',
                        'type' => 'color',
                        'title' => __('Navigation Link Color', 'SimpleKey'), 
                        'desc' => __('Customize the color for the navigation link', 'SimpleKey'),
                        'default' => '#ffffff'
                        ),
                    
                    array(
                        'id' => 'navi_link_hover',
                        'type' => 'color',
                        'title' => __('Navigation link hover color', 'SimpleKey'), 
                        'desc' => __('Customize the hover color for the navigation link', 'SimpleKey'),
                        'default' => '#999999'
                        ),
                    
                    array(
                        'id' => 'navi_link_bghover',
                        'type' => 'color',
                        'title' => __('Navigation link hover background color', 'SimpleKey'), 
                        'desc' => __('Customize the hover background color for the navigation link', 'SimpleKey'),
                        'default' => '#111111'
                        ),
                    
                    array(
                        'id' => 'navi_link_active',
                        'type' => 'color',
                        'title' => __('Navigation link active color', 'SimpleKey'), 
                        'desc' => __('Customize the active color for the navigation link', 'SimpleKey'),
                        'default' => '#f26c4f'
                        ),
                    
                    array(
                        'id' => 'footer_bg_color',
                        'type' => 'color',
                        'title' => __('Footer Background Color', 'SimpleKey'), 
                        'desc' => __('Customize the footer background color', 'SimpleKey'),
                        'default' => '#1d1d1d'
                        ),

                   array(
                        'id' => 'footer_text_color',
                        'type' => 'color',
                        'title' => __('Footer Text Color', 'SimpleKey'), 
                        'desc' => __('Customize the footer text color', 'SimpleKey'),
                        'default' => ''
                        ),
                        
                    array(
                        'id' => 'footer_link',
                        'type' => 'color',
                        'title' => __('Footer Link Color', 'SimpleKey'), 
                        'desc' => __('Customize the footer link color', 'SimpleKey'),
                        'default' => '#898989'
                        ),
                    
                    array(
                        'id' => 'footer_link_hover',
                        'type' => 'color',
                        'title' => __('Footer Link Hover Color', 'SimpleKey'), 
                        'desc' => __('Customize the footer link hover color', 'SimpleKey'),
                        'default' => '#ffffff'
                        ),
                    
                    
                    array(                      
                        'id' => 'section_heading_font',
                        'title' => __('Sections Font Head Title:','SimpleKey'),
                        'type' => 'select',
                        'options' => $google_webfonts,
                        'desc' => __('Change the sections head title font,it is not act on mobile Phone device.','SimpleKey'),
                        'default' => 'nexa_boldregular'
                        ),
                    
                    array(                      
                        'id' => 'section_heading_size',
                        'title' => __('The Font Size of Sections Head Title:','SimpleKey'),
                        'type' => 'text',
                        'desc'=> __('px','SimpleKey'),
                        'default' => '48'
                        ),
                    
                    array(                      
                        'id' => 'section_subtitle_font',
                        'title' => __('Sections Sub Title Font:','SimpleKey'),
                        'type' => 'select',
                        'options' => $google_webfonts,
                        'desc' => __('Change the sections sub title font,it is not act on mobile Phone device.','SimpleKey'),
                        'default' => 'nexa_lightregular'
                        ),
                    
                   array(                       
                        'id' => 'section_subtitle_size',
                        'title' => __('The Font Size of Sections Sub Title:','SimpleKey'),
                        'type' => 'text',
                        'desc' => __('px','SimpleKey'),
                        'default' => '18'
                        ),
                    
                    array(
                        'id' => 'contact_background_color',
                        'type' => 'color',
                        'title' => __('Background Color of Contact Section','SimpleKey'),
                        'default' => '#313131'
                        ),
                    
                    array(
                        'id' => 'contact_background',
                        'type' => 'media',
                        'title' => __('Background Image of Contact Section','SimpleKey'),
                        'desc' => __('Fill in the background image URL','SimpleKey'),
                        'default' => ''
                        ),
                    
                    array(
                        'id' => 'contact_text_color',
                        'type' => 'color',
                        'title' => __('Text Color of Contact Section','SimpleKey'),
                        'default' => '#ffffff'
                        ),
                        
                    array(
                        'id' => 'contact_input_background',
                        'type' => 'color',
                        'title' => __('Background of Contact Form Field','SimpleKey'),
                        'default' => '#454545'
                        ),
                    
                    array(
                        'id' => 'contact_input_text',
                        'type' => 'color',
                        'title' => __('Text Color of Contact Form Field','SimpleKey'),
                        'default' => '#8c8c8c'
                        ),
                        
                    array(
                        'id' => 'contact_btn_background',
                        'type' => 'color',
                        'title' => __('Background Color of Contact Form Button','SimpleKey'),
                        'default' => '#9f6248'
                        ),
                        
                    array(
                        'id' => 'contact_btn_text',
                        'type' => 'color',
                        'title' => __('Text Color of Contact Form Button','SimpleKey'),
                        'default' => '#4c2d20'
                        ),
        )
    ) );

Redux::setSection( $opt_name, array(
        'title'  => __( 'Social Media', 'SimpleKey' ),
        'id'     => 'social',
        'desc'   => __( 'Configure and initialize the general settings for SimpleKey theme.', 'SimpleKey' ),
        'icon'		 => 'el el-torso',
        'fields' => array(
           array(
                        'id' => 'facebook',
                        'type' => 'text',
                        'title' => __('Facebook URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' => '',
                        'default' => ''
                        ),
                    array(
                        'id' => 'twitter',
                        'type' => 'text',
                        'title' => __('Twitter URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'googlplus',
                        'type' => 'text',
                        'title' => __('Google+ URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'deviantart',
                        'type' => 'text',
                        'title' => __('Deviantart URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'flickr',
                        'type' => 'text',
                        'title' => __('Flicker URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'tumblr',
                        'type' => 'text',
                        'title' => __('Tumblr URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'behance',
                        'type' => 'text',
                        'title' => __('Behance URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'dribbble',
                        'type' => 'text',
                        'title' => __('Dribbble URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'pinterest',
                        'type' => 'text',
                        'title' => __('Pinterest URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'youtube',
                        'type' => 'text',
                        'title' => __('Youtube URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'vimeo',
                        'type' => 'text',
                        'title' => __('Vimeo URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'linkedIn',
                        'type' => 'text',
                        'title' => __('linkedIn URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'myspace',
                        'type' => 'text',
                        'title' => __('My Space URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'github',
                        'type' => 'text',
                        'title' => __('GitHub URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'soundCloud',
                        'type' => 'text',
                        'title' => __('SoundCloud URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'hearthis',
                        'type' => 'text',
                        'title' => __('Hearthis URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'blogger',
                        'type' => 'text',
                        'title' => __('Blogger URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),                  
                    array(
                        'id' => 'myemail',
                        'type' => 'text',
                        'title' => __('Email','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'aim',
                        'type' => 'text',
                        'title' => __('AIM ID','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'yahooim',
                        'type' => 'text',
                        'title' => __('Yahoo IM ID','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'instagram',
                        'type' => 'text',
                        'title' => __('Tnstagram URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'meetup',
                        'type' => 'text',
                        'title' => __('Meetup URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),

                    array(
                        'id' => 'fivehundreds',
                        'type' => 'text',
                        'title' => __('500px URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                        
                    array(
                        'id' => 'xing',
                        'type' => 'text',
                        'title' => __('Xing URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'klout',
                        'type' => 'text',
                        'title' => __('Klout URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                        ),
                    array(
                        'id' => 'houzz',
                        'type' => 'text',
                        'title' => __('Houzz URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                    ),
                    array(
                        'id' => 'vk',
                        'type' => 'text',
                        'title' => __('VK URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                    ),
                    array(
                        'id' => 'yelp',
                        'type' => 'text',
                        'title' => __('Yelp URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                    ),
                    array(
                        'id' => 'tripadvisor',
                        'type' => 'text',
                        'title' => __('TripAdvisor URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => ''
                    ),
                    array(
                        'id' => 'rss',
                        'type' => 'text',
                        'title' => __('RSS URL','SimpleKey'),
                        'validate' => 'no_html',
                        'desc' =>'',
                        'default' => home_url().'/feed'
                        ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Additionals', 'SimpleKey' ),
        'id'     => 'global-additionals',
        'icon'		 => 'el el-cogs',
        'desc'   => __( 'Additional options.', 'SimpleKey' ),
        'fields' => array(
                     array(
                        'id' => 'additional_code',
                        'type' => 'ace_editor',
                        'theme'    => 'monokai',
                        'title' => __('Additional Codes','SimpleKey'),
                        'desc' => __('You can add some CSS,Javascript,Statistics code or META infomation inside head tag','SimpleKey'),
                        'default' => ''
                        ),
                     array(
                        'id' => 'footer_code',
                        'type' => 'ace_editor',
                        'theme'    => 'monokai',
                        'title' => __('Footer Code','SimpleKey'),
                        'desc' => __('You can add some CSS,Javascript,Statistics code at the end of HTML document.','SimpleKey'),
                        'default' => ''
                        ),
        )
    ) );

    

    /*
     * <--- END SECTIONS
     */
