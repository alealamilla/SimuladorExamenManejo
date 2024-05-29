let table = $("#AllExams").DataTable({
    ajax: {
        url: route('examenes.index'),
        dataSrc: ''
    },
    columns: [{
        data: "id"
    },
    {
        data: "nombre"
    },
    {
        data: "intentos"
    },
    {
        data: "num_preguntas"
    },
    {
        data: "ponderación"
    },
    {
        data: "created_at",
            render: function(data) {
                return moment(data).format('YYYY-MM-DD'); 
            }
    }]
});

async function NewExam() {
    event.preventDefault();
    let form = new FormData(document.getElementById("form_examen"));
    let pet = await fetch(route("examenes.store"), {
        method: "POST",
        body: form
    });
    if (pet.ok) {
        Swal.fire({
            title: "Registrado",
            text: "El examen se registro exitosamente",
            icon: "success"
        }).then(() => {
            window.location.href = route("examenes.index");
        });
    }

};