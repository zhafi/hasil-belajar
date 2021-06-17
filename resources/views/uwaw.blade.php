@extends('layouts.inhome')

@section('content')

<head>
    <meta charset="utf-8">
    <title>Tabel Percobaan</title>
   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
      
        form input,
        button {
            padding: 5px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #cdcdcd;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
        }

    </style>
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".add-row").click(function () {
                var guru = $("#id_guru").val();

                var namap = $("#pelajaran").val();
                var namar = $("#ruang").val();
                var namak = $("#kelas").val();
                var mulay = $("#mulai").val();
                var akhiri = $("#akhir").val(); --}}

    {{-- // var markup = '<tr>';
// markup +=
// '<td><input class='custom-checkbox' type='checkbox' name='record[]'></td>';
// markup +=
// '<td><input type='hidden' name='guru[]' value="$(guru)"> $(namaText) </td>';
            --}}
    {{-- var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + guru +
                    "</td><td>" + namap + "</td><td>" + namar + "</td><td>" + namak + "</td><td>" +
                    mulay + "</td><td>" + akhiri + "</td></tr>";
                $("table tbody").append(markup);
            }); 

    Find and remove selected table rows
            $(".delete-row").click(function () {
                $("table tbody").find('input[name="record"]').each(function () {
                    if ($(this).is(":checked")) {
                        $(this).parents("tr").remove();
                    }
                });
            }); 
     });

    </script>  --}}
</head>

<body>
    <form class="form" action="{{route('tambah-uwaw')}}" method="POST">
        @csrf
        <div class="content-header">
            <div class="row mb-9">
                <div class="col-sm-7">
                    <div class="card" style="background:#8186d5">
                        <div class="card-header">
                            <h3 class="card-title"> Tambah Jadwal</h3>
                        </div>
                        <div class="card-body" style="background:#baabda">
                            <div class="row">
                                <div class="form-group">
                                    <label for="exampleInputid_guru"><i class="fas fa-user-circle"
                                            style='font-size:24px'></i> Nama Guru </label>

                                    <select id="nama_guru" name="nama_guru" class="form-control">
                                        <option value="">Pilih Guru</option>
                                        @foreach ($guru as $ab)
                                        <option value="{{$ab->id}}" data-text="{{$ab->nama_guru}}">{{$ab->nama_guru}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                &emsp; &emsp;&emsp;&emsp;
                                <div class="form-group">
                                    <label for="exampleInputpelajaran"><i class='fas fa-book'
                                            style='font-size:24px'></i>
                                        Nama Pelajaran</label>

                                    <select id="pelajaran" class="form-control" placeholder="Piih Pelajaran">
                                        <option value="">Pilih Pelajaran</option>
                                        @foreach ($pelajaran as $ib)
                                        <option value="{{$ib->id}}" data-text="{{$ib->nama_pelajaran}}">
                                            {{$ib->nama_pelajaran}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                &emsp; &emsp; &emsp;
                                <div class="form-group">
                                    <label for="exampleInputruang"><i class='fas fa-city' style='font-size:24px'></i>
                                        Nama Ruang</label>

                                    <select id="ruang" class="form-control">
                                        <option value="">Pilih Ruangan</option>
                                        @foreach ($ruang as $ir)
                                        <option value="{{$ir->id}}" data-text="{{$ir->jumlah_gedung}}">
                                            {{$ir->jumlah_gedung}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                &emsp; &emsp;
                                <div class="form-group">
                                    <label for="exampleInputkelas"><i class='fas fa-school' style='font-size:24px'></i>
                                        Nama Kelas</label>
                                    <select id="kelas" class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        @foreach ($kelas as $ik)
                                        <option value="{{$ik->id}}" data-text="{{$ik->kelas}}">{{$ik->kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                &emsp;&emsp; &emsp;

                                <div class="form-group">
                                    <label>Mulai: </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                        </div>
                                        <input type="time" data-text="masuk" name="masuk" id="masuk">
                                    </div><br>
                                </div>
                                &emsp;&emsp; &emsp;
                                <div class="form-group">
                                    <label>Akhir: </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                        </div>
                                        <input type="time" data-text="keluar" name="akhir" id="akhir">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal: </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" id="tanggal" name="tanggal">
                                    </div>
                                </div>
                                &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp;
                                <div>
                                    <label>KLIK</label>
                                    <div>
                                        <button type="button" class="add-row">Tambah</button>
                                    </div>
                                    &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <div class="row mb-9">
                <div class="col-sm-7">
                    <div class="card" style="background-color:burlywood">
                        <div class="row">
                            <div class="card-body">
                                <table>
                                    <thead style="background:royalblue">
                                        <tr>
                                            <th>Select</th>
                                            <th>Guru</th>
                                            <th>Pelajaran</th>
                                            <th>Ruang</th>
                                            <th>Kelas</th>
                                            <th>Mulai</th>
                                            <th>Akhir</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background:skyblue">
                                    </tbody>
                                </table>
                                <button type="button" class="delete-row btn-danger">Delete Row</button>
                                &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp;
                                &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp;
                                &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp;

                                <button type="submit" class="btn btn-danger">submit</button>
                            </div>
                        </div>
                    </div>
</body>

@endsection

@push('scripts')

<script>
    $(document).ready(function () {
        $(".add-row").click(function () {
            var guruk = $("#nama_guru").children('option:selected').val();
            var namaText = $("#nama_guru").children('option:selected').data(
                'text');
            var pelajaranh = $("#pelajaran").children('option:selected').val();
            var namapa = $("#pelajaran").children('option:selected').data(
                'text');
            var ruangh = $("#ruang").children('option:selected').val();
            var namara = $("#ruang").children('option:selected').data(
                'text');
            var kelash = $("#kelas").children('option:selected').val();
            var namaka = $("#kelas").children('option:selected').data(
                'text');
            var mulay = $("#masuk").val();
            var akhiri = $("#akhir").val();
            var tanggal = $("#tanggal").val();

            if (guruk == '' || guruk == null || pelajaranh == '' || pelajaranh == null) {
                alert('Jangan lupa diisi ya.');
                return;
            }

            var markup = `<tr>`;
            markup +=
                `<tr><td><input class='custom-checkbox' type='checkbox' name='record'></td>`;
            markup +=
                `<td><input type='hidden' name='nama_guru[]' value="${guruk}"> ${namaText} </td>`;
            markup +=
                `<td><input type='hidden' name='pelajaran[]' value="${pelajaranh}"> ${namapa} </td>`;
            markup +=
                `<td><input type='hidden' name='ruang[]' value="${ruangh}"> ${namara} </td>`;
            markup +=
                `<td><input type='hidden' name='kelas[]' value="${kelash}"> ${namaka} </td>`;
            markup +=
                `<td><input type='hidden' name='masuk[]' value="${mulay}"> ${mulay} </td>`;
            markup +=
                `<td><input type='hidden' name='keluar[]' value="${akhiri}"> ${akhiri} </td>`;
            markup +=
                `<td><input type='hidden' name='tanggal[]' value="${tanggal}"> ${tanggal} </td>`;

            markup += `</tr>`;

            console.log(markup);

            $("table tbody").append(markup);
        });

        $(".delete-row").click(function () {

            $("table tbody").find('input[name="record"]').each(function () {
                if ($(this).is(":checked")) {
                    $(this).parents("tr").remove();
                }
            });
        });
    });

</script>

<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script scr="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>



@endpush
