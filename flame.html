<!DOCTYPE html>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let table = new DataTable('#dt-flame', {
            pageLength : 5,
            lengthMenu: [[5, 10, 20, 25], [5, 10, 20, 25]],
            order: [[0, 'desc']],
            ajax: function (d, cb) {
                fetch('api/flame.php')
                    .then(response => response.json())
                    .then(data => cb(data));
            },
            columns: [
                { data: 'time_updated' },
                { data: 'sensor_deteksi_api' },
                { data: 'indikator_buzzer' },
                { data: 'status_ruangan' }
            ],
            "columnDefs": [
                {"targets": "_all",
                    "className": "dt-center"
                },
                {"targets" : [ 3 ],
                    render : function (data, type, row) {
                        if(row.status_ruangan == 1){
                        return '<button class="btn btn-danger btn-block"><strong><i class="fa-solid fa-fire"></i> BAHAYA !</strong></button>';
                        }else{
                        return '<button class="btn btn-success btn-block"><strong><i class="fa fa-check"></i> AMAN</strong></button>';
                        }
                    }
            }]
        } );
    } );

    // function reloadDatatable () {
    //     $('#dt-flame').DataTable().ajax.reload();
    // }; 
    // setInterval( reloadDatatable , 2000 );
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<title>SISTEM MONITORING PENDETEKSI DAN PENGAMANAN KEBOCORAN GAS LPG</title>
    <meta http-equiv="refresh" content="600">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        #dt-flame {
            font-size: 14px !important;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <br>
    <br>
    <p id="judul"><i class="fa-solid fa-fire"></i> Data Api</p>
    <table id="dt-flame" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="dt-center">Tanggal & Waktu</th>
                <th class="dt-center">Nilai Sensor Api</th>
                <th class="dt-center">status Buzzer & Pompa</th>
                <th class="dt-center">Status Ruangan</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd">
                <td colspan="6" class="dataTables_empty" valign="top">Loading...</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th class="dt-center">Tanggal & Waktu</th>
                <th class="dt-center">Nilai Sensor Api</th>
                <th class="dt-center">status Buzzer & Pompa</th>
                <th class="dt-center">Status Ruangan</th>
            </tr>
        </tfoot>
    </table>
</div>

</html>