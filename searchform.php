



<form class="p-search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input class="p-search-form__keyword" placeholder=""value="<?php the_search_query(); ?>" name="s" id="s">
    <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
</form>