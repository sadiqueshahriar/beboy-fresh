<?php 
$categories = Cache::get('categories');
$categories = json_decode($categories,true);
$web_root = Request::root();
$categories_child_3 = Cache::get('proprosubcategories');
$categories_child_3 = json_decode($categories_child_3,true);
if(!empty($categories_child_3)){
    $k=1;
    foreach($categories_child_3 as $menu){
        $arr_cat_child_3[$menu['pro_sub_category_id']][$k] = "";
        $arr_cat_child_3[$menu['pro_sub_category_id']][$k] = '<a title="'.$menu['name'].'" href="'.$web_root.'/'.$menu['slug'].'">'.$menu['name'].'</a>';
        $k++;
    }
}
$categories_child_2 = Cache::get('prosubcategories');
$categories_child_2 = json_decode($categories_child_2,true);
if(!empty($categories_child_2)){
    $j=1;
    foreach($categories_child_2 as $menu){
        $arr_cat_child_2[$menu['subcategory_id']][$j] = "";
        $arr_cat_child_2[$menu['subcategory_id']][$j] = '<a title="'.$menu['name'].'" href="'.$web_root.'/'.$menu['slug'].'">'.$menu['name'].'</a>';
        $j++;
    }
}
$categories_child_1 = Cache::get('subcategories');
$categories_child_1 = json_decode($categories_child_1,true);
if(!empty($categories_child_1)){
    $i=1;
    foreach($categories_child_1 as $menu){
        $arr_cat_child_1[$menu['category_id']][$i] = "";
        $arr_cat_child_1[$menu['category_id']][$i] = '<a title="'.$menu['name'].'" href="'.$web_root.'/'.$menu['slug'].'">'.$menu['name'].'</a>';
        $i++;
    }
}
?>
<ul>
    <?php 
    $my_menu = '<li><a title="Binary logic brands" href="brands">Our Brands</a></li>';
    if(!empty($categories)){
        foreach($categories as $category){
            $my_menu .= "<li>";
                $my_menu .= "<a title='".$category['name']."' href='".$web_root.'/'.$category['slug']."'>".$category['name']."</a>";
                if(isset($arr_cat_child_1) && !empty($arr_cat_child_1[$category['id']])){
                    $my_menu .= "<ul>";
                    foreach($arr_cat_child_1[$category['id']] as $key => $child1){
                        $my_menu .= "<li>";
                            $my_menu .= $child1;
                            if(!empty($arr_cat_child_2[$key])){
                                $my_menu .= "<ul>";
                                foreach($arr_cat_child_2[$key] as $key => $child2){
                                    $my_menu .= "<li>";
                                        $my_menu .= $child2;
                                        if(!empty($arr_cat_child_3[$key])){
                                            $my_menu .= "<ul>";
                                                foreach($arr_cat_child_3[$key] as $key => $child3){
                                                    $my_menu .= "<li>";
                                                        $my_menu .= $child3;
                                                    $my_menu .= "</li>";
                                                }
                                            $my_menu .= "</ul>";
                                        }
                                    $my_menu .= "</li>";
                                }
                                $my_menu .= "</ul>";
                            }
                        $my_menu .= "</li>";
                    }
                    $my_menu .= "</ul>";
                }
                $my_menu .= "</li>";
        }
    }
    echo $my_menu;
    //Cache::put('nav', $my_menu, $seconds = 10000000000);
    ?>
</ul>