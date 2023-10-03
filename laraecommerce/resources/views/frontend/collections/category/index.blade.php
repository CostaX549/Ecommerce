@extends('layouts.app')

@section('title', 'Todas as Categorias')

@section('content')

<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Nossas Categorias</h4>
                </div>
                @forelse($categories as $categoryItem)
             
                <div class=" col-md-12">
                    <div class="category-card">
                        <a href="{{ url('/collections/'.$categoryItem->slug) }}">
                            <div class="category-card-img">
                                <img src="{{ asset("$categoryItem->image") }}" class="img-fluid" alt="Laptop">
                            </div>
                            <div class="category-card-body">
                                <h5>{{  $categoryItem->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                 <div class="col-md-12">
                    <h5>Nenhuma categoria disponível.</h5>
                 </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection