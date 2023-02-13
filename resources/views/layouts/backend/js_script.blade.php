<script>

@if (Session::has('message'))
       var type = "{{ Session::get('alert-type', 'info') }}"
       switch(type){
          case 'info':

            toastr.options.timeOut = 5000000000;
            toastr.info("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();
             break;
          case 'success':

            toastr.options.timeOut = 5000000000;
            toastr.success("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

             break;
          case 'warning':

            toastr.options.timeOut = 5000000000;
            toastr.warning("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

             break;
          case 'error':

            toastr.options.timeOut = 5000000000;
            toastr.error("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();
             
             break;
       }
     @endif

     $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });        
        $("#example2").DataTable({
          "responsive": true,
          "autoWidth": false,
        });        
        $("#example3").DataTable({
          "responsive": true,
          "autoWidth": false,
        });        
        $("#example4").DataTable({
          "responsive": true,
          "autoWidth": false,
        });

      });
</script>



<script type="text/javascript">
		$( document ).ready(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

		    $('#tag_id').select2({
		      placeholder: 'Select Tag'
		    })

        $('#shop_type_id').select2({
          placeholder: 'Select Shop'
        })

        $('#compatible_product_ids').select2({
          placeholder: 'Compatible Product Name'
        })

        $('.stock_status').select2({
          placeholder: 'Select Stock Status'
        })



      });  


    //Make Slug Script
		function Makeslug(){
		    var post_title = $('#title').val();
		    Text = post_title.toLowerCase();
		    Text = post_title.replace(/[^a-zA-Z0-9]+/g,'_');
		    $("#slug").val(Text);  
		}

    //Add Summernote Script
    $(document).ready(function() {
      $('.summernote').summernote();
    });


    //Get Sub Category Script
    var token =  $("input[name=_token]").val();
    function GetSubCategory(val){
      var datastr = "category_id=" + val  + "&token="+token;
      $.ajax({
        type: "post",
        url: "<?php echo route('admin/get-subcategory');?>",
        data:datastr,
        cache:false,
        beforeSend: function() {
            // setting a timeout
            // $('.loading_image').show();

        },

        success:function (data) {  
          console.log(data);  
          console.log('here');
          $('#subcategory_id').html(data);
          $('#pro_sub_category_id').empty();
          $('#pro_pro_category_id').empty();
          // $('.loading_image').hide();
        },
        error: function (jqXHR, status, err) {
          alert(status);
          console.log(err);
        },
        complete: function () {
          // alert("Complete");
        }
      });
    }

    //Get Pro Sub Category Script
    var token =  $("input[name=_token]").val();
    function GetProSubCategory(val){
      var datastr = "sub_category_id=" + val  + "&token="+token;
      $.ajax({
        type: "post",
        url: "<?php echo route('admin/get-pro-sub-category');?>",
        data:datastr,
        cache:false,
        beforeSend: function() {
            // setting a timeout
            // $('.loading_image').show();

        },

        success:function (data) {  
          console.log(data);          
          $('#pro_sub_category_id').html(data);
          $('#pro_pro_category_id').empty();
          // $('.loading_image').hide();
        },
        error: function (jqXHR, status, err) {
          alert(status);
          console.log(err);
        },
        complete: function () {
          // alert("Complete");
        }
      });
    }

    //Get Pro Pro Category Script
    var token =  $("input[name=_token]").val();
    function GetProproCategory(val){
      var datastr = "pro_sub_category_id=" + val  + "&token="+token;
      $.ajax({
        type: "post",
        url: "<?php echo route('admin/get-pro-pro-category');?>",
        data:datastr,
        cache:false,
        beforeSend: function() {
            // setting a timeout
            // $('.loading_image').show();

        },

        success:function (data) {  
          console.log(data);          
          $('#pro_pro_category_id').html(data);
          
          // $('.loading_image').hide();
        },
        error: function (jqXHR, status, err) {
          alert(status);
          console.log(err);
        },
        complete: function () {
          // alert("Complete");
        }
      });
    }

    $(document).on('click', '.add', function(){
      var html = '';
      html += '<tr>';
      html += '<td><input type="file" name="product_image[]" class="form-control" /></td>';
      html += '<td><input type="text" class="form-control" name="product_image_alt[]" ></td>';
      html += '<td><textarea name="product_image_des[]" class="form-control" cols="30" rows="2"></textarea></td>';
      html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
    //   $('#productImage').append(html);
        const element = $(this).parents('tbody')
        $(element).append(html);
    });
    
    
  $(document).on('click', '.freeItemImage', function() {
    var html = '';
    html += '<tr>';
    html += '<td><input type="file" name="free_item_image[]" class="form-control" /></td>';
    html += '<td><input type="text" name="free_item_title[]" class="form-control" /></td>';
    html += '<td><input type="text" class="form-control" name="free_item_alt[]" ></td>';
    html += '<td><textarea name="free_item_des[]" class="form-control" cols="30" rows="2"></textarea></td>';
    html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
    // $('#freeItemImage').append(html);
    const element = $(this).parents('tbody')
    $(element).append(html);
  });
    
    

    $(document).on('click', '.addEmi', function(){
      var html = '';
      html += '<tr>';
      html += '<td><input type="number" name="emi_month[]" class="form-control"/></td>';
      html += '<td><input type="text" class="form-control" name="emi_price[]"></td>';
      html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
      $('#productEMI').append(html);
    });
    
    var inner = 0;
     $(document).on('click', '.addHightlights', function(){
      var html = '';
      html += '<tr>';
      html += '<td><input id="si_'+inner+'" type="text" class="form-control" name="highlights[]"></td><td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span> </button><span class="btn btn-primary btn-sm ml-2 remove" onclick="setHighlight('+inner+')">Set</span>'+
        '</td>';
      html += '</tr>';
      $('#productHightlights').append(html);
      inner++;
    });
    
    function setHighlight(id){
      var hightlightValue = $("#si_"+id).val()
      var ul = `<li class="ui-state-default p-3 ui-sortable-handle" style="display: flex;background-color: rgba(0,0,0,.05);">
                                          <input type="text" style="width: 60%;" class="form-control" name="highlights[]" value="${hightlightValue}">
                                          <a onclick="delete_row(this)" href="javacript:void()" type="button" class="btn btn-danger btn-sm ml-4">
                                             <i class="fa fa-minus-circle text-white"></i>
                                           </a>
                                          <button id="addHightlights" style="margin-left:10px;" type="button" class="btn btn-success btn-sm addHightlights"><i class="fa fa-plus-circle"></i> </button>
                                       </li>`
      $("#sortable").append(ul);

    }

    function setFaq(id){
      // console.log(id);
      var html = `<tr>
                    <td>
                    <input type="text" class="form-control" name="faq[`+id+`][question]">
                    <textarea rows="3" class="form-control binaryTinyMCE" name="faq[`+id+`][answer]"></textarea></td>
                    </td>
                    <td><input type="number" class="form-control" name="faq[`+id+`][point]"></td>
                    <td></td>
                  </tr>`;
      $('#productFaq').append(html);
      id++;
      $("#faqPlus").attr('onclick','setFaq('+id+');');
      tinymce.init({
        selector: 'textarea.binaryTinyMCE',
        height: 500,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'link ' + 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
      });
    }
    
    function removeFaq(id){
      $("#faqrow"+id).remove();
    }

    $(document).on('click', '.term', function(){
      var html = '';
      html += '<tr>';
      html += '<td><input type="text" name="terms[]" class="form-control" /></td>';
      html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
      $('#productTerm').append(html);
    });

    $(document).on('click', '.remove', function(){
      $(this).closest('tr').remove();
    });

      $('#brand_id').select2({
        placeholder: 'Select Brand'
      });

  function Checked() {
    val = $('.show_on_top').val();
    if (val == 0) {
      val = $('.show_on_top').val(1);
    }
    if (val == 1) {
      val = $('.show_on_top').val(0);
    }
  }

    // $(document).ready(function() {
    //     $('#description').summernote();
    // });
    
    //ck editor remove
     CKEDITOR.replace( 'description' );
    
    // $(document).ready(function() {
    //     $('#product_heighlight').summernote();
    // });

    //ck editor remove
    CKEDITOR.replace( 'product_heighlight' );
    
    // $(document).ready(function() {
    //     $('#specification').summernote();
    // });
    
    //ck editor remove
    CKEDITOR.replace( 'specification' );  
    CKEDITOR.replace( 'product_summery' );  
    CKEDITOR.replace( 'category_summary' ); 
   
        
        
        
    //myFonts = ['Aclonica', 'Allan', 'Allerta', 'Allerta Stencil', 'Amaranth', 'Angkor', 'Annie Use Your Telescope', 'Anonymous Pro', 'Anton', 'Architects Daughter', 'Arimo', 'Artifika', 'Arvo', 'Astloch', 'Bangers', 'Battambang', 'Bayon', 'Bentham', 'Bevan', 'Bigshot One', 'Bokor', 'Brawler', 'Buda', 'Cabin', 'Cabin Sketch', 'Calligraffitti', 'Candal', 'Cantarell', 'Cardo', 'Carter One', 'Caudex', 'Chenla', 'Cherry Cream Soda', 'Chewy', 'Coda', 'Coda Caption', 'Coming Soon', 'Content', 'Copse', 'Corben', 'Cousine', 'Covered By Your Grace', 'Crafty Girls', 'Crimson Text', 'Crushed', 'Cuprum', 'Damion', 'Dancing Script', 'Dangrek', 'Dawning of a New Day', 'Didact Gothic', 'Droid Sans', 'Droid Sans Mono', 'Droid Serif', 'EB Garamond', 'Expletus Sans', 'Fontdiner Swanky', 'Francois One', 'Freehand', 'GFS Didot', 'GFS Neohellenic', 'Geo', 'Goudy Bookletter 1911', 'Gruppo', 'Handlee', 'Hanuman', 'Holtwood One SC', 'Homemade Apple', 'IM Fell DW Pica', 'IM Fell DW Pica SC', 'IM Fell Double Pica', 'IM Fell Double Pica SC', 'IM Fell English', 'IM Fell English SC', 'IM Fell French Canon', 'IM Fell French Canon SC', 'IM Fell Great Primer', 'IM Fell Great Primer SC', 'Inconsolata', 'Indie Flower', 'Irish Grover', 'Josefin Sans', 'Josefin Slab', 'Judson', 'Jura', 'Just Another Hand', 'Just Me Again Down Here', 'Kenia', 'Khmer', 'Koulen', 'Kranky', 'Kreon', 'Kristi', 'Lato', 'League Script', 'Lekton', 'Limelight', 'Lobster', 'Lora', 'Luckiest Guy', 'Maiden Orange', 'Mako', 'Maven Pro', 'Meddon', 'MedievalSharp', 'Megrim', 'Merriweather', 'Metal', 'Metrophobic', 'Michroma', 'Miltonian', 'Miltonian Tattoo', 'Molengo', 'Monofett', 'Moul', 'Moulpali', 'Mountains of Christmas', 'Muli', 'Neucha', 'Neuton', 'News Cycle', 'Nobile', 'Nova Cut', 'Nova Flat', 'Nova Mono', 'Nova Oval', 'Nova Round', 'Nova Script', 'Nova Slim', 'Nova Square', 'Nunito', 'OFL Sorts Mill Goudy TT', 'Odor Mean Chey', 'Old Standard TT', 'Open Sans', 'Open Sans Condensed', 'Orbitron', 'Oswald', 'Over the Rainbow', 'PT Sans', 'PT Sans Caption', 'PT Sans Narrow', 'PT Serif', 'PT Serif Caption', 'Pacifico', 'Paytone One', 'Permanent Marker', 'Philosopher', 'Play', 'Playfair Display', 'Podkova', 'Preahvihear', 'Puritan', 'Quattrocento', 'Quattrocento Sans', 'Radley', 'Raleway', 'Reenie Beanie', 'Rock Salt', 'Rokkitt', 'Ruslan Display', 'Schoolbell', 'Shanti', 'Siemreap', 'Sigmar One', 'Six Caps', 'Slackey', 'Smythe', 'Sniglet', 'Special Elite', 'Sue Ellen Francisco', 'Sunshiney', 'Suwannaphum', 'Swanky and Moo Moo', 'Syncopate', 'Tangerine', 'Taprom', 'Tenor Sans', 'Terminal Dosis Light', 'The Girl Next Door', 'Tinos', 'Ubuntu', 'Ultra', 'UnifrakturCook', 'UnifrakturMaguntia', 'Unkempt', 'VT323', 'Vibur', 'Vollkorn', 'Waiting for the Sunrise', 'Wallpoet', 'Walter Turncoat', 'Wire One', 'Barlow', 'Yanone Kaffeesatz'];
    
    //config.font_names = 'serif;sans serif;monospace;cursive;fantasy';
    
    // for(var i = 0; i<myFonts.length; i++){
    //             config.font_names = config.font_names+';'+myFonts[i];
    //             myFonts[i] = 'http://fonts.googleapis.com/css?family='+myFonts[i].replace(' ','+');
    // }
    //config.contentsCss = ['https://binarylogic.biz/public/backend/ckeditor/contents.css'].concat(myFonts);      
// config.contentsCss = ['/ckeditor/contents.css'].concat(myFonts);        
        

(function ($) {

  $(document).ready(function () {

    $('[data-charcount="true"]').charcount({
        
        errFontColor:'red',
        okFontColor:'green',
        FontWeight:'bold',
        NumOfCharOfAlert: 20,
        isAlwaysOn:true
        
        
    });

  });

})(jQuery);

        

        

</script>