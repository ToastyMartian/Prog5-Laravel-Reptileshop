 @if (count($product) > 1)
     @foreach($product as $item)
         <div class="card p-3">
             <h3><a href="product/{{$item->id}}">{{$item->title}}</a></h3>
             <a href="#" class="btn btn-primary">Zie details</a>
         </div>
     @endforeach
 @else
     <p>Er zijn geen (zoek)resultaten gevonden, probeer iets anders te zoeken.</p>
 @endif

