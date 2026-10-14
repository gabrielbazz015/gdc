<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meu Perfil - GDC</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>
        body {
            min-height: 100vh;
            background:
                linear-gradient(rgba(20, 20, 45, 0.72), rgba(20, 20, 45, 0.72)),
                url('/images/fundo-sesi.png') center/cover fixed;
        }

        .navbar {
            background: transparent;
        }

        .perfil-card {
            max-width: 700px;
            margin: 80px auto;
            background: rgba(255, 255, 255, 0.96);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .perfil-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6355e8, #7b6ff0);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            margin: 0 auto 20px;
        }

        .info-box {
            background: #f5f5f8;
            border-radius: 14px;
            padding: 16px 20px;
            margin-bottom: 14px;
        }

        .info-label {
            color: #777;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .info-value {
            font-size: 17px;
            font-weight: 600;
            color: #222;
        }

        .btn-gdc {
            background: #6355e8;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 25px;
        }

        .btn-gdc:hover {
            background: #5144d0;
            color: white;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            GDC
        </a>

        <div class="d-flex align-items-center gap-3">

            <a
                href="{{ route('home') }}"
                class="btn btn-outline-light btn-sm"
            >
                <i class="bi bi-house me-1"></i>
                Início
            </a>

            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf

                <button
                    type="submit"
                    class="btn btn-outline-light btn-sm"
                >
                    <i class="bi bi-box-arrow-right me-1"></i>
                    Sair
                </button>
            </form>

        </div>

    </div>
</nav>


<div class="container">

    <div class="perfil-card text-center">

        <div class="perfil-icon">
            <i class="bi bi-person"></i>
        </div>

        <h2 class="fw-bold mb-1">
            {{ session('usuario_nome') }}
        </h2>

        <p class="text-muted mb-4">
            Meu perfil
        </p>


        <div class="text-start">

            <div class="info-box">
                <div class="info-label">
                    <i class="bi bi-person me-2"></i>
                    Nome
                </div>

                <div class="info-value">
                    {{ session('usuario_nome') }}
                </div>
            </div>


            <div class="info-box">
                <div class="info-label">
                    <i class="bi bi-tag me-2"></i>
                    Tipo de usuário
                </div>

                <div class="info-value text-capitalize">
                    {{ session('usuario_tipo') }}
                </div>
            </div>


            <div class="info-box">
                <div class="info-label">
                    <i class="bi bi-hash me-2"></i>
                    ID do usuário
                </div>

                <div class="info-value">
                    {{ session('usuario_id') }}
                </div>
            </div>

        </div>


        <div class="mt-4">

            <a
                href="{{ route('home') }}"
                class="btn btn-gdc"
            >
                <i class="bi bi-arrow-left me-2"></i>
                Voltar para o início
            </a>

        </div>

    </div>

</div>

</body>
</html>
