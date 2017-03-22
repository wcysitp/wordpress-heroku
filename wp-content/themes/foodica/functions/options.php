<?php return array(


/* Theme Admin Menu */
"menu" => array(
    array("id"    => "1",
          "name"  => "General"),

    array("id"    => "2",
          "name"  => "Homepage"),


    array("id"    => "7",
          "name"  => "Banners"),
),

/* Theme Admin Options */
"id1" => array(
    array("type"  => "preheader",
          "name"  => "Theme Settings"),

    array("name"  => "Color Style",
          "desc"  => "Choose the style that you would like to use.<br />",
          "id"    => "theme_style",
          "options" => array('Default', 'Dark', 'Dark Green', 'Light Green', 'Pink', 'Yellow', 'Orange', 'Teal', 'Turquoise'),
          "std"   => "Default",
          "type"  => "select"),

    array("name"  => "Custom Feed URL",
          "desc"  => "Example: <strong>http://feeds.feedburner.com/wpzoom</strong>",
          "id"    => "misc_feedburner",
          "std"   => "",
          "type"  => "text"),

	array("name"  => "Enable comments for static pages",
          "id"    => "comments_page",
          "std"   => "off",
          "type"  => "checkbox"),


    array(
      "name" => "Display WooCommerce Cart Button in the Header?",
      "id" => "cart_icon",
      "std" => "on",
      "type" => "checkbox"
    ),



    array(
        "type" => "startsub",
        "name" => "Infinite Scroll",
    ),

        array(
            "desc" => sprintf('This feature depends on <a href="http://jetpack.me" target="_blank">Jetpack</a>, please install it first and then <a href="http://jetpack.me/support/activate-and-deactivate-modules/" target="_blank">activate Infinite Scroll module</a>. <br>Then navigate to %1$s to select a trigger for infinite scroll.', sprintf('<a href="%1$s" target="_blank">Reading Settings</a>', esc_url(admin_url('options-reading.php#infinite-scroll-options')))),
            "type" => "paragraph",
        ),

        array(
            "name" => "Load More Button Text",
            "desc" => "Used only when Scroll Infinitely is disabled in Reading Settings.",
            "id"   => "infinite_scroll_handle_text",
            "type" => "text",
            "std"  => "Older Posts"
        ),

    array(
        "type" => "endsub"
    ),




    array(
      "type" => "preheader",
      "name" => "Layouts"
    ),


    array("type" => "startsub",
         "name" => "Homepage"),

        array(
            "name" => "Layout",
            "desc" => "Select if you want to show or not the Sidebar on the Homepage",
            "id" => "layout_home",
            "options" => array(
              'side-right' => 'Sidebar on the right',
              'full' => 'Full Width'
            ),
            "std" => "side-right",
            "type" => "select-layout"
        ),


        array("name"  => "Posts Layout",
            "id"    => "post_view",
            "options" => array('Grid', 'List'),
            "std"   => "Grid",
            "type"  => "select"),

    array("type"  => "endsub"),


    array("type" => "startsub",
         "name" => "Category Pages"),

        array(
            "name" => "Layout",
            "desc" => "Select if you want to show or not the sidebar on the Category and other archive pages",
            "id" => "layout_archive",
            "options" => array(
              'side-right' => 'Sidebar on the right',
              'full' => 'Full Width'
            ),
            "std" => "side-right",
            "type" => "select-layout"
        ),

        array("name"  => "Posts Layout",
            "id"    => "post_view_archive",
            "options" => array('Grid', 'List'),
            "std"   => "Grid",
            "type"  => "select"),

    array("type"  => "endsub"),



      array(
            "type" => "preheader",
            "name" => "Homepage Posts"
        ),

        array(
            "name" => "Content",
            "desc" => "Number of posts displayed on homepage can be changed <a href=\"options-reading.php\" target=\"_blank\">here</a>.",
            "id" => "display_content",
            "options" => array(
                'Excerpt',
                'Full Content',
                'None'
            ),
            "std" => "Excerpt",
            "type" => "select"
        ),

        array(
            "name" => "Excerpt length",
            "desc" => "Default: <strong>50</strong> (words)",
            "id" => "excerpt_length",
            "std" => "50",
            "type" => "text"
        ),


        array(
            "name" => "Display Featured Image",
            "id" => "display_thumb",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Category",
            "id" => "display_category",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Author",
            "id" => "display_author",
            "std" => "on",
            "type" => "checkbox"
        ),


        array(
            "name" => "Display Date/Time",
            "desc" => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
            "id" => "display_date",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Comments Count",
            "id" => "display_comments",
            "std" => "on",
            "type" => "checkbox"
        ),

        array("type" => "startsub",
               "name" => "Sticky Posts Options"),

            array(
                "name" => "Display Read More Button on Sticky Posts",
                "desc" => "You can find instructions to <strong>stick a post at the top</strong> in <a href='http://www.wpzoom.com/documentation/foodica/#sticky' target='_blank'>documentation</a>.",
                "id" => "display_more_sticky",
                "std" => "on",
                "type" => "checkbox"
            ),

            array(
                "name" => "Keep Featured Image Original Aspect Ratio?",
                "id" => "sticky_thumb_aspect",
                "std" => "on",
                "type" => "checkbox"
            ),

        array("type"  => "endsub"),



        array(
            "name" => "Display Read More Button on All Posts",
            "id" => "display_more",
            "std" => "on",
            "type" => "checkbox"
        ),


        array(
              "type" => "preheader",
              "name" => "Category Posts"
          ),

          array(
              "name" => "Content",
              "id" => "category_content",
              "options" => array(
                  'Excerpt',
                  'Full Content',
                  'None'
              ),
              "std" => "Excerpt",
              "type" => "select"
          ),


          array(
              "name" => "Display Featured Image",
              "id" => "category_thumb",
              "std" => "on",
              "type" => "checkbox"
          ),

          array(
              "name" => "Display Category",
              "id" => "category_display_category",
              "std" => "on",
              "type" => "checkbox"
          ),

          array(
              "name" => "Display Author",
              "id" => "category_author",
              "std" => "on",
              "type" => "checkbox"
          ),

          array(
              "name" => "Display Date/Time",
              "desc" => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
              "id" => "category_date",
              "std" => "on",
              "type" => "checkbox"
          ),

          array(
              "name" => "Display Comments Count",
              "id" => "category_comments",
              "std" => "on",
              "type" => "checkbox"
          ),

          array(
              "name" => "Display Read More Button",
              "id" => "category_more",
              "std" => "on",
              "type" => "checkbox"
          ),



        array(
            "type" => "preheader",
            "name" => "Single Post Options"
        ),


        array("type" => "startsub",
               "name" => "Share Buttons"),

            array(
                "name" => "Display Featured Image at the Top",
                "id" => "post_thumb",
                "std" => "on",
                "type" => "checkbox"
            ),

            array(
                "name" => "Keep Featured Image Original Aspect Ratio?",
                "id" => "post_thumb_aspect",
                "std" => "on",
                "type" => "checkbox"
            ),

        array("type"  => "endsub"),


        array(
            "name" => "Display Author",
            "desc" => "You can edit your profile on this <a href='profile.php' target='_blank'>page</a>.",
            "id" => "post_author",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Date/Time",
            "desc" => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
            "id" => "post_date",
            "std" => "on",
            "type" => "checkbox"
        ),


        array(
            "name" => "Display Category",
            "id" => "post_category",
            "std" => "on",
            "type" => "checkbox"
        ),

        array("type" => "startsub",
               "name" => "Share Buttons"),

          array("name"  => "Display Sharing Buttons",
                "id"    => "post_share",
                "std"   => "on",
                "type"  => "checkbox"),

          array("name"  => "Twitter Button Label",
                "desc"  => "Default: <strong>Tweet</strong>",
                "id"    => "post_share_label_twitter",
                "std"   => "Tweet",
                "type"  => "text"),

          array("name"  => "Facebook Button Label",
                "desc"  => "Default: <strong>Share</strong>",
                "id"    => "post_share_label_facebook",
                "std"   => "Share",
                "type"  => "text"),

          array("name"  => "Google+ Button Label",
                "desc"  => "Default: <strong>Share</strong>",
                "id"    => "post_share_label_gplus",
                "std"   => "Share",
                "type"  => "text"),

          array("name"  => "Pinterest Button Label",
                "desc"  => "Default: <strong>Pin It</strong>",
                "id"    => "post_share_label_pinterest",
                "std"   => "Pin It",
                "type"  => "text"),

        array("type"  => "endsub"),



        array(
            "name" => "Display Tags",
            "id" => "post_tags",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Author Profile",
            "desc" => "You can edit your profile on this <a href='profile.php' target='_blank'>page</a>.",
            "id" => "post_author_box",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Comments",
            "id" => "post_comments",
            "std" => "on",
            "type" => "checkbox"
        ),

    ),


"id2" => array(

  array("type"  => "preheader",
        "name"  => "Recent Posts"),

  array("name"  => "Title for Recent Posts",
        "desc"  => "Default: <em>Recent Posts</em>",
        "id"    => "recent_title",
        "std"   => "Recent Posts",
        "type"  => "text"),

  array("name"  => "Exclude categories",
        "desc"  => "Choose the categories which should be excluded from the main Loop on the homepage.<br/><em>Press CTRL or CMD key to select/deselect multiple categories </em>",
        "id"    => "recent_part_exclude",
        "std"   => "",
        "type"  => "select-category-multi"),

  array("name"  => "Hide Featured Posts in Recent Posts?",
        "desc"  => "You can use this option if you want to hide posts which are featured in the slider on front page.",
        "id"    => "hide_featured",
        "std"   => "on",
        "type"  => "checkbox"),


    array("type"  => "preheader",
          "name"  => "Homepage Slideshow"),

    array("name"  => "Display Slideshow on Homepage?",
          "desc"  => "Do you want to show a featured slider on the homepage? To feature a post or page in the slider just check the option <strong>Featured in Homepage Slider</strong> when you edit a specific post or page.",
          "id"    => "featured_posts_show",
          "std"   => "on",
          "type"  => "checkbox"),

    array("name"  => "Content Source",
          "desc"  => "Select the type of content that should be displayed in the slider. <strong>Slides are ordered by date</strong>.",
          "options" => array('Featured Posts', 'Featured Pages'),
          "id"   => "featured_type",
          "std"   => "Featured Posts",
          "type"  => "select"),


    array("name"  => "Autoplay Slideshow?",
          "desc"  => "Do you want to auto-scroll the slides?",
          "id"    => "slideshow_auto",
          "std"   => "on",
          "type"  => "checkbox",
          "js"    => true),

    array("name"  => "Slider Autoplay Interval",
          "desc"  => "Select the interval (in miliseconds) at which the Slider should change slides (<strong>if autoplay is enabled</strong>). Default: 3000 (3 seconds).",
          "id"    => "slideshow_speed",
          "std"   => "3000",
          "type"  => "text",
          "js"    => true),

    array("name"  => "Number of Posts/Pages in Slider",
          "desc"  => "How many posts or pages should appear in the Slider on the homepage? Default: 5.",
          "id"    => "slideshow_posts",
          "std"   => "5",
          "type"  => "text"),

    array(
        "name" => "Display Category",
         "id" => "slider_category",
        "std" => "on",
        "type" => "checkbox"
    ),

    array(
        "name" => "Display Date/Time",
        "desc" => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
        "id" => "slider_date",
        "std" => "on",
        "type" => "checkbox"
    ),

    array(
        "name" => "Display Comments Count",
        "id" => "slider_comments",
        "std" => "on",
        "type" => "checkbox"
    ),

    array(
        "name" => "Display Read More Button",
        "id" => "slider_button",
        "std" => "on",
        "type" => "checkbox"
    ),

),


"id7" => array(
    array("type"  => "preheader",
          "name"  => "Header Ad"),

    array("name"  => "Enable ad space in the header?",
          "id"    => "ad_head_select",
          "std"   => "off",
          "type"  => "checkbox"),

    array("name"  => "HTML Code (Adsense)",
          "desc"  => "Enter complete HTML code for your banner (or Adsense code) or upload an image below.",
          "id"    => "ad_head_code",
          "std"   => "",
          "type"  => "textarea"),

    array("name"  => "Upload your image",
          "desc"  => "Upload a banner image or enter the URL of an existing image.<br/>Recommended size: <strong>728 × 90px</strong>",
          "id"    => "banner_top",
          "std"   => "",
          "type"  => "upload"),

    array("name"  => "Destination URL",
          "desc"  => "Enter the URL where this banner ad points to.",
          "id"    => "banner_top_url",
          "type"  => "text"),

    array("name"  => "Banner Title",
          "desc"  => "Enter the title for this banner which will be used for ALT tag.",
          "id"    => "banner_top_alt",
          "type"  => "text"),




     array("type"  => "preheader",
          "name"  => "After First Post"),

    array("name"  => "Enable ad space after first post on front page?",
          "id"    => "ad_slider_select",
          "std"   => "off",
          "type"  => "checkbox"),

    array("name"  => "HTML Code (Adsense)",
          "desc"  => "Enter complete HTML code for your banner (or Adsense code) or upload an image below.",
          "id"    => "ad_slider_code",
          "std"   => "",
          "type"  => "textarea"),

    array("name"  => "Upload your image",
          "desc"  => "Upload a banner image or enter the URL of an existing image.<br/>Recommended size: <strong>728 × 90px</strong>",
          "id"    => "banner_slider_home",
          "std"   => "",
          "type"  => "upload"),

    array("name"  => "Destination URL",
          "desc"  => "Enter the URL where this banner ad points to.",
          "id"    => "banner_slider_home_url",
          "type"  => "text"),

    array("name"  => "Banner Title",
          "desc"  => "Enter the title for this banner which will be used for ALT tag.",
          "id"    => "banner_slider_home_alt",
          "type"  => "text"),


    array("type"  => "preheader",
          "name"  => "Sidebar Ad"),

    array("name"  => "Enable ad space in sidebar?",
          "id"    => "ad_side",
          "std"   => "off",
          "type"  => "checkbox"),

    array("name"  => "Ad Position",
          "desc"  => "Do you want to place the banner before the widgets or after the widgets?",
          "id"    => "ad_side_pos",
          "options" => array('Before widgets', 'After widgets'),
          "std"   => "Before widgets",
          "type"  => "select"),

    array("name"  => "HTML Code (Adsense)",
          "desc"  => "Enter complete HTML code for your banner (or Adsense code) or upload an image below.",
          "id"    => "ad_side_imgpath",
          "std"   => "",
          "type"  => "textarea"),

    array("name"  => "Upload your image",
          "desc"  => "Upload a banner image or enter the URL of an existing image.<br/>Recommended size: <strong>300 × 300px</strong>",
          "id"    => "banner_sidebar",
          "std"   => "",
          "type"  => "upload"),

    array("name"  => "Destination URL",
          "desc"  => "Enter the URL where this banner ad points to.",
          "id"    => "banner_sidebar_url",
          "type"  => "text"),

    array("name"  => "Banner Title",
          "desc"  => "Enter the title for this banner which will be used for ALT tag.",
          "id"    => "banner_sidebar_alt",
          "type"  => "text"),


    array("type"  => "preheader",
          "name"  => "Post Ad"),

  array("name"  => "Enable ad space after the content in posts?",
          "id"    => "banner_post_enable",
          "std"   => "off",
          "type"  => "checkbox"),

    array("name"  => "HTML Code (Adsense)",
          "desc"  => "Enter complete HTML code for your banner (or Adsense code) or upload an image below.",
          "id"    => "banner_post_html",
          "std"   => "",
          "type"  => "textarea"),

  array("name"  => "Upload your image",
          "desc"  => "Upload a banner image or enter the URL of an existing image.<br/>Recommended size: <strong>728 × 90px</strong>",
          "id"    => "banner_post",
          "std"   => "",
          "type"  => "upload"),

  array("name"  => "Destination URL",
          "desc"  => "Enter the URL where this banner ad points to.",
          "id"    => "banner_post_url",
          "type"  => "text"),

  array("name"  => "Banner Title",
          "desc"  => "Enter the title for this banner which will be used for ALT tag.",
          "id"    => "banner_post_alt",
          "type"  => "text"),

)

/* end return */);