<?php
// Cookies is just like a tag for identify the user or kind of a token. It can be their category of your favorite product, most visited product, or any thing.
// what is cookie- It is an information which stores the php on the user's computer(It is a piece of information which is stored on the usre's computer. It is called as cookies.)


// Cookies in PHP are used for maintaining state and storing user-specific information
// A cookie is a small file that the server embeds on the user's computer


// Cookies | Sessions
// Cookies stores the normal/casual data and it is directly store in your browsers but sessions stores the sensitive data and carefully store on the server and to access the session values on the server a session cookie is held. session used to store the secure data.
setcookie("category", "books", time()+86400, "/");


?>