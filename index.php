<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP-DISCHI-JSON</title>

</head>

<body>
    <div id="app">

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <ul v-for="(disk , index) in disks" :key=index">
                        <li>{{disk.title}}
                            {{disk.author}}
                        </li>
                    </ul>

                </div>
            </div>
        </div>


    </div>


</body>

</html>