///////////ANATHESH ERGOY/////////

$(document).ready(function(){
    var next = 1;
    $(".add-anathesiergoy").click(function(e){
        e.preventDefault();
        var addto = "#field-anathesiergoy" + next;
        var addRemove = "#field-anathesiergoy" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-anathesiergoy' + next + '" name="field_anathesiergoy[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-anathesiergoy" >-</button></div><div id="field-anathesiergoy">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field-anathesiergoy" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-anathesiergoy').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-anathesiergoy" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});
//////KATASTASH//////
$(document).ready(function(){
    var next = 1;
    $(".add-katastasi").click(function(e){
        e.preventDefault();
        var addto = "#field-katastasi" + (next);
        var addRemove = "#field-katastasi" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-katastasi' + next + '" name="field_katastasi[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-katastasi" >-</button></div><div id="field-katastasi">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput); /////META TO addto BALE newInput
        $(addRemove).after(removeButton);
        $("#field-katastasi" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-katastasi').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-katastasi" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});

///////////KATHGORIA/////////

$(document).ready(function(){
    var next = 1;
    $(".add-katigoria").click(function(e){
        e.preventDefault();
        var addto = "#field-katigoria" + next;
        var addRemove = "#field-katigoria" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-katigoria' + next + '" name="field_katigoria[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-katigoria" >-</button></div><div id="field-katigoria">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field-katigoria" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-katigoria').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-katigoria" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});
//////EIDIKOTHTA//////
$(document).ready(function(){
    var next = 1;
    $(".add-eidikotita").click(function(e){
        e.preventDefault();
        var addto = "#field-eidikotita" + (next);
        var addRemove = "#field-eidikotita" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-eidikotita' + next + '" name="field_eidikotita[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-eidikotita" >-</button></div><div id="field-eidikotita">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput); /////META TO addto BALE newInput
        $(addRemove).after(removeButton);
        $("#field-eidikotita" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-eidikotita').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-eidikotita" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});


//////EIDOS APASXOLHSHS//////
$(document).ready(function(){
    var next = 1;
    $(".add-eidosapasxolisis").click(function(e){
        e.preventDefault();
        var addto = "#field-eidosapasxolisis" + (next);
        var addRemove = "#field-eidosapasxolisis" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-eidosapasxolisis' + next + '" name="field_eidosapasxolisis[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-eidosapasxolisis" >-</button></div><div id="field-eidosapasxolisis">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput); /////META TO addto BALE newInput
        $(addRemove).after(removeButton);
        $("#field-eidosapasxolisis" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-eidosapasxolisis').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-eidosapasxolisis" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});

///////////TOPOS APASXOLHSHS/////////

$(document).ready(function(){
    var next = 1;
    $(".add-toposapasxolisis").click(function(e){
        e.preventDefault();
        var addto = "#field-toposapasxolisis" + next;
        var addRemove = "#field-toposapasxolisis" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-toposapasxolisis' + next + '" name="field_toposapasxolisis[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-toposapasxolisis" >-</button></div><div id="field-toposapasxolisis">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field-toposapasxolisis" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-toposapasxolisis').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-toposapasxolisis" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});
//////XOROS APASXOLHSHS//////
$(document).ready(function(){
    var next = 1;
    $(".add-xorosapasxolisis").click(function(e){
        e.preventDefault();
        var addto = "#field-xorosapasxolisis" + (next);
        var addRemove = "#field-xorosapasxolisis" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-xorosapasxolisis' + next + '" name="field_xorosapasxolisis[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-xorosapasxolisis" >-</button></div><div id="field-xorosapasxolisis">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput); /////META TO addto BALE newInput
        $(addRemove).after(removeButton);
        $("#field-xorosapasxolisis" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-xorosapasxolisis').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-xorosapasxolisis" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});

//////DIEYTHINSI APASXOLISIS//////
$(document).ready(function(){
    var next = 1;
    $(".add-dieuthynsiapasxolisis").click(function(e){
        e.preventDefault();
        var addto = "#field-dieuthynsiapasxolisis" + (next);
        var addRemove = "#field-dieuthynsiapasxolisis" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field-dieuthynsiapasxolisis' + next + '" name="field_dieuthynsiapasxolisis[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-dieuthynsiapasxolisis" >-</button></div><div id="field-dieuthynsiapasxolisis">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput); /////META TO addto BALE newInput
        $(addRemove).after(removeButton);
        $("#field-dieuthynsiapasxolisis" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-dieuthynsiapasxolisis').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field-dieuthynsiapasxolisis" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
});
