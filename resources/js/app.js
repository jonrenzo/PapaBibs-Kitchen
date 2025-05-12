import './bootstrap';
import 'preline';
import $ from 'jquery'
window.$ = $;

$(document).ready(function () {
    $(document).on('click', '#increase-quantity', function (e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        var $quantityElement = $(this).siblings('.quantity');
        var quantity = parseInt($quantityElement.text(), 10);
        quantity++;

        $.ajax({
            url: updateCart,
            method: "POST",
            data: {
                _token: token,
                product_id: productId,
                quantity: quantity
            },
            success: function (response) {
                $('#cart-count').text(response.cart_count);
                $("#hs-offcanvas-right").html(response.success)
            }
        });
    });

    $(document).on('click', '#decrease-quantity', function (e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        var $quantityElement = $(this).siblings('.quantity');
        var quantity = parseInt($quantityElement.text(), 10);
        quantity--;

        $.ajax({
            url: updateCart,
            method: "POST",
            data: {
                _token: token,
                product_id: productId,
                quantity: quantity
            },
            success: function (response) {
                $('#cart-count').text(response.cart_count);
                $("#hs-offcanvas-right").html(response.success)
            }
        });
    });

    $.ajax({
        url: updateCart,
        method: 'POST',
        data: {
            product_id: productId,
            quantity: quantity,
            _token: token
        },
        success: function(response) {
            $('#cart-count').text(response.cart_count);
            $("#hs-offcanvas-right").html(response.success)
        }
    });

});
