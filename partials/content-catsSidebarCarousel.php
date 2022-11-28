<div class="col">
    <div class="cats-carousel-container mt-lg-0 mt-md-2 p-0 border-0">
        <div id="cats-container" class="cats-carousel sidebar m-0" style="width:100%;">
            <?php 
                $categories = get_categories( array(
                    'hide_empty'    => false, //defaults to true,
                ));
            ?>
            <ul class="category-chips container list-unstyled px-0 m-0">
                <?php
                    echo '<li class="category-item-pill px-1"><a data-type="video" id="cat-filter-item" data-slug="" class="js-filter-item category-link btn active">All</a></li>';
                    foreach( $categories as $category ) {
                        echo '<li class="category-item-pill px-1"><a data-type="video" data-category="'. $category->name .'" id="cat-filter-item" class="js-filter-item category-link btn" data-slug="' . $category->slug . '" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>'; 
                    } 
                ?>
            </ul>
        </div>
    </div>
</div>