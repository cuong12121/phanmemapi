<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Đăng nhập</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style type="text/css">
            body {
                font-family: "Comic Sans MS", cursive;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                background: #f5f5f5;
                color: #333;
            }

            .container {
                width: 100%;
                max-width: 400px;
            }

            .card {
                width: 100%;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
                color: #333;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            input {
                padding: 10px;
                margin-bottom: 12px;
                border: 1px solid #ddd;
                border-radius: 4px;
                transition: border-color 0.3s ease-in-out;
                outline: none;
                color: #333;
            }

            input:focus {
                border-color: #ff4500;
            }

            button {
                background-color: #ff4500;
                color: #fff;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s ease-in-out;
            }

            button:hover {
                background-color: #e63900;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <h2>Login</h2>
                <form method="post" action='{{ route('login') }}'>
                    @csrf
                    <input type="text" id="username" name="username" placeholder="Username" required />
                    <input type="password" id="password" name="password" placeholder="Password" required />
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>
