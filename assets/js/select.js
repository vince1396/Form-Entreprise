$(document).ready(function(){
$(document).change(function(){
    var valTemp = $("#cInteret option:selected").val();
    console.log("valeur du select 1 = "+valTemp);
    var valTemp2 = $("#cInteret_2 option:selected").val();
    console.log("valeur du select 2 = "+valTemp2);
    var valTemp3 = $("#cInteret_3 option:selected").val();
    console.log("valeur du select 3 = "+valTemp3);
    var valTemp4 = $("#cInteret_4 option:selected").val();
    console.log("valeur du select 4 = "+valTemp4);
});

$("#cInteret").change(function(){
            console.log("hi");
        var valForm = $("#cInteret option:selected").val();
        console.log(valForm);

        if(valForm == 0){
            $(".groupe-num-1").css({
                "display" : "none"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "none"
            });
        }
        
        if(valForm == 1){
            $(".groupe-num-1").css({
                "display" : "block"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "none"
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
            $(".groupe-num-2").css({
                "display" : "block"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "none"
            });
        }
        if(valForm == 3){
            $(".groupe-num-1").css({
                "display" : "none"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "block"
            });
            $(".groupe-num-4").css({
                "display" : "none"
            });
            
        }
        if(valForm == 4){
            $(".groupe-num-1").css({
                "display" : "none"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "block"
            });
        }
    });
    $("#cInteret2").change(function(){
            console.log("hi");
        var valForm = $("#cInteret2 option:selected").val();
        console.log(valForm);

        if(valForm == 0){
            $(".groupe-num-1").css({
                "display" : "none"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "none"
            });
        }
        
        if(valForm == 1){
            $(".groupe-num-1").css({
                "display" : "block"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "none"
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
            $(".groupe-num-2").css({
                "display" : "block"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "none"
            });
        }
        if(valForm == 3){
            $(".groupe-num-1").css({
                "display" : "none"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "block"
            });
            $(".groupe-num-4").css({
                "display" : "none"
            });
            
        }
        if(valForm == 4){
            $(".groupe-num-1").css({
                "display" : "none"
            });
            $(".groupe-num-2").css({
                "display" : "none"
            });
            $(".groupe-num-3").css({
                "display" : "none"
            });
            $(".groupe-num-4").css({
                "display" : "block"
            });
        }
    });
    
});