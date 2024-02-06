<div class="userbar">
    <div class="topbar">
        <div class="toggle" onclick="toggleNavigation()">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
    </div>

    <div class="user-dropdown">
        <div class="user">
            <img src="{{ asset('img/avatar.jpg') }}" alt="">
        </div>
        <div class="dropdown-content">
            <p>Nome do Usuário</p>
            <a href="#">Meu Perfil</a>
            <a href="#">Configurações</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
