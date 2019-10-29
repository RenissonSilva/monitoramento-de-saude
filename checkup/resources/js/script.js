console.log('run');
$(document).ready(function(){
    let check = $('#check');
    let pass = $('#password');

    check.on('click', function(evt){
        console.log('click');
        if(check.is(':checked')){
            pass.get(0).type = 'text';
        }
        else{
            pass.get(0).type = 'password';
        }
    })


})
