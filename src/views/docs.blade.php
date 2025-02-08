<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            transition: background 0.3s, color 0.3s;
        }

        h1 {
            text-align: center;
            font-weight: 600;
        }

   
        .dark-mode {
            background-color: #1e1e1e;
            color: #fff;
        }
 
        .toggle-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .toggle-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
        }

        .toggle-switch {
            width: 50px;
            height: 25px;
            background-color: #ccc;
            border-radius: 50px;
            position: relative;
            margin-left: 10px;
            transition: background 0.3s;
        }

        .toggle-switch::before {
            content: "";
            position: absolute;
            top: 3px;
            left: 4px;
            width: 20px;
            height: 20px;
            background-color: white;
            border-radius: 50%;
            transition: transform 0.3s;
        }

        .dark-mode .toggle-switch {
            background-color: #4caf50;
        }

        .dark-mode .toggle-switch::before {
            transform: translateX(25px);
        }

        /* Table Styles */
        .table-container {
            max-width: 900px;
            margin: auto;
            overflow-x: auto;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #007bff;
            color: white;
            font-weight: 600;
        }

        tr:hover {
            background-color: #f1f1f1;
            transition: 0.3s;
        }

        .dark-mode table {
            background: #222;
            color: white;
        }

        .dark-mode th {
            background: #0056b3;
        }

        .dark-mode tr:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

    <h1>API Documentation</h1>

 
    <div class="toggle-container">
        <label class="toggle-label">
            Dark Mode
            <div class="toggle-switch" id="darkModeToggle"></div>
        </label>
    </div>

 
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Method</th>
                    <th>URI</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($routes as $route)
                    <tr>
                        <td>{{ $route['method'] }}</td>
                        <td>{{ $route['uri'] }}</td>
                        <td>{{ $route['action'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
    
        const toggle = document.getElementById("darkModeToggle");
        toggle.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");
        });
    </script>

</body>
</html>
