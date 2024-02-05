<div class="navigation">
    <div class="nav-scroll">
        <ul>
            <div class="logo-container" style="display: flex; align-items: center; margin-bottom: 10px;">
                <li>
                    <a href="#">
                        <span class="icon" style="margin-right: 30px;">
                            <!-- Certifique-se de que o caminho está correto e ajuste conforme necessário -->
                            <img src="{{ asset('img/logo2.png') }}" alt="Logo" style="width: 200px; margin-top: -50px;">
                        </span>
                    </a>
                </li>
            </div>

            <div class="separator" style="margin-bottom: 20px;"></div>

            <li>
                <a href="{{ route('pacientes.index')}}">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title">Pacientes</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="time-outline"></ion-icon>
                    </span>
                    <span class="title">Horários Disponíveis</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                    <span class="title">Mensagens</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Ajuda</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Configurações</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Senha</span>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">{{ __('Sair') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
