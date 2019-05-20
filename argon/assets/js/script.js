$(document).ready(function () {

    $(".add").on("click", function () {
        $(".modal-title").html("Add");
        $(".change").html("Add");
        $("#gambar").attr("src", "#");
        $("#gambar").hide();

        $("#productId").val('');
        $("#productName").val('');
        $("#productPrice").val('');
        $("#productCategory").val('');
        $("#productStock").val('');
        $("#productDescription").val('');
    });

    $(".edit").on("click", function () {
        $(".modal-title").html("Edit");
        $(".change").html("Save");
        $("#gambar").show();

        let id = $(this).data('edit');

        let title = $('.title').text();

        if (title == "Products List") {
            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/edit",
                method: "post",
                data: {
                    q: "products",
                    where: "productID",
                    id: id
                },
                dataType: "json",
                success: function (data) {
                    let result = data[0];
                    $("#productId").val(result.productID);
                    $("#productName").val(result.productName);
                    $("#productPrice").val(result.productPrice);
                    $("#productCategory").val(result.productCategory);
                    $("#productStock").val(result.productStock);
                    $("#productDescription").val(result.productDescription);
                    $("#gambar").attr("src", result.productImage);
                }
            });
        }
        else if (title == "Customers List") {
            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/edit",
                method: "post",
                data: {
                    q: "customers",
                    where: "customerID",
                    id: id
                },
                dataType: "json",
                success: function (data) {
                    let result = data[0];
                    $("#customerID").val(result.customerID);
                    $("#fullName").val(result.fullName);
                    $("#email").val(result.email);
                    $("#address").val(result.address);
                    $("#phone").val(result.phone);
                    $("#username").val(result.username);
                    $("#password").val(result.password);
                }
            });
        }
        else if (title == "Transactions List") {
            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/edit",
                method: "post",
                dataType: "json",
                data: {
                    q: "orders",
                    where: "orderID",
                    id: id
                },
                success: function (data) {
                    let result = data[0];
                    $("#orderID").val(result.orderID);
                    $("#status").val(result.orderStatus);
                }
            })
        }
    });

    $(".delete").on("click", function () {
        $(".modal-title").html("Delete");
        $(".deletecnf").html("Delete");

        let id = $(this).data('delete');
        $.ajax({
            url: "http://localhost/Infinistyle/admin/admin/delete",
            method: "post",
            data: { id: id },
            success: function (data) {
                $("#temp").val(data);
            }
        });
    });

    $(".change").on("click", function () {
        let title = $('.title').text();

        if (title == "Products List") {
            let btn = $(this).text();
            let form = new FormData();
            form.append('id', $("#productId").val());
            form.append('name', $("#productName").val());
            form.append('price', $("#productPrice").val());
            form.append('category', $("#productCategory").val());
            form.append('stock', $("#productStock").val());
            form.append('desc', $("#productDescription").val());
            if (btn == "Add") {
                if ($("#productImage").val() != '') {
                    let img = document.getElementById('productImage').files[0];
                    let ext = img.name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) != -1) {
                        form.append('image', img);
                        $.ajax({
                            url: "http://localhost/Infinistyle/admin/admin/add_action",
                            method: "post",
                            data: form,
                            dataType: 'json',
                            processData: false,
                            contentType: false,
                            success: function (conf) {
                                if (conf.status == "error") {
                                    $("#error").css("display", "block");
                                    $("#error").html(conf.message);
                                }
                                else {
                                    $("#editModal").modal('hide');
                                    location.reload();
                                }
                            }
                        })
                    }
                    else {
                        $("#error").css("display", "block");
                        $("#error").html("not allowed file extension");
                    }
                }
                else {
                    $("#error").css("display", "block");
                    $("#error").html("file cannot empty!");
                }

            }
            else if (btn == "Save") {
                if ($("#productImage").val() != '') {
                    let img = document.getElementById('productImage').files[0];
                    let ext = img.name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) != -1) {
                        form.append('image', img);
                        form.append('title', 'products');
                        $.ajax({
                            url: "http://localhost/Infinistyle/admin/admin/edit_action",
                            method: "post",
                            data: form,
                            dataType: 'json',
                            processData: false,
                            contentType: false,
                            success: function (conf) {
                                if (conf.status == "error") {
                                    $("#error").css("display", "block");
                                    $("#error").html(conf.message);
                                }
                                else {
                                    $("#editModal").modal('hide');
                                    location.reload();
                                }
                            }
                        })
                    }
                    else {
                        $("#error").css("display", "block");
                        $("#error").html("not allowed file extension");
                    }
                }
                else {
                    form.append('image', $("#gambar").attr("src"));
                    form.append('title', 'products');
                    $.ajax({
                        url: "http://localhost/Infinistyle/admin/admin/edit_action",
                        method: "post",
                        dataType: "json",
                        data: form,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            if (data.status == 'error') {
                                $("#error").css("display", "block");
                                $("#error").html(data.message);
                            }
                            else {
                                $("#editModal").modal('hide');
                                location.reload();
                            }
                        }
                    })
                }
            }
        }
        else if (title == "Customers List") {
            let customerID = $("#customerID").val();
            let fullName = $("#fullName").val();
            let email = $("#email").val();
            let address = $("#address").val();
            let phone = $("#phone").val();
            let username = $("#username").val();
            let password = $("#password").val();

            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/edit_action",
                method: "post",
                dataType: "json",
                data: {
                    title: "customers",
                    customerID: customerID,
                    fullName: fullName,
                    email: email,
                    address: address,
                    phone: phone,
                    username: username,
                    password: password
                },
                success: function (data) {
                    $("#editModal").modal('hide');
                    location.reload();
                }
            })
        }
        else if (title == "Transactions List") {
            let id = $("#orderID").val();
            let status = $("#status").val();
            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/edit_action",
                method: "post",
                data: {
                    title: "orders",
                    status: status,
                    orderID: id
                },
                success: function (data) {
                    $("#editModal").modal('hide');
                    location.reload();
                }
            })
        }
    })

    $(".deletecnf").on("click", function () {
        let id = $("#temp").val();

        let title = $('.title').text();

        if (title == "Goods List") {
            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/delete_action",
                method: "post",
                data: {
                    q: "products",
                    where: "productID",
                    id: id
                },
                success: function () {
                    $("#deleteModal").modal('hide');
                    location.reload();
                }
            });
        }
        else if (title == "Customers List") {
            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/delete_action",
                method: "post",
                data: {
                    q: "customers",
                    where: "customerID",
                    id: id
                },
                success: function () {
                    $("#deleteModal").modal('hide');
                    location.reload();
                }
            })
        }
        else if (title == "Transactions List") {
            $.ajax({
                url: "http://localhost/Infinistyle/admin/admin/delete_action",
                method: "post",
                data: {
                    q: "orders",
                    where: "orderID",
                    id: id
                },
                success: function () {
                    $("#deleteModal").modal('hide');
                    location.reload();
                }
            })
        }
    })
});
