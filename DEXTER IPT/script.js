$(document).ready(function() {
    let order = [];

    $('.orderButton').on('click', function() {
        const drink = $(this).data('drink');
        order.push(drink);
        $('#orderList').append(`<li>${drink}</li>`);
        $('#orderDetails').val(order.join(', '));
    });

    $('#orderForm').on('submit', function(event) {
        if (order.length === 0) {
            event.preventDefault();
            alert('Please add at least one item to your order.');
        }
    });
});