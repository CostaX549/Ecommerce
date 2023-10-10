{{-- @extends('layouts.admin')

@section('title', 'Detalhes da Minha Compra')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <h2 class="orderItems-history">Informações do Comprador</h2>

    <div class="checkout-section p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Nome Completo:</th>
                        <td>{{ $order->fullname }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $order->email }}</td>
                    </tr>
                    <tr>
                        <th>Número de Telefone:</th>
                        <td>{{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <th>PIN:</th>
                        <td>{{ $order->pincode }}</td>
                    </tr>
                    <tr>
                        <th>Endereço:</th>
                        <td>{{ $order->address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h2 class="orderItems-history">Informações da Compra</h2>

    <div class="checkout-section p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>ID:</th>
                        <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <th>Método de Pagamento:</th>
                        <td>{{ $order->payment_mode }}</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td>{{ $order->status_message }}</td>
                    </tr>
                    @if($order->payment_mode === "Pagamento pelo Paypal")
                    <tr>
                        <th>ID do Pagamento:</th>
                        <td>{{ $order->payment_id }}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="container" id="trending">
        @php
        $totalPrice = 0;
        @endphp
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Imagem</th> <!-- Adicione a coluna da imagem aqui -->
                        <th>Cor</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($order->orderItems as $orderItem)
                    <tr>
                        <td>{{ $orderItem->product->name }}</td>
                        <td>
                          @if($orderItem->product->productImages->count() > 0)
                          <img src="{{ asset($orderItem->product->productImages[0]->image) }}" alt="Imagem do Produto" width="250">
                          @endif
                      </td>
                        <td>
                            @if($orderItem->productColor)
                            <label class="color-label" style="background-color: {{ $orderItem->productColor->color->code }};">
                                {{ $orderItem->productColor->color->name }}
                            </label>
                            @endif
                        </td>
                        <td>R${{ $orderItem->price }}</td>
                        <td>{{ $orderItem->quantity }}</td>
                        <td>R${{ $orderItem->quantity * $orderItem->price }}</td>
                    </tr>
                    @php
                    $totalPrice += $orderItem->quantity * $orderItem->price;
                    @endphp
                    @empty
                    <tr>
                        <td colspan="5">Nenhum produto adicionado no carrinho.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="checkout-section p-0">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Total da Compra:</th>
                            <td>R${{ $totalPrice }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Informações do Comprador
                   
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr> 
                                <th>Nome Completo:</th>
                                <th>Email:</th>
                                <th>Número de Telefone:</th>
                                <th>PIN:</th>
                                <th>Endereço</th>
                       </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td>{{ $order->fullname }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->pincode }}</td>
                                <td>{{ $order->address }}</td>
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 grid-margin">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Informações da Compra
                
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr> 
                                <th>ID:</th>
                                <th>Método de Pagamento:</th>
                                <th>Status:</th>

                       </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->payment_mode }}</td>
                                <td>{{ $order->status_message }}</td>
                               
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    
    <div class="col-md-12 grid-margin">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Produtos
                  
                </h4>
            </div>
            @php
            $totalPrice = 0;
            @endphp
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr> 
                        <th>Produto</th>
                        <th>Imagem</th> <!-- Adicione a coluna da imagem aqui -->
                        <th>Cor</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                       </tr>
                        </thead>
                        <tbody>
                            @forelse ($order->orderItems as $orderItem)
                            <tr>
                                <td>{{ $orderItem->product->name }}</td>
                                <td>
                                  @if($orderItem->product->productImages->count() > 0)
                                  <img src="{{ asset($orderItem->product->productImages[0]->image) }}" alt="Imagem do Produto" width="250">
                                  @endif
                              </td>
                                <td>
                                    @if($orderItem->productColor)
                                    <label class="color-label" style="background-color: {{ $orderItem->productColor->color->code }};">
                                        {{ $orderItem->productColor->color->name }}
                                    </label>
                                    @endif
                                </td>
                                <td>R${{ $orderItem->price }}</td>
                                <td>{{ $orderItem->quantity }}</td>
                                <td>R${{ $orderItem->quantity * $orderItem->price }}</td>
                            </tr>
                            @php
                            $totalPrice += $orderItem->quantity * $orderItem->price;
                            @endphp
                            @empty
                            <tr>
                                <td colspan="5">Nenhum produto adicionado no carrinho.</td>
                            </tr>
                            @endforelse
                         
                        </tbody>
                    </table>
                    <h4 class="pt-2     ">Total da Compra:   R${{ $totalPrice }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
