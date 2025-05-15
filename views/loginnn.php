<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocobox - Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #d4a373;
            --secondary-color: #fefae0;
            --dark-color: #2a2a2a;
            --light-color: #ffffff;
            --error-color: #e63946;
            --success-color: #38b000;
        }
        
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: var(--light-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .navbar {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .logo__nombre {
            color: var(--light-color);
            font-size: 24px;
            margin: 0;
        }
        
        .logo__bold {
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .auth-btn {
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            color: var(--light-color);
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .auth-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        .register-btn {
            background-color: var(--primary-color);
        }
        
        .login-btn {
            background-color: #3a86ff;
        }
        
        .home-btn {
            background-color: var(--dark-color);
            border: 1px solid var(--primary-color);
        }
        
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .login-card {
            background-color: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 450px;
            padding: 30px;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-color);
            margin-bottom: 15px;
        }
        
        .login-title {
            color: var(--primary-color);
            margin: 0;
            font-size: 28px;
        }
        
        .login-subtitle {
            color: var(--secondary-color);
            margin: 5px 0 0;
            font-size: 14px;
            font-weight: normal;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-color);
            font-weight: 500;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--light-color);
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(212, 163, 115, 0.3);
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background-color: var(--primary-color);
            color: var(--light-color);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .btn:hover {
            background-color: #c08d5f;
            transform: translateY(-2px);
        }
        
        .btn-block {
            display: block;
            width: 100%;
        }
        
        .login-footer {
            text-align: center;
            margin-top: 20px;
        }
        
        .login-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .login-link:hover {
            text-decoration: underline;
        }
        
        .message {
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .error-message {
            background-color: rgba(230, 57, 70, 0.2);
            border-left: 4px solid var(--error-color);
            color: var(--error-color);
        }
        
        .success-message {
            background-color: rgba(56, 176, 0, 0.2);
            border-left: 4px solid var(--success-color);
            color: var(--success-color);
        }
        
        footer {
            text-align: center;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.9);
            color: var(--primary-color);
            font-size: 14px;
            margin-top: auto;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            cursor: pointer;
        }
        
        .password-requirements {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 6px;
            padding: 10px;
            margin-top: 10px;
            font-size: 13px;
        }
        
        .requirement {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        
        .requirement i {
            margin-right: 5px;
            width: 15px;
            text-align: center;
        }
        
        .requirement.valid {
            color: var(--success-color);
        }
        
        .requirement.invalid {
            color: var(--error-color);
        }
        
        /* Responsive */
        @media (max-width: 576px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
            
            .auth-buttons {
                width: 100%;
                justify-content: center;
            }
            
            .login-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2 class="logo__nombre">
            Blog<span class="logo__bold">ChocoBox</span>
        </h2>
        
        <div class="auth-buttons">
            <a href="index.php?action=registrar_usuario" class="auth-btn register-btn">
                <i class="fas fa-user-plus"></i> Registrarse
            </a>
            <a href="index.php" class="auth-btn home-btn">
                <i class="fas fa-home"></i> Inicio
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="login-card">
            <div class="login-header">
                <img src="img/logo.jpeg" alt="ChocoBox Logo" class="login-logo">
                <h1 class="login-title">Iniciar Sesión</h1>
                <p class="login-subtitle">Disfruta de nuestro contenido exclusivo</p>
            </div>
            
            <?php if (isset($_SESSION['message'])): ?>
                <div class="message <?php echo strpos($_SESSION['message'], '❌') !== false ? 'error-message' : 'success-message'; ?>">
                    <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>
            
            <form action="index.php?action=login_usuario" method="post">
                <div class="form-group">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" name="email" placeholder="tucorreo@ejemplo.com" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" name="password" id="password" placeholder="••••••••" required>
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                    
                    <!-- Mostrar requisitos de contraseña al enfocar -->
                    <div class="password-requirements" id="passwordRequirements" style="display: none;">
                        <div class="requirement" id="reqLength">
                            <i class="fas fa-circle"></i>
                            <span>Mínimo 8 - 16 caracteres</span>
                        </div>
                        <div class="requirement" id="reqUppercase">
                            <i class="fas fa-circle"></i>
                            <span>Al menos una mayúscula</span>
                        </div>
                        <div class="requirement" id="reqNumber">
                            <i class="fas fa-circle"></i>
                            <span>Al menos un número </span>
                        </div>
                    </div>
                    
                    <div style="text-align: right; margin-top: 5px;">
                        <a href="index.php?action=recuperar_password" class="login-link">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                </button>
            </form>
            
            <div class="login-footer">
                <p>¿No tienes una cuenta? <a href="index.php?action=registrar_usuario" class="login-link">Regístrate aquí</a></p>
            </div>
        </div>
    </div>
    
    <footer>
        <p>Contacto: info@chocobox.com | Tel: 3205968181</p>
        <p>&copy; 2025 Chocobox. Todos los derechos reservados.</p>
    </footer>
    
    <script>
        // Mostrar/ocultar contraseña
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        // Mostrar requisitos de contraseña al enfocar
        password.addEventListener('focus', function() {
            document.getElementById('passwordRequirements').style.display = 'block';
        });
        
        password.addEventListener('blur', function() {
            document.getElementById('passwordRequirements').style.display = 'none';
        });
        
        // Validar contraseña en tiempo real
        password.addEventListener('input', function() {
            const value = this.value;
            
            // Validar longitud
            if (value.length >= 8) {
                document.getElementById('reqLength').classList.add('valid');
                document.getElementById('reqLength').classList.remove('invalid');
                document.getElementById('reqLength').querySelector('i').className = 'fas fa-check-circle';
            } else {
                document.getElementById('reqLength').classList.add('invalid');
                document.getElementById('reqLength').classList.remove('valid');
                document.getElementById('reqLength').querySelector('i').className = 'fas fa-times-circle';
            }
            
            // Validar mayúsculas
            if (/[A-Z]/.test(value)) {
                document.getElementById('reqUppercase').classList.add('valid');
                document.getElementById('reqUppercase').classList.remove('invalid');
                document.getElementById('reqUppercase').querySelector('i').className = 'fas fa-check-circle';
            } else {
                document.getElementById('reqUppercase').classList.add('invalid');
                document.getElementById('reqUppercase').classList.remove('valid');
                document.getElementById('reqUppercase').querySelector('i').className = 'fas fa-times-circle';
            }
            
            // Validar números
            if (/[0-9]/.test(value)) {
                document.getElementById('reqNumber').classList.add('valid');
                document.getElementById('reqNumber').classList.remove('invalid');
                document.getElementById('reqNumber').querySelector('i').className = 'fas fa-check-circle';
            } else {
                document.getElementById('reqNumber').classList.add('invalid');
                document.getElementById('reqNumber').classList.remove('valid');
                document.getElementById('reqNumber').querySelector('i').className = 'fas fa-times-circle';
            }
        });
        
        // Animación al cargar
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.parentNode.querySelector('.input-icon').style.color = '#f4a261';
                });
                input.addEventListener('blur', () => {
                    input.parentNode.querySelector('.input-icon').style.color = '#d4a373';
                });
            });
        });
    </script>
</body>
</html>