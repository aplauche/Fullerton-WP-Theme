<?php
/**
 * Title: Footer with text, links.
 * Slug: fullerton/footer-default
 * Categories: fullerton-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */ ?>

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"backgroundColor":"black","layout":{"inherit":true}} -->
<div class="wp-block-group has-black-background-color has-background"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"32px"}}},"textColor":"light"} -->
<div class="wp-block-columns alignwide has-light-color has-text-color" style="border-radius:0px;margin-top:32px"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":150,"height":150,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo get_stylesheet_directory_uri( ) . '/assets/images/sample-logo.png'?>" alt="" class="" width="150" height="150"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":5} -->
<h5>Navigation 1</h5>
<!-- /wp:heading -->

<!-- wp:page-list /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":5} -->
<h5>Navigation 2</h5>
<!-- /wp:heading -->

<!-- wp:page-list /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":5} -->
<h5>Social</h5>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"bg-secondary","iconColorValue":"#323232","iconBackgroundColor":{"name":"White","slug":"white","color":"#fff","class":"has-white-icon-background-color"},"iconBackgroundColorValue":"#fff","className":"is-style-default"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"align":"wide","backgroundColor":"bg-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-bg-secondary-color has-alpha-channel-opacity has-bg-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","textColor":"bg-secondary"} -->
<p class="has-text-align-center has-bg-secondary-color has-text-color">© 2022 Your Company LLC. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->