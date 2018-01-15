$(document).ready(function(){
    

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