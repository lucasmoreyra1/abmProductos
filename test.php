<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
      <button class="btn">crear nuevo Elemento</button>
    </header>

    <form action="" method="get">
        <section class="container"></section>
    </form>

    <script>
        document.querySelector(".btn").addEventListener("click", e => {
          const newElement = document.createElement("input");
          newElement.textContent = "soy un div creado con javascript";
          document.querySelector(".container").appendChild(newElement);
        });
    </script>
</body>
</html>