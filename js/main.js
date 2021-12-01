// Example script to toggle checkmarks
let selectedCategories=[];
$(document).on('click', '.check', function(event) {
  event.preventDefault();
  $(this).toggleClass('item-checked'); 
  if($(this).hasClass('item-checked')){
      if(selectedCategories.indexOf($(this).val()) > -1){
      }else{
        selectedCategories =[...selectedCategories ,$(this).val()];        
      }   
    console.log(selectedCategories)
  }else{
    var index = selectedCategories.indexOf($(this).val());
    console.log(index)
    if (index !== -1) {
      
      selectedCategories=[...selectedCategories.filter((_,categoryIndex)=> 
         index !== categoryIndex

      )]
      
    }
    console.log(selectedCategories)
  }
  

});

$(document).ready(function () {

  $("#product-order").submit(function (e) {

    
$("#btnSubmit").attr("disabled", true);
});
});