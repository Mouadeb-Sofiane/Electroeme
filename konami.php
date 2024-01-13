<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konami Code</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        #message {
            display: none;
            font-size: 24px;
            color: green;
        }
    </style>
</head>
<body>

<div id="message">Code Konami activé !</div>

<script>
    const konamiCode = ['ArrowUp', 'ArrowDown', 'ArrowRight', 'ArrowUp', 'ArrowDown', 'ArrowLeft'];
    let userInput = [];

    document.addEventListener('keydown', function (event) {
        userInput.push(event.key);

        // Vérifie si l'entrée de l'utilisateur correspond au code Konami
        if (userInput.length === konamiCode.length && userInput.every((value, index) => value === konamiCode[index])) {
            showMessage();
            userInput = []; // Réinitialise l'entrée utilisateur
        }
    });

    function showMessage() {
        const message = document.getElementById('message');
        message.style.display = 'block';
    }
</script>

</body>
</html>
