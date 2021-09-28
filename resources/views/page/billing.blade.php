<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div id="user">
                <div class="section-title">
                    <h2>Lista de Facturas</h2>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th colspan="2">
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)

                        {{-- {{$item}} --}}
                        <tr>
                            <td width="10px">{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td width="10px">
                                <a href="{{ route('page.billing.generate', $item->id)}}" class="btn btn-danger btn-sm">Imprimir</a>
                            </td>
                            {{-- <td width="10px">
                                <a href="{{ route('page.user.show', $item->id)}}" class="btn btn-danger btn-sm">factura</a>
                            </td> --}}
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
