$('.login-btn').click(function (e) { 
    e.preventDefault();

    $(`input`).removeClass('error').addClass('enter');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        type: "POST",
        url: "../inc/signin.php",
        dataType: "json",
        data:{
            login: login,
            password: password
        },
        success: function (data) {
            //$('.message').removeClass('none').text(data);
            if(data.status){
                document.location.href = '../account.php'
            }
            else{
                if (data.type === 1){
                    data.fields.forEach(function (field) {
                        $(`input.enter[name="${field}"]`).removeClass('enter').addClass('error');
                    });
                }
                $('.message').removeClass('none').text(data.message);
            }
        }
    });
});

let avatar = false;

$(`input[name="avatar"]`).change(function(e){
    avatar = e.target.files[0];
});

$('.register-btn').click(function (e) { 
    e.preventDefault();

    $(`input`).removeClass('error').addClass('enter');

    let login = $('input[name="login"]').val(),
        email = $('input[name="email"]').val(),
        password = $('input[name="password"]').val(),
        password_repeat = $('input[name="password_repeat"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('email', email);
    formData.append('password', password);
    formData.append('password_repeat', password_repeat);
    formData.append('avatar', avatar);


    $.ajax({
        type: "POST",
        url: "../inc/signup.php",
        dataType: "json",
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success: function (data) {
            if(data.status){
                document.location.href = '../login.php'
            }
            else{
                if (data.type === 1){
                    data.fields.forEach(function (field) {
                        $(`input.enter[name="${field}"]`).removeClass('enter').addClass('error');
                    });
                }
                $('.message').removeClass('none').text(data.message);
            }
        }
    });
});

let picture = false;

$(`input[name="picture"]`).change(function(e){
    picture = e.target.files[0];
});

$('.add-btn').click(function (e) { 
    e.preventDefault();

    $(`input`).removeClass('error').addClass('enter');

    let nft_name = $('input[name="nft_name"]').val(),
        collection = $('input[name="collection"]').val(),
        price = $('input[name="price"]').val();

    let formData = new FormData();
    formData.append('nft_name', nft_name);
    formData.append('collection', collection);
    formData.append('price', price);
    formData.append('picture', picture);


    $.ajax({
        type: "POST",
        url: "../inc/addnft.php",
        dataType: "json",
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success: function (data) {
            if(data.status){
                document.location.href = '../account.php'
            }
            else{
                if (data.type === 1){
                    data.fields.forEach(function (field) {
                        $(`input.enter[name="${field}"]`).removeClass('enter').addClass('error');
                    });
                }
                $('.message').removeClass('none').text(data.message);
            }
        }
    });
});

$('.buy-btn').click(function(e){
    let id = $(this).attr('data-id');
    console.log(id);
    $.ajax({
        type: 'GET',
        url: "../inc/buy.php",
        dataType: 'json',
        data:{
            id: id
        },
        success: function (res) {
            document.location.href = '../account.php'
        },
        error: function (){
            document.location.href = '../login.php'
        }
    });
});