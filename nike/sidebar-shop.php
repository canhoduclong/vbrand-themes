<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>


    <div class="widget widget-collapsible">
        <h3 class="widget-title">
            <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">Sản phẩm</a>
        </h3>
        <div class="collapse show" id="widget-1">
            <div class="widget-body">
                <div class="filter-items filter-items-count">
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {?> 
                        <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" value="dam-nu-tuoi-teen" id="dam-nu-tuoi-teen">
                                <label class="custom-control-label" for="dam-nu-tuoi-teen"><?=$category->name?></label>
                            </div>  
                            <span class="item-count"><?=$category->count?></span>
                        </div> 
                    <?php }
                    ?> 
                </div><!-- End .filter-items -->
            </div><!-- End .widget-body -->
        </div><!-- End .collapse -->
    </div>
 
  
</aside>

 

