<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Validar Tu Cedula EC</title>
</head>
	<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff; /* Color celeste */
        
        .formulario {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra ligera */
        }
        label {
            font-weight: bold;
        }
        input {
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff; /* Azul */
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el mouse */
        }
    </style>
<body>
	  <div class="formulario">
        <h1>Valida Tu Cédula EC</h1>
        <label for="cedula" style="font-family: Arial, sans-serif;">Cédula:</label>
        <br>
        <input type="number" id="cedula">
        <br>
        <button onclick="validarCedula()">Validar</button>
    </div>
    <script>
        function validarCedula() {
            const cedula = document.getElementById('cedula').value;
            const url = `http://localhost:3000/Cedula/${cedula}`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const mensaje = `
                       ${data.mensaje}
                    `;
                    alert(`${mensaje}`);
                })
                
        }
    </script>
</body>
</html>
