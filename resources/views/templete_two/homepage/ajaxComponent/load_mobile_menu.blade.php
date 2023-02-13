        <div class="Offcanvas_menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="canvas_open">
                            <span>
                            <svg width="20px" height="20px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="_x37_24-_equal__x2C__equal_sign___x2C__sign__x2C_">
                                  <g>
                                    <line style="fill:none;stroke:#000000;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="26.7" x2="486.25" y1="30.24" y2="30.24" />
                                    <line style="fill:none;stroke:#000000;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="26.7" x2="486.25" y1="181.044" y2="181.044" />
                                    <line style="fill:none;stroke:#000000;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="26.7" x2="486.25" y1="331.848" y2="331.848" />
                                    <line style="fill:none;stroke:#000000;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="26.7" x2="486.25" y1="482.714" y2="482.714" />
                                  </g>
                                </g>
                                <g id="Layer_1"/>
                            </svg>
                        </span>
                        </div>
                        @include('templete_two.layouts.mobile_nav')
                    </div>
                </div>
            </div>
        </div>
     <!--Offcanvas menu area end-->
     
     <script>
         
    /*---canvas menu activation---*/
    $('.canvas_open').on('click', function(){
        $('.Offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
    });
    
    $('.canvas_close,.off_canvars_overlay').on('click', function(){
        $('.Offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
    });
    
    
    /*---Off Canvas Menu---*/
    var $offcanvasNav = $('.offcanvas_main_menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">'+
                    '<g>'+
                        '<path fill="none" d="M0 0h24v24H0z"></path>'+
                        '<path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z"></path>'+
                   '</g>'+
               '</svg></span>');
    
    $offcanvasNavSubMenu.slideUp();
    
    $offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.siblings('ul').slideUp('slow');
            }else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if( $this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/) ){
            $this.parent().toggleClass('menu-open');
        }else if( $this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/) ){
            $this.toggleClass('menu-open');
        }
    });
         
         
         
     </script>