<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap" rel="stylesheet">

        <title>HTML @yield('title')</title>

        <style>
            body {
                font-family: "Sarabun", sans-serif;
                font-weight: 100;
                font-style: normal;



                background-image: url('/5.jpg');

                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
            }

            input[type="text"],
            input[type="date"],
            input[type="number"],
            select, textarea {
                border: 1px solid #686767ff;
                border-radius: 3px;
                padding: 5px;
            }

            .is-valid {
                border: 2px solid #28a745 !important;
                background-color: #e8f5e9;
            }

            .is-invalid {
                border: 2px solid #dc3545 !important;
                background-color: #f8d7da;
            }

                    .table {
                width: 100%;
                border-collapse: collapse; /* ทำให้เส้นขอบติดกัน */
            }
            .table th, .table td {
                padding: 12px 8px; /* เพิ่มช่องว่างให้ดูไม่อึดอัด */
                text-align: left;
                border-bottom: 1px solid #9b9b9b; /* เส้นขีดด้านล่างของทุกช่อง */
            }
            .table thead th {
                border-bottom: 2px solid #9b9b9b; /* เส้นใต้หัวข้อให้เข้มกว่านิดหน่อย */
            }
        </style>

        @stack('styles')
    </head>

    <body>
        <div class="container mt-4">
            @yield('content')
        </div>

        @stack('scripts')
    </body>
</html>
