@echo off
echo ============================================
echo   Sistema Blog - Docker Setup
echo ============================================
echo.

:: Verifica se Docker está rodando
docker info >nul 2>&1
if %errorlevel% neq 0 (
    echo [ERRO] Docker nao esta rodando! Inicie o Docker Desktop e tente novamente.
    pause
    exit /b 1
)

echo [1/3] Parando containers antigos (se houver)...
docker-compose down

echo.
echo [2/3] Construindo e subindo containers...
docker-compose up --build -d

echo.
echo [3/3] Aguardando o banco de dados ficar pronto...
timeout /t 15 /nobreak >nul

echo.
echo ============================================
echo   PRONTO! Sistema rodando em:
echo.
echo   Aplicacao:  http://localhost:8080
echo   phpMyAdmin: http://localhost:8081
echo.
echo   BD: blog_ci3
echo   Usuario: blog_user  Senha: blog_pass123
echo   Root: root  Senha: rootpassword
echo ============================================
echo.
pause
