async function Registarse() {
    event.preventDefault();
    let form = new FormData(document.getElementById("NewUser"));
    let pet = await fetch(route("usuarios.store"), {
        method: "POST",
        body: form
    });
    if (pet.ok) {
        Swal.fire({
            title: "Registrado",
            text: "Tu usuario se registro correctamente, ahora puedes acceder al sistema con tu correo electrónico y contraseña",
            icon: "success"
        }).then(() => {
            window.location.href = route("login");
        });
    }

};

let table = $("#AllUsers").DataTable({
    ajax: {
        url: route('usuarios.index'),
        dataSrc: ''
    },
    columns: [{
        data: "id"
    },
    {
        data: "nombres"
    },
    {
        data: "apellidos"
    },
    {
        data: "email"
    },
    {
        data: "tipo_usuario",
            render: function(data) {
                return data == 1 ? "Administrativo" : "Alumno"; }
    },
    {
        data: "created_at",
            render: function(data) {
                return moment(data).format('YYYY-MM-DD'); 
            }
    }]
});

async function NewUser() {
    event.preventDefault();
    let form = new FormData(document.getElementById("form_usuario"));
    let pet = await fetch(route("usuarios.store"), {
        method: "POST",
        body: form
    });
    if (pet.ok) {
        Swal.fire({
            title: "Registrado",
            text: "El usuario se registro correctamente, ahora puede acceder al sistema con su correo electrónico y contraseña",
            icon: "success"
        }).then(() => {
            window.location.href = route("usuarios.index");
        });
    }

};