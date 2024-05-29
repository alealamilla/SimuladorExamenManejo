const user = document.getElementById("IDUser").value;


let table = $("#pruebas").DataTable({
    ajax: {
        url: route('historialexamen.show', user),
        dataSrc: ''
    },
    columns: [
        {
            data: "calificacion"
        },
        {
            data: "aprobado",
            render: function (data) {
                return data == 1 ? 'Si' : 'No';
            }
        },
        {
            data: "created_at",
            render: function (data) {
                return moment(data).format('YYYY-MM-DD');
            }
        },
        {
            data: null,
            render: function (data, type, row) {
                return `<a title="Detalles" href="${route('historialresp.show', row.id)}"><i class="fas fa-info-circle fa-lg "></i></a>`;
            }
        }
    ]
});

let table2 = $("#finales").DataTable({
    ajax: {
        url: route('historialexamen.edit', user),
        dataSrc: ''
    },
    columns: [{
        data: "calificacion"
    },
    {
        data: "aprobado",
        render: function (data) {
            return data == 1 ? 'Si' : 'No';
        }
    },
    {
        data: "created_at",
        render: function (data) {
            return moment(data).format('YYYY-MM-DD');
        }
    },
    {
        data: null,
        render: function (data, type, row) {
            return `<a title="Detalles" href="${route('historialresp.show', row.id)}"><i class="fas fa-info-circle fa-lg "></i></a>`;
        }
    }
]
});