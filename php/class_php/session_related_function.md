


# 🐘 PHP Session Functions Explained

This document provides a detailed explanation of important PHP session-related functions with examples.

---

## ✅ 1. `session_start()`
**Starts a new session or resumes the existing session.**
```php
session_start();
$_SESSION['user'] = 'John';
```

---

## ✅ 2. `session_id()`
**Get or set the current session ID.**
```php
echo session_id();
```

---

## ✅ 3. `session_name()`
**Get or set the name of the session (default: PHPSESSID).**
```php
echo session_name();
```

---

## ✅ 4. `session_module_name()`
**Returns the current session storage module (e.g., `files`).**
```php
echo session_module_name();
```

---

## ✅ 5. `session_create_id()`
**Creates a new unique session ID (used for custom session handling).**
```php
$new_id = session_create_id();
echo $new_id;
```

---

## ✅ 6. `session_encode()`
**Encodes the current session data into a session-encoded string.**
```php
$_SESSION['name'] = 'Mayank';
echo session_encode(); // Output: name|s:6:"Mayank";
```

---

## ✅ 7. `session_decode()`
**Decodes a session-encoded string into the session.**
```php
session_decode('name|s:4:"John";');
echo $_SESSION['name']; // Output: John
```

---

## ✅ 8. `session_destroy()`
**Destroys all session data.**
```php
session_start();
session_destroy();
```

---

## ✅ 9. `session_unset()`
**Frees all session variables.**
```php
session_start();
session_unset();
```

---

## ✅ 10. `session_write_close()`
**Writes session data and closes the session.**
```php
session_start();
$_SESSION['key'] = 'value';
session_write_close();
```

---

## ✅ 11. `session_reset()`
**Resets the session array to its original values.**
```php
$_SESSION['counter'] = 10;
$_SESSION['counter'] = 20;
session_reset();
```

---

## ✅ 12. `session_get_cookie_params()`
**Returns session cookie settings like path, domain, lifetime.**
```php
print_r(session_get_cookie_params());
```

---

## ✅ 13. `session_set_cookie_params()`
**Sets cookie parameters before starting a session.**
```php
session_set_cookie_params(3600); // 1-hour expiry
session_start();
```

---

## ✅ 14. `session_status()`
**Returns the status of the current session.**
- `PHP_SESSION_DISABLED`: Sessions are disabled
- `PHP_SESSION_NONE`: Sessions are enabled, but none exists
- `PHP_SESSION_ACTIVE`: A session is active

```php
echo session_status();
```

---

## ✅ 15. `session_set_save_handler()`
**Defines custom handlers for saving sessions (advanced).**
```php
// Usually used with custom database session storage
```

---

> 🔒 **Sessions in PHP** are essential for maintaining user state across pages. They store data server-side and are identified by a session ID stored in a cookie on the client.

---

### 👨‍💻 Author
**Mayank Garg**  
Feel free to use and modify this as per your need.

```
