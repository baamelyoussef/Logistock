    $( document ).ready(function() {
        $( "#btnSubmit" ).click(function() {
            let username = $('#inputUsername').val()
            let password = $('#inputPassword').val()
            if( username == 'admin' && password == '1311')
            {
                
                    window.location=" http://127.0.0.1:5502/categories.html"
                
            }else{
                
            if( username == 'Siham' && assword == '1311'){
                
                    window.location=" http://127.0.0.1:5502/categories.html"
                
            }else{
                if( username == 'Yassine' && password=='1203'){
                   
                        window.location=" http://127.0.0.1:5502/categories.html"
                    }else{
                        var d1 = document.getElementById('one');
                        d1.insertAdjacentHTML('beforeend', '<p> Nom d\'utilisateur ou mot de passe incorrect </p>');
                    }
                }
              }  
            })
    });