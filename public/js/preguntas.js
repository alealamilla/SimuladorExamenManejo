
let table = $("#AllQuestions").DataTable({
    ajax: {
        url: route('preguntas.look'),
        dataSrc: ''
    },
    columns: [{
        data: "id"
    },
    {
        data: "enunciado"
    },
    {
        data: "foto"
    },
    {
        data: "created_at",
            render: function(data) {
                return moment(data).format('YYYY-MM-DD'); 
            }
    }]
});

async function NewQuestion() {
    event.preventDefault();
    let form = new FormData(document.getElementById("form_pregunta"));
    console.log([...form.entries()]);


    let pet = await fetch(route("preguntas.store"), {
        method: "POST",
        body: form
    });
    if (pet.ok) {
        Swal.fire({
            title: "Registrado",
            text: "La pregunta quedo registrada",
            icon: "success"
        }).then(() => {
            window.location.href = route("preguntas.index");
        });
    }

};

$("#foto").on("change", function () {
    if (document.getElementById("foto").value) {
        let imgElmnt = this;
        let allowedExtensions = ["jpg", "jpeg", "png"];

        let fileExtension = imgElmnt.files[0].name.split('.').pop().toLowerCase();

        if (allowedExtensions.includes(fileExtension)) {
            let reader = new FileReader();
            reader.onload = function (imgElmnt) {
                $("#evidencia").attr("src", imgElmnt.target.result);
            }
            reader.readAsDataURL(imgElmnt.files[0]);
        } else {
            $("#evidencia").attr("src", File);
        }
    } else {
        $("#evidencia").attr("src", imgDefault);
    }
});