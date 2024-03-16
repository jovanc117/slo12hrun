$(document).on('click','#btn-add',function(e) {
    var data = $("#user_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "backend/save.php",
        success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    $('#addEmployeeModal').modal('hide');
                    alert('Data added successfully !'); 
                    location.reload();						
                }
                else if(dataResult.statusCode==201){
                   alert(dataResult);
                }
        }
    });
});
$(document).on('click','.update',function(e) {
    var id=$(this).attr("data-id");
    var ime=$(this).attr("data-ime");
    var priimek=$(this).attr("data-priimek");
    var spol=$(this).attr("data-spol");
    var starost=$(this).attr("data-starost");
    var kraj=$(this).attr("data-kraj");
    var naslov=$(this).attr("data-naslov");
    var posta=$(this).attr("data-posta");
    var drzava=$(this).attr("data-drzava");
    var klub=$(this).attr("data-klub");
    var majica=$(this).attr("data-majica");
    var email=$(this).attr("data-email");
    var tek=$(this).attr("data-tek");
    var dolzina=$(this).attr("data-dolzina");
    $('#id_u').val(id);
    $('#ime_u').val(ime);
    $('#priimek_u').val(priimek);
    $('#spol_u').val(spol);
    $('#starost_u').val(starost);
    $('#kraj_u').val(kraj);
    $('#naslov_u').val(naslov);
    $('#posta_u').val(posta);
    $('#drzava_u').val(drzava);
    $('#klub_u').val(klub);
    $('#majica_u').val(majica);
    $('#email_u').val(email);
    $('#tek_u').val(tek);
    $('#dolzina_u').val(dolzina);
});

$(document).on('click','#update',function(e) {
    var data = $("#update_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "backend/save.php",
        success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    $('#editEmployeeModal').modal('hide');
                    alert('Data updated successfully !'); 
                    location.reload();						
                }
                else if(dataResult.statusCode==201){
                   alert(dataResult);
                }
        }
    });
});
$(document).on("click", ".delete", function() { 
    var id=$(this).attr("data-id");
    $('#id_d').val(id);
});
$(document).on("click", "#delete", function() { 
    $.ajax({
        url: "backend/save.php",
        type: "POST",
        cache: false,
        data:{
            type:3,
            id: $("#id_d").val()
        },
        success: function(dataResult){
                $('#deleteEmployeeModal').modal('hide');
                $("#"+dataResult).remove();
        
        }
    });
});
$(document).on("click", "#delete_multiple", function() {
    var user = [];
    $(".user_checkbox:checked").each(function() {
        user.push($(this).data('user-id'));
    });
    if(user.length <=0) {
        alert("Izberite tekmovalce"); 
    } 
    else { 
        WRN_PROFILE_DELETE = "Ali ste prepričani da želite izbrisati te "+(user.length>1?"these":"this")+" tekmovalce?";
        var checked = confirm(WRN_PROFILE_DELETE);
        if(checked == true) {
            var selected_values = user.join(",");
            console.log(selected_values);
            $.ajax({
                type: "POST",
                url: "backend/save.php",
                cache:false,
                data:{
                    type: 4,						
                    id : selected_values
                },
                success: function(response) {
                    var ids = response.split(",");
                    for (var i=0; i < ids.length; i++ ) {	
                        $("#"+ids[i]).remove(); 
                    }	
                } 
            }); 
        }  
    } 
});
/*$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});*/