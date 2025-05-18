import './bootstrap';
import 'preline';
import $ from 'jquery';
//window.$ = $;

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

    $(document).on('click', '.add-to-cart-btn', function (e) {
        e.preventDefault();
        const productId = $(this).data('product-id');

        $.ajax({
            url: `/add-to-cart/${productId}`,
            method: 'GET',
            success: function (response) {
                const successHtml = `
                <div
                    x-data="{ show: true }"
                    x-init="setTimeout(() => show = false, 3000)"
                    x-show="show"
                    x-transition
                    class="fixed top-4 right-4 z-50"
                >
                    <div class="bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 shadow-lg" role="alert">
                        <span class="font-bold">${response.message}</span>
                    </div>
                </div>`;
                $('body').append(successHtml);

                $('#hs-offcanvas-right').html(response.cart_html);

                $('#cart-count').text(response.cart_count);
            },
            error: function (xhr) {
                console.error("Error adding to cart:", xhr.responseText);
                alert('Something went wrong while adding to cart.');
            }
        });
    });

    // clear all cart items
    $(document).on('click', '#clear-cart', function (e) {
        e.preventDefault();

        $.ajax({
            url: clearCart,
            method: "POST",
            data: {
                _token: token
            },
            success: function (response) {
                $('#cart-count').text(response.cart_count);
                $("#hs-offcanvas-right").html(response.success)
            }
        });
    });



});

