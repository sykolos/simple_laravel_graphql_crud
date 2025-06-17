<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8/>
    <title>Laravel GraphQL Playground</title>
    <link rel="stylesheet"
          href="//cdn.jsdelivr.net/npm/graphql-playground-react@1.7.26/build/static/css/index.css"/>
    <link rel="shortcut icon"
          href="//cdn.jsdelivr.net/npm/graphql-playground-react@1.7.26/build/favicon.png"/>
    <script src="//cdn.jsdelivr.net/npm/graphql-playground-react@1.7.26/build/static/js/middleware.js"></script>
</head>
<body>
<div id="root"/>
<script>
    window.addEventListener('load', function () {
        GraphQLPlayground.init(document.getElementById('root'), {
            endpoint: '/graphql'
        })
    })
</script>
</body>
</html>
