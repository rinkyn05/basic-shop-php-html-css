# Rinkyn Codes - Tienda PHP Demo - Sitio Web Básico - Estilo Tienda - Creado Con PHP, HTML Y CSS 🌐

Este es un proyecto sencillo de una **tienda en línea**, creado utilizando **PHP**, **HTML** y **CSS**. El objetivo principal es aprender y practicar las bases del desarrollo web dinámico, diseñando una estructura funcional para gestionar productos, carrito de compras y pedidos.

---

## 🌟 Características

- **Diseño limpio y profesional**: Ideal para pequeñas tiendas o proyectos de aprendizaje.
- **Estructura bien organizada**: Secciones principales como **header**, **categorías**, **productos**, **carrito**, y **footer**.
- **Completamente funcional**: Incluye funcionalidades básicas de una tienda como:
  - Gestión de productos.
  - Carrito de compras dinámico.
  - Procesamiento de pedidos.
- **Responsive Design**: Adaptado a dispositivos móviles, tablets y escritorios.
- **Uso de Font Awesome**: Íconos decorativos y funcionales para mejorar la experiencia del usuario.
- **Código modular**: Separación clara entre lógica (PHP), estructura (HTML) y estilos (CSS).

---

## 🖼️ Vista Previa

### 📌 Demo en Vivo
<a href="https://rinkyn05.github.io/php_store_demo/" target="_blank">Haz clic aquí para ver el demo en vivo</a>

### 📄 Página Principal
![Vista principal](https://i.postimg.cc/BbKGF22z/light-home.png)

### 📄 Detalles del Producto
![Detalles del producto](https://i.postimg.cc/cLm66Nxn/light-post.png)

### 📄 Carrito de Compras
![Carrito de compras](https://i.postimg.cc/C1MzZjZ8/cart.png)

---

## 💂️️ Estructura del Proyecto

El proyecto sigue una estructura organizada para facilitar la navegación, personalización y escalabilidad:

```plaintext
raiz/
├── index.php                # Página principal de la tienda
├── paginas/
│   ├── productos.php        # Página de listado de productos
│   ├── carrito.php          # Página del carrito de compras
│   ├── contacto.php         # Página de contacto
│   └── categorias.php       # Página para mostrar productos por categoría
├── includes/                # Archivos reutilizables (header, footer, etc.)
├── multimedia/              # Carpeta que contiene las imágenes utilizadas
├── css/                     # Archivos CSS para el diseño y estilos
├── php/                     # Lógica de negocio (controladores, funciones, etc.)
├── db/                      # Archivos relacionados con la base de datos
├── js/                      # Archivos JavaScript opcionales
├── sql/                     # Scripts SQL para crear la base de datos
├── assets/                  # Archivos estáticos adicionales
└── README.md                # Documentación del proyecto
```

---

## 🚀 Cómo Usar

### Clonar el Repositorio
Clona el proyecto a tu máquina local usando el siguiente comando:

```bash
git clone https://github.com/rinkyn05/php_store_demo
```

### Configuración de la Base de Datos

1. Asegúrate de tener un servidor local configurado (por ejemplo, XAMPP o WAMP).
2. Crea una base de datos nueva en tu servidor local.
3. Importa el archivo `sql/db_setup.sql` en tu base de datos para crear las tablas necesarias.
4. Actualiza el archivo `php/config.php` con tus credenciales de base de datos:

```php
<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Cambia esto si tienes una contraseña
$dbname = 'nombre_de_tu_base_de_datos';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
```

### Ejecutar el Proyecto

1. Mueve el proyecto a la carpeta `htdocs` de tu servidor local.
2. Accede al proyecto desde tu navegador en la URL:
   ```
   http://localhost/php_store_demo/
   ```

### Personalización

- **Agregar productos**: Modifica los datos directamente en la base de datos o crea un panel de administración en la carpeta `paginas/admin/`.
- **Actualizar diseño**: Modifica los archivos CSS en la carpeta `css/`.
- **Ampliar funcionalidad**: Agrega nuevas funciones en la carpeta `php/`.

### Subir a un Servidor

1. Sube todos los archivos del proyecto a tu servidor web.
2. Configura las credenciales de base de datos en el archivo `php/config.php`.
3. Asegúrate de que las extensiones de PHP necesarias (como MySQLi) estén habilitadas en el servidor.

---

## 🛠️ Tecnologías Utilizadas

- **PHP**: Lógica de negocio y conexión con la base de datos.
- **HTML5**: Estructura semántica y moderna.
- **CSS3**: Diseño responsivo y atractivo.
- **MySQL**: Base de datos para almacenar productos, pedidos y usuarios.
- **Font Awesome**: Íconos decorativos y funcionales.

---

## 📝 Licencia

Este proyecto está bajo la licencia **MIT**. Puedes usarlo, modificarlo y distribuirlo libremente. 🎉

---

## ❤️ Contribuciones

¡Las contribuciones son bienvenidas! Si deseas agregar más funcionalidades o mejorar el diseño, no dudes en hacer un pull request.
