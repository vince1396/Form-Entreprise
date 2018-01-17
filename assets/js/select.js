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
    
    if ((valTemp !== '1' ) && (valTemp2 !== '1' ) && (valTemp3 !== '1') && (valTemp4 !== '1')){
        $("#cInteret option[value='1']").removeAttr('disabled');
        $("#cInteret_2 option[value='1']").removeAttr('disabled');
        $("#cInteret_3 option[value='1']").removeAttr('disabled');
        $("#cInteret_4 option[value='1']").removeAttr('disabled');
    }
    if ((valTemp !== '2' ) && (valTemp2 !== '2' ) && (valTemp3 !== '2') && (valTemp4 !== '2')){
        $("#cInteret option[value='2']").removeAttr('disabled');
        $("#cInteret_2 option[value='2']").removeAttr('disabled');
        $("#cInteret_3 option[value='2']").removeAttr('disabled');
        $("#cInteret_4 option[value='2']").removeAttr('disabled');
    }
    if ((valTemp !== '3' ) && (valTemp2 !== '3' ) && (valTemp3 !== '3') && (valTemp4 !== '3')){
        $("#cInteret option[value='3']").removeAttr('disabled');
        $("#cInteret_2 option[value='3']").removeAttr('disabled');
        $("#cInteret_3 option[value='3']").removeAttr('disabled');
        $("#cInteret_4 option[value='3']").removeAttr('disabled');
    }
    if ((valTemp !== '4' ) && (valTemp2 !== '4' ) && (valTemp3 !== '4') && (valTemp4 !== '4')){
        $("#cInteret option[value='4']").removeAttr('disabled');
        $("#cInteret_2 option[value='4']").removeAttr('disabled');
        $("#cInteret_3 option[value='4']").removeAttr('disabled');
        $("#cInteret_4 option[value='4']").removeAttr('disabled');
    }
    
    if (valTemp !== '0' ){
        $("#cInteret_2 option[value='"+valTemp+"']").attr('disabled','disabled');
        $("#cInteret_3 option[value='"+valTemp+"']").attr('disabled','disabled');
        $("#cInteret_4 option[value='"+valTemp+"']").attr('disabled','disabled');
    }
    if (valTemp2 !== '0' ){
        $("#cInteret option[value='"+valTemp2+"']").attr('disabled','disabled');
        $("#cInteret_3 option[value='"+valTemp2+"']").attr('disabled','disabled');
        $("#cInteret_4 option[value='"+valTemp2+"']").attr('disabled','disabled');
    }
    if (valTemp3 !== '0' ){
        $("#cInteret_2 option[value='"+valTemp3+"']").attr('disabled','disabled');
        $("#cInteret option[value='"+valTemp3+"']").attr('disabled','disabled');
        $("#cInteret_4 option[value='"+valTemp3+"']").attr('disabled','disabled');
    }
    if (valTemp4 !== '0' ){
        $("#cInteret_2 option[value='"+valTemp4+"']").attr('disabled','disabled');
        $("#cInteret_3 option[value='"+valTemp4+"']").attr('disabled','disabled');
        $("#cInteret option[value='"+valTemp4+"']").attr('disabled','disabled');
    }
    
    if ((valTemp == '0') && (valTemp == '0') && (valTemp3 == '0') && (valTemp4 == '0')){
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
    if ((valTemp == '1') || (valTemp2 == '1') || (valTemp3 == '1') || (valTemp4 == '1')){
        $(".groupe-num-1").css({
                "display" : "block"
            });
    }else{
        $(".groupe-num-1").css({
                "display" : "none"
            }); 
    }
    if ((valTemp == '2') || (valTemp2 == '2') || (valTemp3 == '2') || (valTemp4 == '2')){
        $(".groupe-num-2").css({
                "display" : "block"
            });
    }else{
        $(".groupe-num-2").css({
                "display" : "none"
            });
    }
    if ((valTemp == '3') || (valTemp2 == '3') || (valTemp3 == '3') || (valTemp4 == '3')){
        $(".groupe-num-3").css({
                "display" : "block"
            });
    }else{
        $(".groupe-num-3").css({
                "display" : "none"
            });
    }
    if ((valTemp == '4') || (valTemp2 == '4') || (valTemp3 == '4') || (valTemp4 == '4')){
        $(".groupe-num-4").css({
                "display" : "block"
            });
    }else{
        $(".groupe-num-4").css({
                "display" : "none"
            });
    }
    
});

    
});