<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRAVER</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css" />
    <script src="dist/app.js" defer></script>
</head>
<body>
    <v-app id='app'>
            <v-content>
                <v-container fluid class="background">
                    <router-view></router-view>
                    <iframe style="width: 100%; height: 80vh; border-style: solid; border-width: 1px; border-color: #777" src="{{env('DOCASSEMBLE_URL')}}/interview?i=docassemble.braverinterviews:data/questions/InitialInterview.yml&brave_api=http://braver.test:81/api/interview_next"></iframe>
                </v-container>
            </v-content>
    </v-app>
</body>
<script>
</script>
</html>
