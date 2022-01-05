$(document).ready(function () {
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    //Hiển thị User List
    $.ajax({
        url: baseUrl + '/api/users',
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            console.log(res)
            // displayAllUser(res)
            let str = "";
            for (let i = 0; i < res.data.length; i++) {
                str += `<tr id="user-${res.data[i].id}">`; //user-{{$user->id}}
                str += `<td>`;
                str += res.data[i].id //lấy phần tử thứ i của mảng data
                str += `</td>`;
                str += `<td>`;
                str += res.data[i].name
                str += `</td>`;
                str += `<td>`;
                str += res.data[i].email
                str += `</td>`;
                str += `<td><button class="btn btn-danger delete-user" data-id="${res.data[i].id}">`;
                str += 'Delete'
                str += `</button></td>`;
                str += `</tr>`;
            }
            $('.user-list').html(str);
        }
    });

    // function displayAllUser(users) {
    //     let str = "";
    //     for (let i = 0; i < users.length; i++) {
    //         str += `<tr id="post-${users[i].id}">
    //                     <td>${users[i].id}</td>
    //                     <td>${users[i].name}</td>
    //                     <td>${users[i].email}</td>
    //                     <td><button class="btn btn-danger delete-user" data-id="${users[i].id}">Delete</button></td>
    //                 </tr>`;
    //     }
    //     $('.user-list').html(str);
    // }

    //Delete User
    $('body').on('click','.delete-user', function () {
        let idUser = $(this).attr('data-id')
        if (confirm("Bạn muốn xóa người dùng này không?")) {
            $.ajax({
                url: baseUrl + '/api/users/' + idUser + '/delete',
                type: 'GET',
                dataType: 'json',
                success: function (res) {
                    // console.log(res)
                    // $('#user-' + res.data[i].id).remove(); //sai/ko dùng được vì ko chạy vòng lặp
                    $('#user-' + idUser).remove();
                }
            })
        }
    })

})
