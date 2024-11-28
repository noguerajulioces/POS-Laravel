<?php

return [

    /*
     *
     * Traducciones compartidas.
     *
     */
    'title' => 'Triangle POS',
    'next' => 'Siguiente paso',
    'back' => 'Anterior',
    'finish' => 'Instalar',
    'forms' => [
        'errorTitle' => 'Ocurrieron los siguientes errores:',
    ],

    /*
     *
     * Traducciones de la página principal.
     *
     */
    'welcome' => [
        'templateTitle' => 'Bienvenido',
        'title'   => 'Instalar Triangle POS',
        'message' => 'Asistente de instalación y configuración fácil.',
        'next'    => 'Verificar requisitos',
    ],

    /*
     *
     * Traducciones de la página de requisitos.
     *
     */
    'requirements' => [
        'templateTitle' => 'Paso 1 | Requisitos del servidor',
        'title' => 'Requisitos del servidor',
        'next'    => 'Verificar permisos',
    ],

    /*
     *
     * Traducciones de la página de permisos.
     *
     */
    'permissions' => [
        'templateTitle' => 'Paso 2 | Permisos',
        'title' => 'Permisos',
        'next' => 'Configurar entorno',
    ],

    /*
     *
     * Traducciones de la página de entorno.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Paso 3 | Configuración del entorno',
            'title' => 'Configuración del entorno',
            'desc' => 'Selecciona cómo deseas configurar el archivo <code>.env</code> de la aplicación.',
            'wizard-button' => 'Asistente de configuración',
            'classic-button' => 'Editor clásico de texto',
        ],
        'wizard' => [
            'templateTitle' => 'Paso 3 | Configuración del entorno | Asistente guiado',
            'title' => 'Asistente guiado de configuración de <code>.env</code>',
            'tabs' => [
                'environment' => 'Entorno',
                'database' => 'Base de datos',
                'application' => 'Aplicación',
            ],
            'form' => [
                'name_required' => 'Se requiere un nombre para el entorno.',
                'app_name_label' => 'Nombre de la aplicación',
                'app_name_placeholder' => 'Nombre de la aplicación',
                'app_environment_label' => 'Entorno de la aplicación',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Desarrollo',
                'app_environment_label_qa' => 'QA',
                'app_environment_label_production' => 'Producción',
                'app_environment_label_other' => 'Otro',
                'app_environment_placeholder_other' => 'Introduce tu entorno...',
                'app_debug_label' => 'Depuración de la aplicación',
                'app_debug_label_true' => 'Activado',
                'app_debug_label_false' => 'Desactivado',
                'app_log_level_label' => 'Nivel de registro de la aplicación',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'URL de la aplicación',
                'app_url_placeholder' => 'URL de la aplicación',
                'db_connection_failed' => 'No se pudo conectar con la base de datos.',
                'db_connection_label' => 'Conexión de la base de datos',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host de la base de datos',
                'db_host_placeholder' => 'Host de la base de datos',
                'db_port_label' => 'Puerto de la base de datos',
                'db_port_placeholder' => 'Puerto de la base de datos',
                'db_name_label' => 'Nombre de la base de datos',
                'db_name_placeholder' => 'Nombre de la base de datos',
                'db_username_label' => 'Nombre de usuario de la base de datos',
                'db_username_placeholder' => 'Nombre de usuario de la base de datos',
                'db_password_label' => 'Contraseña de la base de datos',
                'db_password_placeholder' => 'Contraseña de la base de datos',

                'app_tabs' => [
                    'more_info' => 'Más información',
                    'broadcasting_title' => 'Transmisión, caché, sesión y cola',
                    'broadcasting_label' => 'Driver de transmisión',
                    'broadcasting_placeholder' => 'Driver de transmisión',
                    'cache_label' => 'Driver de caché',
                    'cache_placeholder' => 'Driver de caché',
                    'session_label' => 'Driver de sesión',
                    'session_placeholder' => 'Driver de sesión',
                    'queue_label' => 'Driver de cola',
                    'queue_placeholder' => 'Driver de cola',
                    'redis_label' => 'Driver de Redis',
                    'redis_host' => 'Host de Redis',
                    'redis_password' => 'Contraseña de Redis',
                    'redis_port' => 'Puerto de Redis',

                    'mail_label' => 'Correo',
                    'mail_driver_label' => 'Driver de correo',
                    'mail_driver_placeholder' => 'Driver de correo',
                    'mail_host_label' => 'Host de correo',
                    'mail_host_placeholder' => 'Host de correo',
                    'mail_port_label' => 'Puerto de correo',
                    'mail_port_placeholder' => 'Puerto de correo',
                    'mail_username_label' => 'Usuario de correo',
                    'mail_username_placeholder' => 'Usuario de correo',
                    'mail_password_label' => 'Contraseña de correo',
                    'mail_password_placeholder' => 'Contraseña de correo',
                    'mail_encryption_label' => 'Cifrado de correo',
                    'mail_encryption_placeholder' => 'Cifrado de correo',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'ID de la aplicación Pusher',
                    'pusher_app_id_palceholder' => 'ID de la aplicación Pusher',
                    'pusher_app_key_label' => 'Clave de la aplicación Pusher',
                    'pusher_app_key_palceholder' => 'Clave de la aplicación Pusher',
                    'pusher_app_secret_label' => 'Secreto de la aplicación Pusher',
                    'pusher_app_secret_palceholder' => 'Secreto de la aplicación Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Configurar base de datos',
                    'setup_application' => 'Configurar aplicación',
                    'install' => 'Instalar',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Paso 3 | Configuración del entorno | Editor clásico',
            'title' => 'Editor clásico del entorno',
            'save' => 'Guardar .env',
            'back' => 'Usar asistente',
            'install' => 'Guardar e instalar',
        ],
        'success' => 'La configuración de tu archivo .env se ha guardado correctamente.',
        'errors' => 'No se pudo guardar el archivo .env. Por favor, créalo manualmente.',
    ],

    'install' => 'Instalar',

    /*
     *
     * Traducciones del registro de instalación.
     *
     */
    'installed' => [
        'success_log_message' => 'El instalador de Laravel se instaló correctamente el ',
    ],

    /*
     *
     * Traducciones de la página final.
     *
     */
    'final' => [
        'title' => 'Instalación finalizada',
        'templateTitle' => 'Instalación finalizada',
        'finished' => 'La aplicación se ha instalado correctamente.',
        'migration' => 'Salida de la consola de migración y seed:',
        'console' => 'Salida de la consola de la aplicación:',
        'log' => 'Registro de instalación:',
        'env' => 'Archivo final .env:',
        'exit' => 'Haz clic aquí para salir',
    ],

    /*
     *
     * Traducciones específicas de actualización.
     *
     */
    'updater' => [
        /*
         *
         * Traducciones compartidas.
         *
         */
        'title' => 'Actualizador de Laravel',

        /*
         *
         * Traducciones de la página de bienvenida para la actualización.
         *
         */
        'welcome' => [
            'title'   => 'Bienvenido al actualizador',
            'message' => 'Bienvenido al asistente de actualización.',
        ],

        /*
         *
         * Traducciones de la página de resumen para la actualización.
         *
         */
        'overview' => [
            'title'   => 'Resumen',
            'message' => 'Hay 1 actualización disponible.|Hay :number actualizaciones disponibles.',
            'install_updates' => 'Instalar actualizaciones',
        ],

        /*
         *
         * Traducciones de la página final.
         *
         */
        'final' => [
            'title' => 'Finalizado',
            'finished' => 'La base de datos de la aplicación se actualizó correctamente.',
            'exit' => 'Haz clic aquí para salir',
        ],

        'log' => [
            'success_message' => 'El instalador de Laravel se actualizó correctamente el ',
        ],
    ],
];