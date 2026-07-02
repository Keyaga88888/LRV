<?php

namespace App\Swagger;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'Attendance API',
    description: 'Attendance Module API'
)]

#[OA\Server(
    url: 'http://localhost',
    description: 'Local Server'
)]

#[OA\SecurityScheme(
    securityScheme: 'bearerAuth',
    type: 'http',
    scheme: 'bearer',
    bearerFormat: 'JWT'
)]

class OpenApiSpec {}
// Mỗi lần thêm API
// php artisan l5-swagger:generate
