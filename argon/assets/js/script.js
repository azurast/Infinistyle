$(document).ready(function () {

    $(".add").on("click", function () {
        $(".modal-title").html("Add");
        $(".change").html("Add");
        $("#image").hide();

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
        $("#image").show();

        let id = $(this).data('edit');

        let title = $('.title').text();

        if (title == "Goods List") {
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

        if (title == "Goods List") {

            let id = $("#productId").val();
            let name = $("#productName").val();
            let price = $("#productPrice").val();
            let category = $("#productCategory").val();
            let stock = $("#productStock").val();
            let desc = $("#productDescription").val();
            let image = $("#productImage").val();

            let text = $(this).text();
            if (text == 'Add') {
                $.ajax({
                    url: "http://localhost/Infinistyle/admin/admin/add_action",
                    method: "post",
                    data: {
                        id: id,
                        name: name,
                        price: price,
                        category: category,
                        stock: stock,
                        desc: desc,
                        image: image
                    },
                    success: function (conf) {
                        console.log(conf);
                        if (conf == 0) {
                            $("#editModal").modal('hide');
                            location.reload();
                        }
                    }
                })
            }
            else if (text == 'Save') {
                $.ajax({
                    url: "http://localhost/Infinistyle/admin/admin/edit_action",
                    method: "post",
                    data: {
                        title: "products",
                        id: id,
                        name: name,
                        price: price,
                        category: category,
                        stock: stock,
                        desc: desc,
                        image: image
                    },
                    success: function (data) {
                        $("#editModal").modal('hide');
                        location.reload();
                    }
                })
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
                url: "http://localhost/Infinistyle/admin/orders/edit_action",
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
