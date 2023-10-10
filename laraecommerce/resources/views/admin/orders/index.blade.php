
 @extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Compras
                 
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr> 
                                <th>ID da Compra</th>
                                <th>Código</th>
                                <th>Usuário</th>
                                <th>Modo de Pagamento</th>
                                <th>Data da Compra</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders  as $orderItem)
                            <tr>
                                <td>{{ $orderItem->id }}</td>
                                <td>{{ $orderItem->tracking_no }}</td>
                                <td>{{ $orderItem->fullname }}</td>
                                <td>{{ $orderItem->payment_mode }}</td>
                                <td>{{ $orderItem->created_at->format('d-m-Y') }}</td>
                                <td>{{ $orderItem->status_message }}</td>
                                <td><a href="{{ url('admin/orders/'.$orderItem->id)}}" class="btn btn-primary">Ver</a></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">Nenhum produto disponível</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
