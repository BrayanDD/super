

    function showProductDetails(productId) {
        $.ajax({
            url: '/products/' + productId,
            type: 'GET',
            success: function(response) {
                $('#productModalBody').html(response); // Actualizar el contenido del modal
                $('#productModal').modal('show'); // Mostrar el modal después de cargar los datos
            },
            error: function(xhr, status, error) {
                console.error('Error al obtener detalles del producto:', error);
            }
        });
    }

  