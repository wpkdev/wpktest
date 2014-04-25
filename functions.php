<?php


global $advertorialID;
global $stickyAdvertorialID;
global $noRssId;
global $showAdvId;

 add_theme_support( 'post-thumbnails' ); 

include ('aq_resizer.php');
include('incl_resize_image.php');
include('function_gallery.php');


register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'main-nav' ),
) );


function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

/***********************************
*** CONTENT FILTERS
************************************/
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

//Responsive images
function add_lazyload($content) {
    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
	$dom = new DOMDocument();
	@$dom->loadHTML($content);
	 
	foreach ($dom->getElementsByTagName('img') as $node) {  
	      $oldsrc = $node->getAttribute('src');
	      
	      if (strpos($oldsrc,'.gif')) {
	      
		      if(is_ani($oldsrc)){
				 
				 
				 $size = getimagesize($oldsrc);
				 
				 $size_width = $size[0]-5;
				 $size_height = $size[1]-5;
				 
				 $mobilesrc = aq_resize( $oldsrc, $size_width, $size_height, false, false ); //resize & crop img
				 $node->setAttribute("class", "animated_gif" );
				 $newsrc = $mobilesrc[0];
				 $node->setAttribute("src", $newsrc);
				 $node->setAttribute("src-animated", $oldsrc );
				
				 
			 }else{
				 
				 $mobilesrc = aq_resize( $oldsrc, 320, 100000000, false, false ); //resize & crop img
				 
				 $node->setAttribute("data-src", $oldsrc );
				 $node->setAttribute("data-src-mobile", $mobilesrc[0] );
				 
				 $newsrc = ''.get_template_directory_uri().'/img/pixel.gif';
			     $node->setAttribute("src", $newsrc);
			}
		}else{
			
			$mobilesrc = aq_resize( $oldsrc, 320, 100000000, false, false ); //resize & crop img
			$node->setAttribute("data-src", $oldsrc );
			$node->setAttribute("data-src-mobile", $mobilesrc[0] );
			$newsrc = ''.get_template_directory_uri().'/img/pixel.gif';
			$node->setAttribute("src", $newsrc);
			
		}
	 }
	
     $newHtml = preg_replace('/^<!DOCTYPE.+?>/', '', str_replace( array('<html>', '</html>', '<body>', '</body>'), array('', '', '', ''), $dom->saveHTML()));
     return $newHtml;      
}
//add_filter('the_content', 'add_lazyload');







/***********************************
*** CATEGORY FILTERS
************************************/

function get_category_post_name($postID){
   global $mainCats;
   $systemCats = $mainCats;
   $categoryArray = get_the_category($postID);
   foreach(($categoryArray) as $category) { 
        if(in_array($category->cat_ID, $systemCats)){
            if ($category->cat_name == 'Advertorial'){
                 $catName =  'Ad'; 
             }else{
                 $catName =  $category->cat_name; 
             }
            break;
        }
    }
   	return $catName;
}

function get_category_post_name_child($postID){
   global $mainCats;
   $systemCats = $mainCats;
   $categoryArray = get_the_category($postID);
   //$catName = 'false';
   foreach(($categoryArray) as $category) { 
        if(in_array($category->cat_ID, $systemCats)){
            $catID = $category->cat_ID;
			$catName =  $category->cat_name; 
			$categories = get_categories( array('child_of' => $category->cat_ID) );
			foreach(($categories) as $categoryel) { 
				if(in_category( $categoryel->cat_ID, $postID ) ){
					 $catName =  $categoryel->cat_name; 
					 break;
				}
			}
		}
    }
    return $catName;
}

function contenttype_init() {
    // create a new taxonomy
	register_taxonomy(
		'contenttypes',
		'post',
		array(
			'label' => __( 'Content types' ),
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'rewrite' => array( 'slug' => 'contenttypes' ),
			'show_admin_column' => true,
            'hierarchical' => true
		)
	);
}
add_action( 'init', 'contenttype_init' );

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args = array(
           	'id' => 'featured-image-2',
           	'post_type' => 'post',      // Set this to post or page
           	'labels' => array(
               	'name'      => 'Featured image 2',
               	'set'       => 'Set featured image 2',
               	'remove'    => 'Remove featured image 2',
               	'use'       => 'Use as featured image 2',
                )
        );

        new kdMultipleFeaturedImages( $args );
		
		 $args = array(
                'id' => 'featured-image-3',
                'post_type' => 'post',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Featured image 3',
                    'set'       => 'Set featured image 3',
                    'remove'    => 'Remove featured image 3',
                    'use'       => 'Use as featured image 3',
                )
        );

        new kdMultipleFeaturedImages( $args );
}



/*function is_ani($filename)
{
        $filecontents=file_get_contents($filename);

        $str_loc=0;
        $count=0;
        while ($count < 2) # There is no point in continuing after we find a 2nd frame
        {

                $where1=strpos($filecontents,"\x00\x21\xF9\x04",$str_loc);
                if ($where1 === FALSE)
                {
                        break;
                }
                else
                {
                        $str_loc=$where1+1;
                        $where2=strpos($filecontents,"\x00\x2C",$str_loc);
                        if ($where2 === FALSE)
                        {
                                break;
                        }
                        else
                        {
                                if ($where1+8 == $where2)
                                {
                                        $count++;
                                }
                                $str_loc=$where2+1;
                        }
                }
        }

        if ($count > 1)
        {
                return(true);

        }
        else
        {
                return(false);
        }
}

exec("ls *gif" ,$allfiles);
foreach ($allfiles as $thisfile)
{
        if (is_ani($thisfile))
        {
                echo "$thisfile is animated<BR>\n";
        }
        else
        {
                echo "$thisfile is NOT animated<BR>\n";
        }
}
*/


// Disable Admin Bar for everyone
if (!function_exists('df_disable_admin_bar')) {

	function df_disable_admin_bar() {
		
		// for the admin page
		remove_action('admin_footer', 'wp_admin_bar_render', 1000);
		// for the front-end
		remove_action('wp_footer', 'wp_admin_bar_render', 1000);
	  	
		// css override for the admin page
		function remove_admin_bar_style_backend() { 
			echo '<style>body.admin-bar #wpcontent, body.admin-bar #adminmenu { padding-top: 0px !important; }</style>';
		}	  
		add_filter('admin_head','remove_admin_bar_style_backend');
		
		// css override for the frontend
		function remove_admin_bar_style_frontend() {
			echo '<style type="text/css" media="screen">
			html { margin-top: 0px !important; }
			* html body { margin-top: 0px !important; }
			</style>';
		}
		add_filter('wp_head','remove_admin_bar_style_frontend', 99);
  	}
}
add_action('init','df_disable_admin_bar');






?>