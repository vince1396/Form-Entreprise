$(document).ready(function() {
    // $('#duplicatebtn').click(function (e) {
    //         console.log("hi");
    //         e.preventDefault();
    //         var clone = $('#duplicate').clone().attr('id', '').removeClass('hidden');
    //         $('#duplicate').before(clone);
    //         $(".removebtn").attr('id', 'removebutton');
    //         var numberItems = $('.countForDuplicate').length;
    //     if(numberItems == 2){
    //         $("#sBuyRent").children().removeAttr('id','sBuyRent');
    //     }
    //         console.log(numberItems);
    //     });

    $('#btnAdd').click(function () {
        var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added
        var incrementGroupeNumSS = new Number(num + newNum);
        var incrementGroupeNumSS2 = new Number(num + newNum +1);
        // create the new element via clone(), and manipulate it's ID using newNum value
        var newElem = $('#divInput' + num).clone().attr('id', 'divInput' + newNum);

        // clear input value for cloned items
        newElem.find('input,textarea').val('');
        newElem.find('div[id^="sBuyRent"]').removeAttr('id checked').attr('id','sBuyRent_'+num+'');
        newElem.find('input[name^="achat["]').removeAttr('name checked').attr('name','achat['+num+']').prop('checked',false);
        newElem.find('input[name^="achat["]:even').attr({value:'1', checked:'checked'}).prop('checked',true);
        newElem.find('input[name^="achat["]:odd').attr('value','2');
        newElem.find('input[name^="prelevement"]').removeAttr('name checked').attr('name','prelevement['+num+']').prop('checked',false);
        newElem.find('input[name^="prelevement"]:even').attr({value:'1',checked:'checked'}).prop('checked',true);
        newElem.find('input[name^="prelevement"]:odd').attr('value','2');
        newElem.find('div[class^="groupe-num-ss"]:even').removeAttr('class style').attr('class','groupe-num-ss'+incrementGroupeNumSS+'').addClass('width-log');
        newElem.find('div[class^="groupe-num-ss"]:odd').removeAttr('class style').attr('class','groupe-num-ss'+incrementGroupeNumSS2+'');
        newElem.find('input[name^=countForAddProjet]').removeAttr('value').attr('value',num).val(num);
        newElem.find('h3.title_bureautique2').replaceWith('<h3 class="title_bureautique2">Bureautique '+newNum+'');
        console.log(newNum);
        console.log(incrementGroupeNumSS);
        console.log(incrementGroupeNumSS2);

        
//        newElem.find(':input').each(function () {
//            $(this).attr('id', $(this).attr('id').replace(/\d+/, newNum));
//            $(this).attr('name', $(this).attr('name').replace(/\d+/, newNum));
//        });

        // insert the new element after the last "duplicatable" input field
        $('#divInput' + num).after(newElem);

        // enable the "remove" button
        $('#btnDel').attr('disabled', '');



        // business rule: you can only add 5 names
        if (newNum == 5) {
            $('#btnAdd').attr('disabled', 'disabled');
        } else {
            $('#btnAdd').removeAttr('disabled', 'disabled');
        }
        if (newNum > 1)
            $('#btnDel').removeAttr('disabled', 'disabled');
    });
    $(document).change(function(){
        $("#sBuyRent").change(function () {
            console.log("hi2");
//        var valForm = $("input[name=achat]:checked").val();
//        console.log(valForm);
            var n = $("input[name^='achat[0]']:checked").length;
            var array = $("input[name^='achat[0]']:checked");
            for (i = 0; i < n; i++) {
                // use .eq() within a jQuery object to navigate it by Index
                var card_value = array.eq(i).val(); // I'm assuming you wanted -name-
                // otherwise it'd be .eq(i).val(); (if you wanted the text value)
            }
            if (card_value == '1') {
                console.log('valForm = 1');
                $(".groupe-num-ss1").css({
                    "display": "block"
                });
                $(".groupe-num-ss2").css({
                    "display": "none"
                });
            }
            if (card_value == '2') {
                console.log('valForm = 2');
                $(".groupe-num-ss1").css({
                    "display": "none"
                });
                $(".groupe-num-ss2").css({
                    "display": "block"
                });
            }
        });
        $('input[name^="achat[1]"]').change(function() {
            console.log('le change est bien reçu');
            var nope = $("input[name^='achat[1]']:checked").length;
            var numeroduradio = $("input[name^='achat[1]']:checked");
            for (i = 0; i < nope; i++) {
                // use .eq() within a jQuery object to navigate it by Index
                var card_value10 = numeroduradio.eq(i).val(); // I'm assuming you wanted -name-
                // otherwise it'd be .eq(i).val(); (if you wanted the text value)
            }
            console.log('card_value10 = '+card_value10);
            if (card_value10 == '1') {
                console.log('valForm = 1');
                $(".groupe-num-ss3").css({
                    "display": "block"
                });
                $(".groupe-num-ss4").css({
                    "display": "none"
                });
            }
            else if (card_value10 == '2') {
                console.log('valForm = 2');
                $(".groupe-num-ss3").css({
                    "display": "none"
                });
                $(".groupe-num-ss4").css({
                    "display": "block"
                });
            }

        });

        $('input[name^="achat[2]"]').change(function() {
            console.log('le change est bien reçu');
            var nope2 = $("input[name^='achat[2]']:checked").length;
            var numeroduradio2 = $("input[name^='achat[2]']:checked");
            for (i = 0; i < nope2; i++) {
                // use .eq() within a jQuery object to navigate it by Index
                var card_value11 = numeroduradio2.eq(i).val(); // I'm assuming you wanted -name-
                // otherwise it'd be .eq(i).val(); (if you wanted the text value)
            }
            console.log('card_value11 = '+card_value11);
            if (card_value11 == '1') {
                console.log('valForm = 1');
                $(".groupe-num-ss5").css({
                    "display": "block"
                });
                $(".groupe-num-ss6").css({
                    "display": "none"
                });
            }
            else if (card_value11 == '2') {
                console.log('valForm = 2');
                $(".groupe-num-ss5").css({
                    "display": "none"
                });
                $(".groupe-num-ss6").css({
                    "display": "block"
                });
            }

        });
        $('input[name^="achat[3]"]').change(function() {
            console.log('le change est bien reçu');
            var nope3 = $("input[name^='achat[3]']:checked").length;
            var numeroduradio3 = $("input[name^='achat[3]']:checked");
            for (i = 0; i < nope3; i++) {
                // use .eq() within a jQuery object to navigate it by Index
                var card_value12 = numeroduradio3.eq(i).val(); // I'm assuming you wanted -name-
                // otherwise it'd be .eq(i).val(); (if you wanted the text value)
            }
            console.log('card_value12 = '+card_value12);
            if (card_value12 == '1') {
                console.log('valForm = 1');
                $(".groupe-num-ss7").css({
                    "display": "block"
                });
                $(".groupe-num-ss8").css({
                    "display": "none"
                });
            }
            else if (card_value12 == '2') {
                console.log('valForm = 2');
                $(".groupe-num-ss7").css({
                    "display": "none"
                });
                $(".groupe-num-ss8").css({
                    "display": "block"
                });
            }

        });
        $('input[name^="achat[4]"]').change(function() {
            console.log('le change est bien reçu');
            var nope4 = $("input[name^='achat[4]']:checked").length;
            var numeroduradio4 = $("input[name^='achat[4]']:checked");
            for (i = 0; i < nope4; i++) {
                // use .eq() within a jQuery object to navigate it by Index
                var card_value13 = numeroduradio4.eq(i).val(); // I'm assuming you wanted -name-
                // otherwise it'd be .eq(i).val(); (if you wanted the text value)
            }
            console.log('card_value13 = '+card_value13);
            if (card_value13 == '1') {
                console.log('valForm = 1');
                $(".groupe-num-ss9").css({
                    "display": "block"
                });
                $(".groupe-num-ss10").css({
                    "display": "none"
                });
            }
            else if (card_value13 == '2') {
                console.log('valForm = 2');
                $(".groupe-num-ss9").css({
                    "display": "none"
                });
                $(".groupe-num-ss10").css({
                    "display": "block"
                });
            }

        });
    });


});