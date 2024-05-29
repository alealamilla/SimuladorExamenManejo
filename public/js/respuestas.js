
let table = $("#AllAnswers").DataTable({
    ajax: {
        url: route('respuestas.index'),
        dataSrc: ''
    },
    columns: [{
        data: "id"
    },
    {
        data: "texto"
    },
    {
        data: "correcta",
        render: function(data) {
            return data == 1 ? "Correcta" : "Incorrecta"; }
    },
    {
        data: "id_pregunta"
    },
    {
        data: "created_at",
            render: function(data) {
                return moment(data).format('YYYY-MM-DD'); 
            }
    }]
});

async function NewAns() {
    event.preventDefault();
    let form = new FormData(document.getElementById("form_respuesta"));
    let pet = await fetch(route("respuestas.store"), {
        method: "POST",
        body: form
    });
    if (pet.ok) {
        Swal.fire({
            title: "Registrado",
            text: "La respuesta quedo registrada",
            icon: "success"
        }).then(() => {
            window.location.href = route("respuestas.index");
        });
    }

};