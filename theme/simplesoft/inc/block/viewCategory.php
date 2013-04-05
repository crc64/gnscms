<?php
  /**
   * $Id: viewCategory.php, v 1.0.0 2009/01/07 datazen Exp $ :: updated 2012/06/20 maestro Exp $
   *
   * gnsPLANET.com - The Foundation of Development & Research for the New Millenium
   * http://www.gnsplanet.com/
   * 
   * 3G Development - The Ultimate in Design, Functionality and Service
   * http://www.3g-dev.com/
   * 
   * Copyright � 2010 gnsPLANET, LLC. All rights reserved.
   * Copyright � 2012 3G Development. All rights reserved.
   * 
   */
?>
      <article class="hero clearfix">
        <div class="col_100">
          <h1><?php echo htmlspecialchars($categoryResults->title); ?></h1>
        </div>
      </article>
      <article class="article clearfix">
        <?php 
          echo $categoryResults->content; 
        ?>      
      </article>
      <article class="article clearfix">
        <h4>More Listings in this Category</h4>
      </article>
      <article class="article clearfix">
        <ul style="list-style:none;margin:0 0 0 -20px;">
<?php
  foreach ($subCategoryResults['results'] as $subCategory) {
    if ( $subCategory->status == 1 && $subCategory->title != '404') { 
      echo '          <li><a href="' . gen_seo_friendly_titles($subCategory->slug) . '.html">' . $subCategory->title . '</a></li>';
    }
  }
?>
        </ul>
      </article>