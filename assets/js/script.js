$(document).ready(function(){

    
    //hide and seek

$(".ex-enable").click(function(){
   if(this.checked){
       console.log("ça marche");
       $(".groupe-num-1").css({
           "display" : "block"
       });
       $(".groupe-num-ss1").css({
           "display" : "none"
       });
       $(".groupe-num-ss2").css({
           "display" : "none"
       });
   }else{
       $(".groupe-num-1").css({
           "display" : "none"
       });
   } 
});

$(".ex-enable-ss1").click(function(){
   if(this.checked){
       console.log("ça marche");
       $(".groupe-num-ss1").css({
           "display" : "block"
       });
   }else{
       $(".groupe-num-ss1").css({
           "display" : "none"
       });
   } 
});
    
$(".ex-enable-ss2").click(function(){
   if(this.checked){
       console.log("ça marche");
       $(".groupe-num-ss2").css({
           "display" : "block"
       });
   }else{
       $(".groupe-num-ss2").css({
           "display" : "none"
       });
   } 
});    
    
$(".ex-enable2").click(function(){
   if(this.checked){
       console.log("ça marche");
       $(".groupe-num-3").css({
           "display" : "block"
       });
   }else{
       $(".groupe-num-3").css({
           "display" : "none"
       });
   } 
});        
    $("#cInteret").change(function(){
            console.log("hi");
        var valForm = $("#cInteret option:selected").val();
        console.log(valForm);
        if(valForm == 0){
            $(".groupe-num-1").css({
                "display" : "none"
            });
        }
        
        if(valForm == 1){
            $(".groupe-num-1").css({
                "display" : "block"
            });
            $(".groupe-num-ss1").css({
           "display" : "none"
           });
           $(".groupe-num-ss2").css({
               "display" : "none"
           });
        }
        if(valForm == 2){
            $(".groupe-num-1").css({
                "display" : "none"
            });
        }
        if(valForm == 3){
            $(".groupe-num-1").css({
                "display" : "none"
            });
        }
        if(valForm == 4){
            $(".groupe-num-1").css({
                "display" : "none"
            });
        }
    });
    
    $("#sBuyRent").change(function(){
            console.log("hi2");
        var valForm = $("#sBuyRent option:selected").val();
        console.log(valForm);
        if(valForm == 0){
            $(".groupe-num-ss1").css({
                "display" : "none"
            });
            $(".groupe-num-ss2").css({
                "display" : "none"
            });
        }
        
        if(valForm == 1){
            $(".groupe-num-ss1").css({
           "display" : "block"
           });
           $(".groupe-num-ss2").css({
               "display" : "none"
           });
        }
        if(valForm == 2){
            $(".groupe-num-ss1").css({
                "display" : "none"
            });
            $(".groupe-num-ss2").css({
                "display" : "block"
            });
        }
    });


    
    //dupliquer
    
    $('#duplicatebtn').click(function(e) {
                console.log("hi");
                e.preventDefault();
                var clone = $('#duplicate').clone().attr('id', '').removeClass('hidden');
                $('#duplicate').before(clone);
                $(".removebtn").attr('id','removebutton');
        
            });
    //supprimer
    $('#removebutton').click(function(e) {
                console.log("hi enlevage");
                e.preventDefault();
               
            });
             
   
    $('#btnAdd').click( function() {
         
        $('#btnDel').removeAttr('disabled').button('enable');	// enable the "del" button
        
        // how many "duplicatable" input fields we currently have
        var num = $('.clonedInput').length;	
        
        // the numeric ID of the new input field being added	
        var newNum	= new Number(num + 1);		
        var newElem = $('#input' + num ).clone().attr('id', 'input' + newNum);
                                 
        newElem.children(':first').attr( 'id', 'name' + newNum ).attr('name', 'name_label[]');
        $('#input' + num).after(newElem);
        
        
        // business rule: limit the number of fields to 5
        if (newNum == 5) {
             $('#btnAdd' ).attr('disabled', 'disabled').button('disable');
             $('#btnAdd').parent().find('.ui-btn-text').text('maximum fields reached');
        }                        
    });

    $( '#btnDel' ).click( function() {
        // how many "duplicatable" input fields we currently have           
        var num = $( '.clonedInput' ).length;	
        
        // remove the last element	
        $('#input' + num ).remove();
        
        // enable the "add" button, since we've removed one				
        $('#btnAdd').removeAttr('disabled').button('enable');	
        $('#btnAdd').parent().find('.ui-btn-text').text('add another name');
        
        // if only one element remains, disable the "remove" button
        if ( num-1 == 1 )
        $('#btnDel' ).attr('disabled', 'disabled').button('disable');

    });  
       
    
});