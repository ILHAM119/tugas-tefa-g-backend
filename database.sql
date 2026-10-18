CREATE DATABASE IF NOT EXISTS smk;
USE smk;

CREATE TABLE IF NOT EXISTS anggota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    kelas VARCHAR(20)
);

INSERT INTO anggota (nama, kelas) VALUES 
('ilham ardi hama', 'XI RPL 1'),
('Siti Aminah', 'XI RPL 2');