$(document).ready(function () {
    $("#tables").DataTable({
        "responsive": true,
        "autoWidth": false,
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"],
        ],
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Records"
        }
    });

    // Roles
    $('.viewRoleModal').on('click', function () {
        $('#viewRoleModal').modal('show')
        $tr = $(this).closest('tr');
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#id').val(data[0])
        $('#name').val(data[1])
        $('#created_at').val(data[2])
        $('#updated_at').val(data[3])
    })

    $('.editRoleModal').on('click', function () {
        $('#editRoleModal').modal('show')
        $tr = $(this).closest('tr')
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#role_id').val(data[0])
        $('#role_name').val(data[1])
    })



    $('.deleteRoleModal').on('click', function () {
        $('#deleteRoleModal').modal('show')
        $tr = $(this).closest('tr')
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#delete_role_id').val(data[0])
    })

    // Users

    $('.viewUserModal').on('click', function () {
        $('#viewUserModal').modal('show')
        $tr = $(this).closest('tr');
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#id').val(data[0])
        $('#name').val(data[1])
        $('#role').val(data[2])
        $('#email').val(data[4])
        $('#created_at').val(data[5])
        $('#updated_at').val(data[6])
    })

    $('.editUserModal').on('click', function () {
        $('#editUserModal').modal('show')
        $tr = $(this).closest('tr')
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#user_id').val(data[0])
        $('#user_name').val(data[1])
        $('#user_email').val(data[4])
    })



    $('.deleteUserModal').on('click', function () {
        $('#deleteUserModal').modal('show')
        $tr = $(this).closest('tr')
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#delete_user_id').val(data[0])
    })


    // Consumer Price

    $('.viewConsumerModal').on('click', function () {
        $('#viewConsumerModal').modal('show')
        $tr = $(this).closest('tr');
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#id').val(data[0])
        $('#name').val(data[1])
        $('#role').val(data[2])
        $('#email').val(data[4])
        $('#created_at').val(data[5])
        $('#updated_at').val(data[6])
    })

    $('.editConsumerModal').on('click', function () {
        $('#editConsumerModal').modal('show')
        $tr = $(this).closest('tr')
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#user_id').val(data[0])
        $('#user_name').val(data[1])
        $('#user_email').val(data[4])
    })



    $('.deleteConsumerModal').on('click', function () {
        $('#deleteConsumerModal').modal('show')
        $tr = $(this).closest('tr')
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#delete_user_id').val(data[0])
    })
})
