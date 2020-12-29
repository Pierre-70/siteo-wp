<?php

    function my_paging_nav() {
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
        return;
    }

    $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
    $pagenum_link = html_entity_decode( get_pagenum_link() );
    $query_args   = array();
    $url_parts    = explode( '?', $pagenum_link );

    if ( isset( $url_parts[1] ) ) {
        wp_parse_str( $url_parts[1], $query_args );
    }

    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
    $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

    $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
    $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

    $links = paginate_links( array(
    'base'     => $pagenum_link,
    'format'   => $format,
    'total'    => $GLOBALS['wp_query']->max_num_pages,
    'current'  => $paged,
    'mid_size' => 3,
    'add_args' => array_map( 'urlencode', $query_args ),
    'prev_text' => __( '<span class="fas fa-chevron-left mr-2"></span><span class="d-none d-md-inline">Précédent</span>', 'yourtheme' ),
    'next_text' => __( '<span class="d-none d-md-inline">Suivant</span> <span class="fas fa-chevron-right ml-2"></span>', 'yourtheme' ),
    'type'      => 'array',
    ) );

    if ( $links ) :
            //$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
?>

    <nav  aria-label="navigation" role="navigation">
        <ul class="pagination  justify-content-center">
            <?php  foreach ( $links as $link ) {
                echo '<li class="page-item">' . $link . '</li>';
            } ?>
        </ul>
    </nav>

<?php endif; } ?>
