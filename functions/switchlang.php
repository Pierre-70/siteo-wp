<?php
  if ( ! function_exists( 'lang_swicher' ) ) :
    function lang_swicher() {

        $i=0;
        $languages = pll_the_languages(array('raw'=>1));

        echo '<ul class="langswitcher">';
        foreach ($languages as $language){
          $i++;
          if ($language['current_lang']) :
            echo '<li class="select">';
                echo $language['slug'];
                    //if ($i < sizeof($languages)) : echo (' - '); endif;
            echo '</li>';
          else :
            echo '<li>';
                echo '<a href="' . $language['url'] . '" >' . $language['slug'] . '</a>';
                //if ($i < sizeof($languages)) : echo (' - '); endif;
            echo '</li>';
          endif;
        };
        echo '</ul>';

    }
  endif;
?>
