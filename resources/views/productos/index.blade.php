

@extends('base')

@section('contenido')

<div class="d-flex">

    @foreach ($data as $producto)
    {{json_encode($producto)}}

    <form action="/productos" method="POST">
        @csrf
        <section class="py-5">
            <div class="container">
                <div class="col mb-5">
                    <div class="card h-100">

                        <input type="hidden" name="id"  value="{{ $producto->id }}">
                        <input type="hidden" name="nombre"  value="{{ $producto->nombre }}">
                        <input type="hidden" name="precio"  value="{{ $producto->precio }}">
                        <input type="hidden" name="categoria"  value="{{ $producto->categoria }}">



                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                            alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $producto->nombre }}</h5>
                                $ {{ $producto->precio }}
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button class="btn btn-outline-dark mt-auto" type="submit">Agregar Al
                                    Carrito</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endforeach
<!-- Modal -->


</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if (empty($carrito))
            no hay productos
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{$carrito->id}} --}}
                    @foreach ($carrito as $productos)
                    {{ json_encode($productos->[nombre]) }}
                    @endforeach
                </tbody>
            </table>




            @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>



 @endsection

