
@include('html/menu')



{{-- <?php 
    // $categories = Cache::get('categories');
    // $categories = json_decode($categories, true);
    $categories = App\Models\Category::where('status', 1)->orderBy('position_id','ASC')->get(); 
?>
<nav>

    <ul>

        <li><a title="Binary logic brands" href="brands">Our Brands</a></li>
        <li><a title="Binary logic offers" href="offer">offer</a></li>
        @foreach($categories as $category)
            <?php 
                $subCategories = App\Models\Subcategory::where('category_id', $category['id'])->where('status', 1)->get();
            ?>
        
        <li>
            <a href="{{route('/', $category['slug'])}}">{{$category['name']}}
                @if(count($subCategories) > 0)
                    <i class="fa fa-angle-down"></i>
                @endif
            </a>
            @if (count($subCategories)>0)
                
            
            <ul class="sub_menu">
                @foreach($subCategories as $sub_category)

                <?php 
                    $proSubCategories = App\Models\Prosubcategory::where('subcategory_id', $sub_category->id)->where('status', 1)->get();
                ?>
                <li>
                    <a href="{{route('/', $sub_category['slug'])}}">
                        {{$sub_category['name']}}

                        @if(count($proSubCategories) > 0)
                        <i class="fa fa-chevron-right float-end" style="font-size: 12px;"></i>
                        @endif
                    </a>

            @if(count($proSubCategories) > 0)

                <ul>
                     @foreach($proSubCategories as $proSubCategory)
                     <?php 
                        $proproSubCategories = DB::table('proprocategories')->where('pro_sub_category_id', $proSubCategory->id)->where('status', 1)->get();
                        ?>

                        <li><a href="{{route('/', $proSubCategory->slug)}}">{{$proSubCategory->name}}
                            @if(count($proproSubCategories) > 0)
                            <i class="fa fa-chevron-left float-end" style="font-size: 12px;"></i>
                            @endif
                        </a>
                        @if(count($proproSubCategories) > 0)
                        <ul>

                            @foreach ($proproSubCategories as $proproSubCategory)
                            <li><a href="{{route('/',$proproSubCategory->slug)}}">{{$proproSubCategory->name}}</a></li>
                            
                         @endforeach
                        </ul>
                        @endif
                            
                    </li>
                    
                    @endforeach
                        
                        
                    </ul>
                    
                    @endif

                </li>
                
                @endforeach
                
            </ul>
            @endif




        </li>

        
        @endforeach


    </ul>
</nav> --}}