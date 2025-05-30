<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocobox - Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #d4a373;
            --secondary-color: #fefae0;
            --dark-color: #2a2a2a;
            --light-color: #ffffff;
            --error-color: #e63946;
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
        
        .register-card {
            background-color: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 500px;
            padding: 30px;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .register-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-color);
            margin-bottom: 15px;
        }
        
        .register-title {
            color: var(--primary-color);
            margin: 0;
            font-size: 28px;
        }
        
        .register-subtitle {
            color: var(--secondary-color);
            margin: 5px 0 0;
            font-size: 14px;
            font-weight: normal;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-col {
            flex: 1;
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
        
        .register-footer {
            text-align: center;
            margin-top: 20px;
        }
        
        .register-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .register-link:hover {
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
            border-left: 4px solid #38b000;
            color: #38b000;
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
        
        .password-strength {
            height: 5px;
            background-color: #ddd;
            border-radius: 5px;
            margin-top: 5px;
            overflow: hidden;
        }
        
        .strength-meter {
            height: 100%;
            width: 0;
            transition: width 0.3s ease, background-color 0.3s ease;
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
            
            .register-card {
                padding: 20px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
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
            <a href="index.php?action=login_usuario" class="auth-btn login-btn">
                <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
            </a>
            <a href="index.php" class="auth-btn home-btn">
                <i class="fas fa-home"></i> Inicio
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="register-card">
            <div class="register-header">
                <img src="img/logo.jpeg" alt="ChocoBox Logo" class="register-logo">
                <h1 class="register-title">Crear Cuenta</h1>
                <p class="register-subtitle">Únete a nuestra comunidad</p>
            </div>
            
            <?php if (isset($_SESSION['errors'])): ?>
                <div class="message error-message">
                    <?php 
                        foreach ($_SESSION['errors'] as $error) {
                            echo "<p>$error</p>";
                        }
                        unset($_SESSION['errors']); 
                    ?>
                </div>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['message'])): ?>
                <div class="message success-message">
                    <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>
            
            <form action="index.php?action=registrar_usuario" method="post">
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" class="form-control" name="nombre" placeholder="Tu nombre" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="apellido" class="form-label">Apellido</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" class="form-control" name="apellido" placeholder="Tu apellido" required>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <div class="input-with-icon">
                        <i class="fas fa-calendar-alt input-icon"></i>
                        <input type="date" class="form-control" name="fecha_nacimiento" required>
                    </div>
                </div>
                
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
                    <div class="password-strength">
                        <div class="strength-meter" id="strengthMeter"></div>
                    </div>
                    <small style="color: var(--secondary-color); display: block; margin-top: 5px;">
                        La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.
                    </small>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="••••••••" required>
                        <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                    </div>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-user-plus"></i> Registrarse
                </button>
            </form>
            
            <div class="register-footer">
                <p>¿Ya tienes una cuenta? <a href="index.php?action=login_usuario" class="register-link">Inicia sesión aquí</a></p>
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
        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#confirm_password');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        toggleConfirmPassword.addEventListener('click', function() {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        // Validación de fortaleza de contraseña
        password.addEventListener('input', function() {
            const strengthMeter = document.getElementById('strengthMeter');
            const strength = calculatePasswordStrength(this.value);
            
            strengthMeter.style.width = strength.percentage + '%';
            strengthMeter.style.backgroundColor = strength.color;
        });
        
        function calculatePasswordStrength(password) {
            let strength = 0;
            
            // Longitud mínima
            if (password.length > 0) strength += 10;
            if (password.length >= 8) strength += 20;
            
            // Contiene mayúsculas
            if (/[A-Z]/.test(password)) strength += 20;
            
            // Contiene números
            if (/[0-9]/.test(password)) strength += 20;
            
            // Contiene caracteres especiales
            if (/[^A-Za-z0-9]/.test(password)) strength += 30;
            
            // Determinar color
            let color = '#e63946'; // Rojo (débil)
            if (strength > 60) color = '#f4a261'; // Naranja (media)
            if (strength > 80) color = '#2a9d8f'; // Verde (fuerte)
            
            return {
                percentage: strength,
                color: color
            };
        }
        
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