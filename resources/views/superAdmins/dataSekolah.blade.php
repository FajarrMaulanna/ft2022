@extends("layouts.dashboard")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <p class="fs-3 fw-bold">Daftar Sekolah</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 rowData">
            <table class="table table-responsive tbData" id="table_id" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jumlah Peserta</th>
                        <th>Alamat</th>
                        <th>Kontak Sekolah</th>
                        <th>Email</th>
                        <th>PJ</th>
                        <th>Jabatan</th>
                        <th>Kontak PJ</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schools as $school)
                    <tr>
                        <td>
                            <Span>
                                @if ($school->logo == null)
                                <img src='img/school/logo' alt=""> {{ $school->nama }}
                                @else
                                <img src='img/school/{{ $school->logo }}' alt=""> {{ $school->nama }}
                                @endif
                            </Span>
                        </td>
                        <td>{{ $school->networks->count() }}</td>
                        <td>{{ $school->address }}</td>
                        <td>{{ $school->telepon }}</td>
                        <td>{{ $school->email }}</td>
                        <td>{{ $school->pj }}</td>
                        <td>{{ $school->jabatan_pj }}</td>
                        <td>{{ $school->hp_pj }}</td>
                        <td>
                            <form class="d-flex justify-content-center" action="delete/{{ $school->id }}" method="post">
                                <button type="submit" class="btnDel">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

        let labels = document.querySelectorAll(".tbData label"),
            inputs = document.querySelectorAll(".tbData .check"),
            spans = document.querySelectorAll(".tbData span i"),
            i

        i = 0
        labels.forEach(label=>{
            label.setAttribute('for', `${i}`)
            a = "<i class='bx bx-x'></i>"
            label.innerHTML = a
            label.onclick = () =>{
                if(a === "<i class='bx bx-x'></i>"){
                    a = "<i class='bx bx-check'></i>"
                    label.classList.add("hijau")
                }else{
                    a = "<i class='bx bx-x'></i>"
                    label.classList.remove("hijau")
                }
                label.innerHTML = a
            }
            i++
        })

        for(let i = 0; i < spans.length; i++){
            spans[i].addEventListener("click", ()=>{
                spans[i].parentElement.classList.replace("d-block", "d-none")
                labels[i].parentElement.classList.replace("d-none", "d-block")
            })
        }

        i = 0
        inputs.forEach(input=>{
            input.setAttribute('id', `${i}`)
            i++
        })


    </script>

@endsection
