<?php

namespace app\View;

/* use app\Model\ClientsModel;

require_once "../../vendor/autoload.php"; */

class ClientsView {
    public function drawClients($clients) {

        echo "<table>";

        foreach ($clients as $client) {
            echo "<tr>";

            echo "<td>".$client['CodigoCliente'] . "</td>" . "<td>".$client['NombreCliente'] . "</td>" . "<td>".$client['Telefono'] . "</td>" . "<td>".$client['Ciudad'] . "</td>";

            echo "</tr>";
        }

        echo "</table>";
    }
}

/* $clientes = new ClientsModel();

$clients = $clientes->getClients();

$view = new ClientsView();

$view->drawClients($clients);
 */
