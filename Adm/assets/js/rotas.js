function showLog(){
    $.ajax({
        url:"./adminView/viewLog.php",
        method:"post",
        data:{record:1},
        success: (data)=>{
            $('.allContent-section').html(data);
        }
    })
}

function showPosts(){  
    $.ajax({
        url:"./adminView/viewPosts.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showProblems(){  
    $.ajax({
        url:"./adminView/viewProblems.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showComentarios(){  
    $.ajax({
        url:"./adminView/viewComentarios.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showUsers(){
    $.ajax({
        url:"./adminView/viewUsers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


// Add User

function addUser(){
    var nome = $('#nome').val();
    var email = $('#email').val();
    var senha = $('#senha').val();
    var idade = $('#idade').val();
    var lang = $('#lang').val();
    var fd = new FormData();
    fd.append('nome', nome);
    fd.append('email', email);
    fd.append('senha', senha);
    fd.append('idade', idade);
    fd.append('lang', lang);
    $.ajax({
        url:"./controller/addUserController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: (data) =>{
            alert('Usuario adicionado com sucesso');
            $('form').trigger('reset');
            showUsers();
        }
    })
}


// Delete log
function logDelete(id){
    $.ajax({
        url: './controller/deleteLogController.php',
        method: "post",
        data:{record:id},
        sucess:(data) => {
            alert('Registro de Log deletado com sucesso');
            $('form').trigger('reset');
            showLog();
        }
    })
}


//delete category data
function postDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Post deletado com sucesso');
            $('form').trigger('reset');
            showPosts();
        }
    });
}
function userDelete(id){
    $.ajax({
        url:"./controller/deleteUserController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Usuario deletado com sucesso');
            $('form').trigger('reset');
            showUsers();
        }
    });
}


//delete contato
function contatoDelete(id){
    $.ajax({
        url:"./controller/deleteContatoController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Contato deletado com sucesso');
            $('form').trigger('reset');
            showProblems();
        }
    });
}

//delete comentário
function comentarioDelete(id){
    $.ajax({
        url:"./controller/deleteComentarioController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Comentário removido com sucesso');
            $('form').trigger('reset');
            showComentarios();
        }
    });
}
