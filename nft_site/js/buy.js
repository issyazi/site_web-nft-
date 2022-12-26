function buyproduct(id){
    $.ajax({
        async: false,
        type: "POST",
        url: "../buy.php",
        dataType: "text",
        data: 'action=add&id=' + id
    });
}
