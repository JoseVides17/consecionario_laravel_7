$(document).ready(function() {
    $('#btn_buscar').on('click', function(event) {
        event.preventDefault();

        const url = $(this).data('url');

        const name = $('#name').val();
        const email = $('#email').val();
        const createdAt = $('#created_at').val();

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                name: name,
                email: email,
                created_at: createdAt
            },
            success: function(response) {
                $('#userTableBody').empty();

                response.data.forEach(user => {
                    const row = `
                        <tr>
                            <td>${user.id}</td>
                            <td>${user.name}</td>
                            <td>${user.email}</td>
                            <td>${user.rol ? user.rol.nombre : 'Sin Rol'}</td>
                            <td>${new Date(user.created_at).toLocaleDateString()}</td>
                            <td>${new Date(user.updated_at).toLocaleDateString()}</td>
                            <td>
                                <a href="/users/${user.id}" class="btn btn-info btn-sm">Ver</a>
                                <a href="/users/${user.id}/edit" class="btn btn-warning btn-sm">Editar</a>
                                <form action="/users/${user.id}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    `;
                    $('#userTableBody').append(row);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    });
});
