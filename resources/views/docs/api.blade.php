<!DOCTYPE html>
<html>
<head>
    <title>My API Documentation</title>
     <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist@5.11.0/swagger-ui.css" />
</head>
<body>
    <div id="swagger-ui"></div>

    <script src="https://unpkg.com/swagger-ui-dist@5.11.0/swagger-ui-bundle.js" crossorigin></script>

    <script>
        window.onload = function() {
            window.ui = SwaggerUIBundle({
                url: "{{ asset('openapi.yaml') }}", // Replace 'openapi.yaml' with your actual YAML file path
                dom_id: '#swagger-ui'
            });
        }
    </script>
</body>
</html>