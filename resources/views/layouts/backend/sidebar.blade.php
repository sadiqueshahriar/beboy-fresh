<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();
  $productId = '';
  if(!empty($product->id)){
  $productId = $product->id;
  }
?> 

<style>
  .text-black{
    color: black;
  }
  .nav-pills .nav-link {
    color: black;
}
.nav-pills .nav-link:not(.active):hover {
    color: black;
}
.content-wrapper {
    background-color: white;
}
</style>
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL::to('/')}}" target="_blank" class="brand-link">
      <img src="{{asset('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="text-black">Beboy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->name  ?? '' }}</a>
          <a href="{{route('logout')}}"><button class="btn btn-danger w-100 btn-sm"><b>Log Out</b></button></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item {{ request()->is('admin/dashboard') ? 'menu-open' : '' }}">
            <a href="{{URL::to('admin/dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>



          @if($user->role_id == 0 )


          <li class="nav-item has-treeview">
            <a href="{{URL::to('admin/order')}}" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Order
              </p>
            </a>
          </li>

          <li class="nav-item
            {{ request()->is('admin/category/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/category') ? 'menu-open' : '' }}
          ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/category/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/category/create')}}" class="nav-link {{ request()->is('admin/category/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/category') ? 'active' : '' }}">
                <a href="{{URL::to('admin/category')}}" class="nav-link {{ request()->is('admin/category') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

              <li class="nav-item
              {{ request()->is('admin/subcategory/create') ? 'menu-open' : '' }}
              {{ request()->is('admin/subcategory') ? 'menu-open' : '' }}
            ">
              <a href="" class="nav-link ">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  SubCategory
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item {{ request()->is('admin/subcategory/create') ? 'active' : '' }}">
                  <a href="{{URL::to('admin/subcategory/create')}}" class="nav-link {{ request()->is('admin/subcategory/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item {{ request()->is('admin/subcategory') ? 'active' : '' }}">
                  <a href="{{URL::to('admin/subcategory')}}" class="nav-link {{ request()->is('admin/subcategory') ? 'active' : '' }}"  style="margin-left: 21px;">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage</p>
                  </a>
                </li>
  
              </ul>
            </li>

            <li class="nav-item
            {{ request()->is('admin/prosubcategory/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/prosubcategory') ? 'menu-open' : '' }}
          ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Pro SubCategory
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/prosubcategory/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/prosubcategory/create')}}" class="nav-link {{ request()->is('admin/prosubcategory/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/prosubcategory') ? 'active' : '' }}">
                <a href="{{URL::to('admin/prosubcategory')}}" class="nav-link {{ request()->is('admin/prosubcategory') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item
            {{ request()->is('admin/proprocategory/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/proprocategory') ? 'menu-open' : '' }}
          ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Pro Pro Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/proprocategory/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/proprocategory/create')}}" class="nav-link {{ request()->is('admin/proprocategory/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/proprocategory') ? 'active' : '' }}">
                <a href="{{URL::to('admin/proprocategory')}}" class="nav-link {{ request()->is('admin/proprocategory') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>


            </ul>
            
          </li>


          


          


          

          <li class="nav-item
          {{ request()->is('admin/brand/create') ? 'menu-open' : '' }}
          {{ request()->is('admin/brand') ? 'menu-open' : '' }}
        ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Brand
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ request()->is('admin/brand/create') ? 'active' : '' }}">
              <a href="{{URL::to('admin/brand/create')}}" class="nav-link {{ request()->is('admin/brand/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
              </a>
            </li>
            <li class="nav-item {{ request()->is('admin/brand') ? 'active' : '' }}">
              <a href="{{URL::to('admin/brand')}}" class="nav-link {{ request()->is('admin/brand') ? 'active' : '' }}"  style="margin-left: 21px;">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage</p>
              </a>
            </li>

          </ul>
        </li>




          <li class="nav-item
            {{ request()->is('admin/product/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/product') ? 'menu-open' : '' }}
            {{ $productId ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/product/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/product/create')}}" class="nav-link {{ request()->is('admin/product/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/product') ? 'active' : '' }}">
                <a href="{{URL::to('admin/product')}}" class="nav-link {{ request()->is('admin/product') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>

         
          <li class="nav-item
            {{ request()->is('admin/post/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/post') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-rss"></i>
              <p>
                Blog Post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/post/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/post/create')}}" class="nav-link {{ request()->is('admin/post/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/post') ? 'active' : '' }}">
                <a href="{{URL::to('admin/post')}}" class="nav-link {{ request()->is('admin/post') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>
          
          

          <li class="nav-item
            {{ request()->is('admin/banner/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/banner') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Home Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/banner/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/banner/create')}}" class="nav-link {{ request()->is('admin/banner/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/banner') ? 'active' : '' }}">
                <a href="{{URL::to('admin/banner')}}" class="nav-link {{ request()->is('admin/banner') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item
            {{ request()->is('admin/slidertext/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/slidertext') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Slider text
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/slidertext/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/slidertext/create')}}" class="nav-link {{ request()->is('admin/slidertext/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/slidertext') ? 'active' : '' }}">
                <a href="{{URL::to('admin/slidertext')}}" class="nav-link {{ request()->is('admin/slidertext') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item
          {{ request()->is('admin/user/create') ? 'menu-open' : '' }}
          {{ request()->is('admin/user') ? 'menu-open' : '' }}
        ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              User
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ request()->is('admin/user/create') ? 'active' : '' }}">
              <a href="{{URL::to('admin/user/create')}}" class="nav-link {{ request()->is('admin/user/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
              </a>
            </li>
            <li class="nav-item {{ request()->is('admin/user') ? 'active' : '' }}">
              <a href="{{URL::to('admin/user')}}" class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}"  style="margin-left: 21px;">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage</p>
              </a>
            </li>
          </ul>
        </li>


          <li class="nav-item has-treeview mb-5
              {{ request()->is('admin/pagecategory/create') ? 'menu-open' : '' }}
              {{ request()->is('admin/pagecategory') ? 'menu-open' : '' }}              
              {{ request()->is('admin/page/create') ? 'menu-open' : '' }}
              {{ request()->is('admin/page') ? 'menu-open' : '' }}               
              {{ request()->is('admin/sitesetting/create') ? 'menu-open' : '' }}
              {{ request()->is('admin/sitesetting') ? 'menu-open' : '' }}              

          ">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Home Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



              <li class="nav-item has-treeview
                {{ request()->is('admin/sitesetting/create') ? 'menu-open' : '' }}
                {{ request()->is('admin/sitesetting') ? 'menu-open' : '' }}
              ">
                <a href="#" class="nav-link"  style="margin-left: 21px;">
                  <i class="nav-icon fas fa-cog"></i>
                  <p>
                    Site Settings
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item {{ request()->is('admin/sitesetting') ? 'active' : '' }}">
                    <a href="{{URL::to('admin/sitesetting')}}" class="nav-link {{ request()->is('admin/sitesetting') ? 'active' : '' }}" style="margin-left: 44px;">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage</p>
                    </a>
                  </li>

                </ul>
              </li>
            </ul>
          </li>


          @endif


          @if($user->role_id != 0)
          <li class="nav-item
            {{ request()->is('admin/brand/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/brand') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-first-order"></i>
              <p>
                Brand
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/brand/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/brand/create')}}" class="nav-link {{ request()->is('admin/brand/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/brand') ? 'active' : '' }}">
                <a href="{{URL::to('admin/brand')}}" class="nav-link {{ request()->is('admin/brand') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>



          <li class="nav-item
            {{ request()->is('admin/shoptype/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/shoptype') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Feature Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/shoptype/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/shoptype/create')}}" class="nav-link {{ request()->is('admin/shoptype/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/shoptype') ? 'active' : '' }}">
                <a href="{{URL::to('admin/shoptype')}}" class="nav-link {{ request()->is('admin/shoptype') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>
          
           {{-- Product Stock Report starts --}}
          
          <li class="nav-item
            {{ request()->is('admin/component/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/component') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Stock Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/stock-report') ? 'active' : '' }}">
                <a href="{{URL::to('admin/stock-report')}}" class="nav-link {{ request()->is('admin/stock-report') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Stock Report</p>
                </a>
              </li>
            </ul>
          </li>
{{-- Product Stock Report ends --}}




          <li class="nav-item
            {{ request()->is('admin/product/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/product') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/product/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/product/create')}}" class="nav-link {{ request()->is('admin/product/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/product') ? 'active' : '' }}">
                <a href="{{URL::to('admin/product')}}" class="nav-link {{ request()->is('admin/product') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item
            {{ request()->is('admin/tag/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/tag') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Tag
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/tag/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/tag/create')}}" class="nav-link {{ request()->is('admin/tag/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/tag') ? 'active' : '' }}">
                <a href="{{URL::to('admin/tag')}}" class="nav-link {{ request()->is('admin/tag') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>

         
          <li class="nav-item
            {{ request()->is('admin/post/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/post') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Blog Post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/post/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/post/create')}}" class="nav-link {{ request()->is('admin/post/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/post') ? 'active' : '' }}">
                <a href="{{URL::to('admin/post')}}" class="nav-link {{ request()->is('admin/post') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>
          
  

          <li class="nav-item
            {{ request()->is('admin/banner/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/banner') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Home Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/banner/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/banner/create')}}" class="nav-link {{ request()->is('admin/banner/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/banner') ? 'active' : '' }}">
                <a href="{{URL::to('admin/banner')}}" class="nav-link {{ request()->is('admin/banner') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item
            {{ request()->is('admin/coupon/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/coupon') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Coupon
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/coupon/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/coupon/create')}}" class="nav-link {{ request()->is('admin/coupon/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/coupon') ? 'active' : '' }}">
                <a href="{{URL::to('admin/coupon')}}" class="nav-link {{ request()->is('admin/coupon') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"  style="margin-left: 21px;"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item
            {{ request()->is('admin/slidertext/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/slidertext') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Slider text
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/slidertext/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/slidertext/create')}}" class="nav-link {{ request()->is('admin/slidertext/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/slidertext') ? 'active' : '' }}">
                <a href="{{URL::to('admin/slidertext')}}" class="nav-link {{ request()->is('admin/slidertext') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item
            {{ request()->is('admin/office/create') ? 'menu-open' : '' }}
            {{ request()->is('admin/office') ? 'menu-open' : '' }}
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Office
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('admin/office/create') ? 'active' : '' }}">
                <a href="{{URL::to('admin/office/create')}}" class="nav-link {{ request()->is('admin/office/create') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item {{ request()->is('admin/office') ? 'active' : '' }}">
                <a href="{{URL::to('admin/office')}}" class="nav-link {{ request()->is('admin/office') ? 'active' : '' }}"  style="margin-left: 21px;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>