<!DOCTYPE html>
<html>
<head>
    <title>Récapitulatif de Location - Shel</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .pdf___header {
            text-align: center;
            margin-bottom: 20px;
        }
        .pdf___header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
        h1, h2 {
            color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="pdf___header">
        <img src="{{ public_path('images/logo_shel.png') }}" alt="Logo Shel">
        <h1>Récapitulatif de Location</h1>
        <p>Magasin de location de jeux de société - Shel</p>
    </div>

    <div>
        <p>Date de début de location: <strong>{{ $start_date }}</strong></p>
        <p>Date de fin de location: <strong>{{ $end_date }}</strong></p>
        <br/>
        <h2>Détails de la location</h2>
        <div>
            <p>Client: {{ $client_name }}</p>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom du Jeu</th>
                        <th>Date de Début</th>
                        <th>Date de Fin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->game_name }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br/>
        <h2>Mentions Légales</h2>
        <p>Ce sont des mentions légales</p>
    </div>

    <div class="footer">
        <p>Merci d'avoir choisis SHEL pour vos locations de jeux de société !</p>
    </div>

</body>
</html>
