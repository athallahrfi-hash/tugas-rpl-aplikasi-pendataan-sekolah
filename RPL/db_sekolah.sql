CREATE DATABASE db_sekolah;

USE db_sekolah;

CREATE TABLE admin (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL,
nama VARCHAR(100) NOT NULL
);

CREATE TABLE siswa (
nis VARCHAR(20) PRIMARY KEY,
nama VARCHAR(100) NOT NULL,
kelas VARCHAR(10) NOT NULL,
alamat TEXT,
jenis_kelamin ENUM('L', 'P') NOT NULL
);

INSERT INTO admin (username, password, nama) VALUES
('admin', MD5('admin123'), 'Administrator');