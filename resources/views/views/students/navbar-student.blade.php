{{-- <ul class="nav nav-tabs"> --}}
<ul class="nav nav-tabs flex-column flex-sm-row">
    <li class="nav-item flex-sm-fill text-sm-center">
        <a class="nav-link {{ $active == 'nuevo' ? 'active' : '' }}" href="{{route('students-new')}}">Nuevo</a>
    </li>
    <li class="nav-item flex-sm-fill text-sm-center">
        <a class="nav-link {{ $active == 'editar' ? 'active' : '' }}" href="#">Editar</a>
      </li>
    <li class="nav-item flex-sm-fill text-sm-center">
        <a class="nav-link {{ $active == 'eliminar' ? 'active' : '' }}">Eliminar</a>
    </li>
    <li class="nav-item flex-sm-fill text-sm-center">
        <a class="nav-link {{ $active == 'historico' ? 'active' : '' }}" href="{{route('students-history')}}">Historico</a>
    </li>
</ul>