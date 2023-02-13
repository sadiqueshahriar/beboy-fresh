@if($popups)
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <a href="{{ $popups->link }}" target="_blank">
        <picture>
            <source srcset="{{ asset('images/popup/mobile-popup-'.$popups->image) }}" media="(max-width: 600px)">
            <img src="{{ asset('images/popup/desktop-popup-'.$popups->image) }}" alt="{{$popups->title}}">
        </picture>
        
    </a>
  </div>
</div> 

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 11; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding:0;
  border: 1px solid #888;
  max-width: 660px;
}

@media only screen and (max-width: 600px) {
    .modal-content {
       max-width:320px !important;
    }

}

/* The Close Button */
.close {
    color: #ffffff;
    float: right;
    font-size: 28px;
    font-weight: bold;
    display: inline-block;
    position: absolute;
    right: 0px;
    background: #f00;
    padding: 0px 14px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<!-- \ The Modal -->
@endif
