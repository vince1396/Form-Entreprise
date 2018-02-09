$(document).ready(function () {

        $("#sortTable_1").tablesorter({
            dateFormat: 'pt',
            headers: {
                4: {
                    // disable it by setting the property sorter to false
                    sorter: false
                }
            }
        });
        $("#sortTable_2").tablesorter({
            dateFormat: 'pt',
            headers: {
                4: {
                    // disable it by setting the property sorter to false
                    sorter: false
                }
            }
        });
        $("#sortTable_3").tablesorter({
            dateFormat: 'pt',
            headers: {
                5: {
                    // disable it by setting the property sorter to false
                    sorter: false
                }
            }
        });
        $("#sortTable_4").tablesorter({
            dateFormat: 'pt',
            headers: {
                3: {
                    // disable it by setting the property sorter to false
                    sorter: false
                }
            }
        });
        $("#sortTable_5").tablesorter({
            dateFormat: 'pt',
            headers: {
                4: {
                    // disable it by setting the property sorter to false
                    sorter: false
                }
            }
        });
    $.noConflict();

    //modal
    $(".parking-scheme-reservation").click(function() {
        $("#modal-text").html("Voulez-vous supprimer cette fiche ?");
        $("#yes").attr("href", "index.php?p=historique&delete=" + $(this).attr("id"));
        $("#myalertbox").modal({
            "keyboard": true,
            "show": true
        });
    });
    $(".parking-scheme-reservation_2").click(function() {
        $("#modal-text").html("Voulez-vous supprimer cette fiche ?");
        $("#yes").attr("href", "index.php?p=consulterChef&delete=" + $(this).attr("id"));
        $("#myalertbox").modal({
            "keyboard": true,
            "show": true
        });
    });
    $(document).click(function() {
        if (this.id != 'myalertbox') {
            $("#myalertbox").modal({
                "keyboard": true,
                "show": false
            });
        }
    });
    //fin modal

    //

    //

    $('.editValues').click(function () {
        var getValue = $(this).attr('id');
        console.log(getValue);
        var input = $('<input class="editableColumnsStyle" type="text" name="id_u"/>');
        var input2 = $('<input class="editableColumnsStyle" type="text" name="nom"/>');
        var input3 = $('<input class="editableColumnsStyle" type="text" name="prenom"/>');
        var input4 = $('<input class="editableColumnsStyle" type="email" name="email"/>');
        var input5 = $('<input class="editableColumnsStyle" type="password" name="mdp"/>');
        $(this).parents('tr').find('td.editableColumns:first-child').each(function() {
            var html = $(this).html();
            input.val(html);
            $(this).html(input);
        });
        $(this).parents('tr').find('td.editableColumns:nth-child(3)').each(function() {
            var html = $(this).html();
            input2.val(html);
            $(this).html(input2);
        });
        $(this).parents('tr').find('td.editableColumns:nth-child(4)').each(function() {
            var html = $(this).html();
            input3.val(html);
            $(this).html(input3);
        });
        $(this).parents('tr').find('td.editableColumns:nth-child(5)').each(function() {
            var html = $(this).html();
            input4.val(html);
            $(this).html(input4);
        });
        $(this).parents('tr').find('td.editableColumns:nth-child(6)').each(function() {
            var html = $(this).html();
            input5.val(html);
            $(this).html(input5);
        });
        $('#'+getValue).removeClass('editValues').css({
            'display' : "none"
        });
        $(this).next('input').removeClass('displayNone');
        $('input').siblings('.editValues').css({
            'display' : 'none'
        });
    });

    $("#btnClone").click(function () {
        console.log("hi");
        var index = $("#select_place select").length + 1;
        if (index < 5) {
            var selectedValueOrigin = $("#cInteret option:selected").val();
            var selectedValueOpt2 = $("#cInteret_2 option:selected").val();
            var selectedValueOpt3 = $("#cInteret_3 option:selected").val();
            var selectedValueOpt4 = $("#cInteret_4 option:selected").val();
            //Clone the DropDownList
            var cInteret = $("#cInteret").clone();

            //Set the ID and Name
            cInteret.attr("id", "cInteret_" + index);
            cInteret.attr("name", "cInteret_" + index);

            //[OPTIONAL] Copy the selected value
            if (index == 2) {
                var selectedValue = $("#cInteret option:selected").val();
                if (selectedValue !== '0') {
                    cInteret.find("option[value = '" + selectedValue + "']").attr('disabled', 'disabled');
                }
            }

            if (index == 3) {
                var selectedValue = $("#cInteret_2 option:selected").val();
                if (selectedValue !== '0') {
                    cInteret.find("option[value = '" + selectedValue + "']").attr('disabled', 'disabled');
                }
                if (selectedValueOrigin !== "0") {
                    cInteret.find("option[value = '" + selectedValueOrigin + "']").attr('disabled', 'disabled');
                }
            }
            if (index == 4) {
                var selectedValue = $("#cInteret_3 option:selected").val();
                if (selectedValue !== '0') {
                    cInteret.find("option[value = '" + selectedValue + "']").attr('disabled', 'disabled');
                }
                if (selectedValueOrigin !== "0") {
                    cInteret.find("option[value = '" + selectedValueOrigin + "']").attr('disabled', 'disabled');
                }
                if (selectedValueOpt2 !== "0") {
                    cInteret.find("option[value = '" + selectedValueOpt2 + "']").attr('disabled', 'disabled');
                }
            }

            //Append to the DIV.
            $("#select_place").append(cInteret);
            //            $("#select_place").append("<br /><br />");
            $('#btnDel').removeAttr('disabled').css({
                "display": "inline"
            }); // enable the "del" button

            var num = $('.cInteret').length;
            console.log("nombre de select : " + num);
        }
        if (index == 4) {
            $('#btnClone').attr('disabled', 'disabled').attr('value', "Impossible d'ajouter plus");
            var selectedValue = $("#cInteret_3 option:selected").val();
            if (selectedValue !== '0') {
                cInteret.find("option[value = '" + selectedValue + "']").attr('disabled', 'disabled');
            }
        }
        if (index == 0) {
            $('#btnDel').attr('disabled', 'disabled').css({
                "display": "none"
            }); // disable the "del" button
        }
    });

    $("#btnDel").click(function () {
        var selectedValueOriginDel = $("#cInteret option:selected").val();
        var selectedValueOpt2Del = $("#cInteret_2 option:selected").val();
        var selectedValueOpt3Del = $("#cInteret_3 option:selected").val();
        var selectedValueOpt4Del = $("#cInteret_4 option:selected").val();
        var num = $('.cInteret').length;
        console.log("nombre de class cInteret : " + num);
        if (num > 0) {
           var tempDelete = $('#cInteret_'+num+' option:selected').val();
            if(tempDelete == '1'){
                $(".groupe-num-1").css({
                "display" : "none"
            }); 
            }
            if(tempDelete == '2'){
                $(".groupe-num-2").css({
                "display" : "none"
            }); 
            }
            if(tempDelete == '3'){
                $(".groupe-num-3").css({
                "display" : "none"
            }); 
            }
            if(tempDelete == '4'){
                $(".groupe-num-4").css({
                "display" : "none"
            }); 
            }
            $('#cInteret_' + num).remove();
        }
        if (num == 2) {
            $('#btnDel').attr('disabled', 'disabled').css({
                "display": "none"
            }); // disable the "del" button
            if (selectedValueOriginDel !== '1') {
                $("#cInteret option[value='1']").removeAttr('disabled');
            }
            if (selectedValueOriginDel !== '2') {
                $("#cInteret option[value='2']").removeAttr('disabled');
            }
            if (selectedValueOriginDel !== '3') {
                $("#cInteret option[value='3']").removeAttr('disabled');
            }
            if (selectedValueOriginDel !== '4') {
                $("#cInteret option[value='4']").removeAttr('disabled');
            }
        }
        if (num == 3) {
            if ((selectedValueOriginDel !== '1') && (selectedValueOpt2Del !== '1')) {
                $("#cInteret option[value='1']").removeAttr('disabled');
                $("#cInteret_2 option[value='1']").removeAttr('disabled');
            }
            if ((selectedValueOriginDel !== '2') && (selectedValueOpt2Del !== '2')) {
                $("#cInteret option[value='2']").removeAttr('disabled');
                $("#cInteret_2 option[value='2']").removeAttr('disabled');
            }
            if ((selectedValueOriginDel !== '3') && (selectedValueOpt2Del !== '3')) {
                $("#cInteret option[value='3']").removeAttr('disabled');
                $("#cInteret_2 option[value='3']").removeAttr('disabled');
            }
            if ((selectedValueOriginDel !== '4') && (selectedValueOpt2Del !== '4')) {
                $("#cInteret option[value='4']").removeAttr('disabled');
                $("#cInteret_2 option[value='4']").removeAttr('disabled');
            }
        }
        if (num == 4) {
            if ((selectedValueOriginDel !== '1') && (selectedValueOpt2Del !== '1') && (selectedValueOpt3Del !== '1')) {
                $("#cInteret option[value='1']").removeAttr('disabled');
                $("#cInteret_2 option[value='1']").removeAttr('disabled');
                $("#cInteret_3 option[value='1']").removeAttr('disabled');
            }
            if ((selectedValueOriginDel !== '2') && (selectedValueOpt2Del !== '2') && (selectedValueOpt3Del !== '2')) {
                $("#cInteret option[value='2']").removeAttr('disabled');
                $("#cInteret_2 option[value='2']").removeAttr('disabled');
                $("#cInteret_3 option[value='2']").removeAttr('disabled');
            }
            if ((selectedValueOriginDel !== '3') && (selectedValueOpt2Del !== '3') && (selectedValueOpt3Del !== '3')) {
                $("#cInteret option[value='3']").removeAttr('disabled');
                $("#cInteret_2 option[value='3']").removeAttr('disabled');
                $("#cInteret_3 option[value='3']").removeAttr('disabled');
            }
            if ((selectedValueOriginDel !== '4') && (selectedValueOpt2Del !== '4') && (selectedValueOpt3Del !== '4')) {
                $("#cInteret option[value='4']").removeAttr('disabled');
                $("#cInteret_2 option[value='4']").removeAttr('disabled');
                $("#cInteret_3 option[value='4']").removeAttr('disabled');
            }
        }
        if (num < 5) {
            $('#btnClone').removeAttr('disabled').attr('value', "Ajouter un centre d'intérêt"); //enable clone button
        }
        console.log("nombre de class cInteret après remove : " + num);


    });

    //hide and seek
    //$(".ex-enable").click(function(){
    //   if(this.checked){
    //       console.log("ça marche");
    //       $(".groupe-num-1").css({
    //           "display" : "block"
    //       });
    //       $(".groupe-num-ss1").css({
    //           "display" : "none"
    //       });
    //       $(".groupe-num-ss2").css({
    //           "display" : "none"
    //       });
    //   }else{
    //       $(".groupe-num-1").css({
    //           "display" : "none"
    //       });
    //   } 
    //});
    //
    //$(".ex-enable-ss1").click(function(){
    //   if(this.checked){
    //       console.log("ça marche");
    //       $(".groupe-num-ss1").css({
    //           "display" : "block"
    //       });
    //   }else{
    //       $(".groupe-num-ss1").css({
    //           "display" : "none"
    //       });
    //   } 
    //});
    //    
    //$(".ex-enable-ss2").click(function(){
    //   if(this.checked){
    //       console.log("ça marche");
    //       $(".groupe-num-ss2").css({
    //           "display" : "block"
    //       });
    //   }else{
    //       $(".groupe-num-ss2").css({
    //           "display" : "none"
    //       });
    //   } 
    //});    
    //    
    //$(".ex-enable2").click(function(){
    //   if(this.checked){
    //       console.log("ça marche");
    //       $(".groupe-num-3").css({
    //           "display" : "block"
    //       });
    //   }else{
    //       $(".groupe-num-3").css({
    //           "display" : "none"
    //       });
    //   } 
    //});      



    // $("#sBuyRent").change(function () {
    //     console.log("hi2");
    //     var valForm = $("input[name=achat]:checked").val();
    //     console.log(valForm);
    //     if (valForm == '1') {
    //         console.log('valForm = 1');
    //         $(".groupe-num-ss1").css({
    //             "display": "block"
    //         });
    //         $(".groupe-num-ss2").css({
    //             "display": "none"
    //         });
    //     }
    //     if (valForm == '2') {
    //         console.log('valForm = 2');
    //         $(".groupe-num-ss1").css({
    //             "display": "none"
    //         });
    //         $(".groupe-num-ss2").css({
    //             "display": "block"
    //         });
    //     }
    // });
    
    $("#tBuyRent").change(function () {
        console.log("hi3");
        var valFormtBuyRent = $('input[name=achat_t]:checked').val();
        console.log(valFormtBuyRent);
        if (valFormtBuyRent == '1') {
            console.log('valFormtBuyRent = 1');
            $(".groupe-num-ss3").css({
                "display": "block"
            });
            $(".groupe-num-ss4").css({
                "display": "none"
            });
        }

        if (valFormtBuyRent == '2') {
            console.log('valFormtBuyRent = 2');
            $(".groupe-num-ss3").css({
                "display": "none"
            });
            $(".groupe-num-ss4").css({
                "display": "block"
            });
        }
    });



    //dupliquer

    // $('#duplicatebtn').click(function (e) {
    //     console.log("hi");
    //     e.preventDefault();
    //     var clone = $('#duplicate').clone().attr('id', '').removeClass('hidden');
    //     $('#duplicate').before(clone);
    //     $(".removebtn").attr('id', 'removebutton');
    //
    // });
    //supprimer
    $('#removebutton').click(function (e) {
        console.log("hi enlevage");
        e.preventDefault();

    });


    // $('#btnAdd').click(function () {
    //
    //     $('#btnDel').removeAttr('disabled').button('enable'); // enable the "del" button
    //
    //     // how many "duplicatable" input fields we currently have
    //     var num = $('.clonedInput').length;
    //
    //     // the numeric ID of the new input field being added
    //     var newNum = new Number(num + 1);
    //     var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);
    //
    //     newElem.children(':first').attr('id', 'name' + newNum).attr('name', 'name_label[]');
    //     $('#input' + num).after(newElem);
    //
    //
    //     // business rule: limit the number of fields to 5
    //     if (newNum == 5) {
    //         $('#btnAdd').attr('disabled', 'disabled').button('disable');
    //         $('#btnAdd').parent().find('.ui-btn-text').text('maximum fields reached');
    //     }
    // });

    $('#btnDelOrigin').click(function () {
        // how many "duplicatable" input fields we currently have           
        var num = $('.clonedInput').length;

        // remove the last element	
        $('#input' + num).remove();

        // enable the "add" button, since we've removed one				
        $('#btnAdd').removeAttr('disabled').button('enable');
        $('#btnAdd').parent().find('.ui-btn-text').text('add another name');

        // if only one element remains, disable the "remove" button
        if (num - 1 == 1)
            $('#btnDel').attr('disabled', 'disabled').button('disable');

    });
    
    $("#choixRoleAddUser").change(function () {
        var valRadioChoice = $('input[name=role]:checked').val();
        if (valRadioChoice == '2') {
            $(".ChiefChoiceDisplay").css({
                "display": "none"
            });
        }
        if (valRadioChoice == '1') {
            $(".ChiefChoiceDisplay").css({
                "display": "block"
            });
            console.log('commercial sélectionné');
        }
    });


    $('.btnSuivant').click(function(){
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.btnRetour').click(function(){
        $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    });
});