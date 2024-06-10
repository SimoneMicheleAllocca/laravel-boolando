@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tutti i nostri prodotti</h1>
        <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4> {{ $product['name'] }}</h4>
                            <ul>
                                @foreach (array_reverse($product ['badges']) as $badge)
                                <li class="{{ $badge ['type'] === 'tag' ? 'bg-succes' : 'bg-danger'}}"> {{ $badge['value']}}
                                    @if ( $badge ['type'] === 'discount')
                                    {{ $product['price'] * (((int) filter_var($badge['value'],
                                    )))}}
                                        
                                    @endif

                                </li>
                                    
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach ($i = 0; $i < $count; $i++)
                
            
        </div>
    </div>
@endsection