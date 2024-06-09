<?php

/**
 * Title: Header
 * Slug: coastline/header
 * Categories: coastline, header
 * Block Types: core/template-part/header
 * Viewport width: 1400
 */
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"blockGap":"0px","padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"coastline-pale-yellow","textColor":"coastline-copper","layout":{"type":"constrained","wideSize":"1400px"}} -->
<header class="wp-block-group alignfull has-coastline-copper-color has-coastline-pale-yellow-background-color has-text-color has-background has-link-color" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
  <?php
  if (class_exists('woocommerce')) {
    echo '<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"className":"has-small-font-size","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group has-small-font-size">
      <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|coastline-copper"}}}},"backgroundColor":"coastline-light-brown","textColor":"coastline-copper","className":"coastline-header-search"} /-->
      <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
      <div class="wp-block-group">
        <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","textColor":"coastline-copper","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|coastline-copper"}}}}} /-->
        <!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","addToCartBehaviour":"open_drawer","hasHiddenPrice":false,"priceColor":{"slug":"coastline-copper","color":"#c47439","name":"Copper","class":"has-coastline-copper-price-color"},"iconColor":{"slug":"coastline-copper","color":"#c47439","name":"Copper","class":"has-coastline-copper-icon-color"},"productCountColor":{"slug":"coastline-light-brown","color":"#e2ac6c","name":"Light Brown","class":"has-coastline-light-brown-product-count-color"},"style":{"typography":{"fontSize":"14px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->';
  }
  ?>

  <!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"top":"1rem","left":"0px","bottom":"2rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
  <div class="wp-block-group" style="padding-top:1rem;padding-bottom:2rem;padding-left:0px"><!-- wp:site-logo {"shouldSyncIcon":false} /--></div>
  <!-- /wp:group -->
  <!-- wp:navigation {"ref":4,"textColor":"coastline-copper","backgroundColor":"coastline-pale-yellow","icon":"menu","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"},"style":{"typography":{"textTransform":"uppercase"},"spacing":{"blockGap":"var:preset|spacing|50"}}} /-->
</header>
<!-- /wp:group -->

<!-- wp:boldblocks/svg-block {"content":"\u003csvg class=\u0022header-wave\u0022 viewBox=\u00220 0 500 66\u0022\u003e\n    \u003cpath class=\u0022bottom-wave\u0022 d=\u0022M 0 15 C 215 115 250 -35 500 65 L 500 0 L 0 0\u0022 fill=\u0022#79a4aa\u0022 opacity=\u00221\u0022\u003e\n    \u003c/path\u003e\n    \u003cpath class=\u0022middle-wave\u0022 d=\u0022M 0 15 C 150 115 300 -35 500 45 L 500 0 L 0 0\u0022 fill=\u0022#1e5c73\u0022\u003e\n    \u003c/path\u003e\n    \u003cpath class=\u0022top-wave\u0022 d=\u0022M 0 15 C 100 110 270 -40 500 15 L 500 0 L 0 0\u0022 fill=\u0022#f1dbb6\u0022\u003e\n    \u003c/path\u003e\n  \u003c/svg\u003e","flip":true,"boldblocks":{"width":{"sm":{"inherit":"lg"},"md":{"inherit":"lg"},"lg":{"value":{"width":"100%","value":"100%"},"inherit":null}},"justifyAlignment":{"sm":{"inherit":"lg"},"md":{"inherit":"lg"},"lg":{"value":"center","inherit":null}}}} -->
<div class="wp-block-boldblocks-svg-block" style="--bb--justify-alignment--sm:var(--bb--justify-alignment--lg);--bb--justify-alignment--md:var(--bb--justify-alignment--lg);--bb--justify-alignment--lg:center">
  <div class="wp-block-boldblocks-svg-block__inner is-flip" style="--bb--width--sm:var(--bb--width--lg);--bb--width--md:var(--bb--width--lg);--bb--width--lg:100%">
    <svg class="header-wave" viewBox="0 0 500 66">
      <path class="bottom-wave" d="M 0 15 C 215 115 250 -35 500 65 L 500 0 L 0 0" fill="#79a4aa" opacity="1">
      </path>
      <path class="middle-wave" d="M 0 15 C 150 115 300 -35 500 45 L 500 0 L 0 0" fill="#1e5c73">
      </path>
      <path class="top-wave" d="M 0 15 C 100 110 270 -40 500 15 L 500 0 L 0 0" fill="#f1dbb6">
      </path>
    </svg>
  </div>
</div>
<!-- /wp:boldblocks/svg-block -->