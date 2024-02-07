<?php

if (!function_exists('getStatusColor')) {
    function getStatusColor($status) {
        switch($status) {
            case 'Concluido':
                return 'success';
            case 'Pendente':
                return 'primary';
            case 'Cancelado':
                return 'danger';
            case 'Reagendado':
                return 'warning';
            case 'Em andamento':
                return 'info';
            default:
                return 'secondary';
        }
    }
}