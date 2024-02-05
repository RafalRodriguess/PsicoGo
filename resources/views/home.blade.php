@extends('layouts.app')

@section('content')
    <div class="main">
        <!-- ======================= Cards ================== -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Consultas Agendadas</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="calendar-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Atendimentos Concluídos</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Avaliações Recebidas</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">$7,842</div>
                    <div class="cardName">Receita Mensal</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>
        </div>

        <!-- ================ Lista de Detalhes do Pedido ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Consultas Agendadas</h2>
                    <a href="#" class="btn">Ver Todos</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Paciente</td>
                            <td>Data</td>
                            <td>Hora</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>João Silva</td>
                            <td>15/02/2024</td>
                            <td>10:00</td>
                            <td><span class="status delivered">Concluída</span></td>
                        </tr>

                        <tr>
                            <td>Maria Oliveira</td>
                            <td>16/02/2024</td>
                            <td>15:30</td>
                            <td><span class="status pending">Pendente</span></td>
                        </tr>

                        <tr>
                            <td>Carlos Pereira</td>
                            <td>17/02/2024</td>
                            <td>09:45</td>
                            <td><span class="status return">Cancelada</span></td>
                        </tr>

                        <tr>
                            <td>Ana Souza</td>
                            <td>18/02/2024</td>
                            <td>14:00</td>
                            <td><span class="status inProgress">Em Andamento</span></td>
                        </tr>

                        <!-- ... Outras consultas ... -->

                    </tbody>
                </table>
            </div>

            <!-- ================= Pacientes Recentes ================ -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Pacientes Recentes</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('img/avatar.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>David<br> <span>Rodrigues</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('img/avatar.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>Pablo<br> <span>Gabriel</span></h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('img/avatar.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>Índia</span></h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('img/avatar.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>Índia</span></h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('img/avatar.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>Índia</span></h4>
                        </td>
                    </tr>

                    <!-- ... Outros pacientes ... -->

                </table>
            </div>
        </div>
    </div>
@endsection
