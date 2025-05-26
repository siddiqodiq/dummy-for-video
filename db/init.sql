CREATE DATABASE latsitardanus_db;
USE latsitardanus_db;

CREATE TABLE file_rahasia (
  id INT PRIMARY KEY,
  nama_file VARCHAR(100),
  isi TEXT
);

INSERT INTO file_rahasia VALUES
(1, 'latsitardanus45.txt', 
'🔥 [INFORMASI RAHASIA] 🔥

----Latsitardanus XLV----
Kontingen : Poltek SSN XX
Lokasi    : Banten
Status    : COMING SOON

Be Ready !!!
');
