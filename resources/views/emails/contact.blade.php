<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo Mensaje de Contacto - Constructora Helen</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #007bff; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; border-bottom: 1px solid #eee; }
        .footer { text-align: center; padding: 20px; font-size: 0.9em; color: #666; }
        .logo { max-width: 200px; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://constructorahelen.com/imagen/logo.png" alt="Constructora Helen" class="logo" style="max-width: 200px;">
        <h1>Nuevo Mensaje de Contacto</h1>
    </div>
    
    <div class="content">
        <p>Hola,</p>
        <p>Recibiste un nuevo mensaje desde el formulario de contacto:</p>
        
        <table>
            <tr><th>Nombre</th><td>{{ $data['nombre'] ?? 'N/A' }}</td></tr>
            <tr><th>Email</th><td>{{ $data['email'] ?? 'N/A' }}</td></tr>
            <tr><th>Teléfono</th><td>{{ $data['telefono'] ?? 'N/A' }}</td></tr>
            <tr><th>Tipo de Proyecto</th><td>{{ $data['tipo_proyecto'] ?? 'N/A' }}</td></tr>
            <tr><th>Mensaje</th><td>{{ $data['mensaje'] ?? 'N/A' }}</td></tr>
        </table>
        
        <p>Saludos,<br>Equipo Constructora Helen</p>
    </div>
    
    <div class="footer">
        <p>Este es un mensaje automático. Por favor no respondas directamente a este email.</p>
    </div>
</body>
</html>
