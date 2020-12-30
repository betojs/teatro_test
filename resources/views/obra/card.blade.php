



@if($obra)
    @foreach($obra as $obraItem )
    
    <div class="col-sm">

        <div class="card" style="width: 18rem; height: 11rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $obraItem->nombre}}</h4>
                <h6 class="card-subtitle mb-2 ">Fecha: {{$obraItem->fechaobra}}</h6>
                <h6 class="card-subtitle mb-2 ">Sala: {{$obraItem->sala}}</h6>
                <h7 class="card-subtitle mb-2 text-muted">Puestos disponibles: {{$obraItem->disponibles}}</h7>
                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <br>
                
                {{-- {{$dti = new DateTime($obraItem->fechaobra)}} --}}
                {{-- {{$dt}} --}}
                @if($obraItem->disponibles > 0 && $obraItem->fechaobra > date('Y-m-d H:i:s'))
                <a href="{{route('venta.create', $obraItem->cod_obra)}}">Comprar Entrada</a>

                {{-- <a href="#" class="card-link">compra</a> --}}
                @else
                <p style="color: rgb(160, 3, 3)">Agotadas</p>

                @endif
            </div>
        </div>
    </div> 
    @endforeach

@else
    <div class="col">
        <h2>No hay obras disponibles</h2>
    </div>
@endif
