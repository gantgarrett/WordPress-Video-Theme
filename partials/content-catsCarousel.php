<div class="cats-carousel-container mt-lg-0 mt-md-2 pt-2 pb-2 ps-2 pe-2">
    <div id="cats-container" class="cats-carousel m-0" style="width:85%;">
        <?php 
            $categories = get_categories( array(
                'hide_empty'    => false, //defaults to true,
            ));
        ?>
        <ul class="category-chips container list-unstyled m-0">
            <?php
                echo '<li class="category-item-pill px-1"><a id="cat-filter-item" class="js-filter-item category-link btn active">All</a></li>';
                foreach( $categories as $category ) {
                    echo '<li class="category-item-pill px-1"><a data-category="'. $category->name .'" id="cat-filter-item" class="js-filter-item category-link btn" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>'; 
                } 
            ?>
        </ul>
    </div>
</div>