<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Website Creation In Progress') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1.2rem;
            color: #777;
            margin-bottom: 2rem;
        }
        .loading {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 3px solid #ccc;
            border-top-color: #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>{{ __('Website Creation In Progress') }}</h1>
    <p>{{ __('Your new and exciting website is currently under construction.') }}</p>
    <div class="loading"></div>
</div>

<script>
    let loginToken = '';
    const urlParams = new URLSearchParams(window.location.search);
    let targetUrl = window.location.href; // Target URL for redirection

    if(urlParams.has('aupanier_login_token')){
        loginToken = '?aupanier_login_token='+urlParams.get('aupanier_login_token');
        targetUrl = targetUrl.split('?')[0]
    }
    function checkRedirection(url, targetUrl) {
        fetch(url, { method: 'head', redirect: 'follow' })
            .then(response => {
                if (response.url === targetUrl) {
                    //alert(`Redirection detected to ${targetUrl}!`);
                } else {
                    window.location.href = url+loginToken;
                    //alert(`No redirection to ${targetUrl}.`);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // alert('An error occurred while checking redirection.');
            });
    }

    // Usage
    const urlToCheck =  window.location.origin; // URL to check for redirection

    setInterval(() => {
        checkRedirection(urlToCheck, targetUrl);
    }, 3000)
</script>
</body>
</html>
