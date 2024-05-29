window.onload = function () {
    IdUser = document.getElementById("IDUser").value;
    console.log(IdUser);
    Num(IdUser);
}

async function Num(id) {
    let url = route('intentos.show', id)
    let pet = await fetch(url);
    let respuesta = await pet.json();

    if (pet.ok) {
        if (respuesta.conteo_intentos === 6) {
            document.getElementById("Intentos").textContent = "Llegaste al maximo de " + respuesta.conteo_intentos + " intentos";
            document.getElementById("btnNewPrueba").style.display = 'none';
        } else {
            document.getElementById("Intentos").textContent = "Llevas un total de " + respuesta.conteo_intentos + " intentos";
            document.getElementById("conteo_intentos").value = respuesta.conteo_intentos;

        }

    }
}

async function NewExam() {
    event.preventDefault();
    let IdUser = document.getElementById("IDUser").value;
    let Conteo = parseInt(document.getElementById("conteo_intentos").value); // Parse the value to integer
    
    // Increment the count by 1
    Conteo += 1;
    let form = new FormData(document.getElementById("token"));
    form.append("prueba", "true");
    form.append("id_usuario", IdUser );
    form.append("conteo_intentos", Conteo.toString());
    let pet = await fetch(route("intentos.store"), {
        method: "POST",
        body: form
    });
    if (pet.ok) {
        window.location.href = route("prueba.preguntas");
    } else {
        console.log("Response not ok:", pet.status);
    }
}