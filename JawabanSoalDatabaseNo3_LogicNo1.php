<?php
// jawaban soal bagian logic no.1 
$str = "QWERTYUIOP";
$reverse = strrev($str);

echo $reverse;

// jawaban query soal bagian database no.3
// SELECT 
// c.name, 
// b.category, 
// b.title, 
// b.description, 
// a.created_at,
// a.is_read,
// a.created_at as readt_at
// FROM notification_reads AS a 
// LEFT JOIN notifications AS b ON a.notification_id = b.id 
// LEFT JOIN users AS c ON a.user_id = c.id
// WHERE 
// c.name = 'diki';