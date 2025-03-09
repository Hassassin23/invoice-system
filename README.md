# Invoice Management System
Професионална система за управление на потребители и фактури, изградена с CodeIgniter 4.  
Проектът демонстрира CRUD операции, филтрация по дати и JOIN заявки между таблици.

---

### Технологии:
- PHP 8.4.4+
- CodeIgniter 4
- MySQL

### Инсталация:
1. Клонирайте репозитория:
   ```bash
   git clone https://github.com/Hassassin23/invoice-system.git
   ```

2. Инсталирайте зависимостите:
   ```bash
   cd invoices-project
   composer install
   ```

3. Създайте база данни `invoices_db` и импортирайте таблиците:
   ```sql
   -- Вижте invoices_db.sql
   ```

4. Конфигурирайте базата данни в `app/Config/Database.php`:
   ```php
   public $default = [
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'invoices_db',
        'DBDriver' => 'MySQLi',
   ];
   ```

5. Стартирайте сървъра:
   ```bash
   php spark serve
   ```

6. Отворете в браузър:
   - Потребители: `http://localhost:8080/users`
   - Фактури: `http://localhost:8080/invoices/2023-10-01/2023-10-31`
   - Свързани данни: `http://localhost:8080/joined`
  
     
🚀 Функционалности
Достуапни Endpoints

    GET /users
    Показва всички потребители, сортирани по ID в низходящ ред.

    GET /invoices/{start_date}/{end_date}
    Филтрира фактури по период (напр. /invoices/2023-10-01/2023-10-31).

    GET /joined
    Показва свързани данни между потребители и фактури.

Особености

    Валидация на входни данни (EIK, дати).

    Форматиране на дати за четимост.

    Защита срещу XSS атаки чрез esc().
