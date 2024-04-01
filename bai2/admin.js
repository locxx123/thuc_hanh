
var data = [
    {
        name: 'Thomas Hardy',
        email: 'thomashardy@mail.com',
        address: '89 Chiaroscuro Rd, Portland, USA',
        phone: '(171) 555-2222'
    },
    {
        name: 'Dominique Perrier',
        email: 'dominiqueperrier@mail.com',
        address: 'Obere Str. 57, Berlin, Germany',
        phone: '(313) 555-5735'
    },
    {
        name: 'Maria Anders',
        email: 'mariaanders@mail.com',
        address: '25, rue Lauriston, Paris, France',
        phone: '(503) 555-9931'
    }
]
const tbody = document.querySelector('.tbody')
const addPeople = document.querySelector('.btn_modal_add')

function renderData(data) {
    const htmls = data.map((item,index)=> {
        return `
            <tr>
                <td>${item.name}</td>
                <td>${item.email}</td>
                <td>${item.address}</td>
                <td>${item.phone}</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
        `
    });
    tbody.innerHTML = htmls.join()
}
renderData(data)

addPeople.onclick = function () {
    const add_name =  document.querySelector('.add_name').value
    const add_email =  document.querySelector('.add_email').value
    const add_address =  document.querySelector('.add_address').value
    const add_phone =  document.querySelector('.add_phone').value
    const data_new = {
        'name':add_name,
        'email':add_email,
        'address':add_address,
        'phone':add_phone,
    }
    const datas = [
        ...data,
        data_new
    ]
    renderData(datas)
}