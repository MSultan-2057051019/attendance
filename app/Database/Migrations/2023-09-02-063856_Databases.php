<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Databases extends Migration
{
    public function up()
    {
        $this->db->query("CREATE DATABASE IF NOT EXISTS `ats` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
        $this->db->query("USE `ats`");

        $this->db->query("CREATE TABLE `login` (
            `id_user` int(5) NOT NULL,
            `password` varchar(64) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");

        $loginData = [
            ['id_user' => 4, 'password' => 'asd'],
            ['id_user' => 3, 'password' => 'asd']
        ];
        $this->db->table('login')->insertBatch($loginData);

        $this->db->query("CREATE TABLE `tamu` (
            `id_tamu` int(5) NOT NULL,
            `pict` varchar(255) NOT NULL,
            `nama_tamu` varchar(128) NOT NULL,
            `noktp_tamu` varchar(32) NOT NULL,
            `nohp_tamu` varchar(32) NOT NULL,
            `asal_tamu` varchar(128) NOT NULL,
            `tgl_masuk` date DEFAULT NULL,
            `tgl_keluar` date DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");

        $tamuData = [
            ['id_tamu' => 2, 'pict' => 'felix.png', 'nama_tamu' => 'Felix Nmecha', 'noktp_tamu' => '1234456', 'nohp_tamu' => '', 'asal_tamu' => '', 'tgl_masuk' => NULL, 'tgl_keluar' => '2023-07-10'],
            ['id_tamu' => 3, 'pict' => 'qwerty.jfif', 'nama_tamu' => 'qwerty', 'noktp_tamu' => '342234234', 'nohp_tamu' => '234243234', 'asal_tamu' => 'Mirage Jakarta Depok Bandung Tanggerang Bekasi', 'tgl_masuk' => '2023-07-05', 'tgl_keluar' => '2023-07-10']
        ];
        $this->db->table('tamu')->insertBatch($tamuData);

        $this->db->query("CREATE TABLE `user` (
            `id_user` int(5) NOT NULL,
            `pict` varchar(255) NOT NULL,
            `nama_user` varchar(128) DEFAULT NULL,
            `nip_user` varchar(64) DEFAULT NULL,
            `jabatan_user` varchar(128) NOT NULL,
            `tgl_kerja` date DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");

        $userData = [
            ['id_tamu' => 3, 'pict' => 'karim.jpg', 'nama_user' => 'Karim Adem', 'nip_user' => '345', 'jabatan_user' => 'Security', 'tgl_kerja' => '2023-08-31'],
            ['id_tamu' => 4, 'pict' => 'donyel.jpg', 'nama_user' => 'Donyell Malen', 'nip_user' => '123', 'jabatan_user' => 'Admin', 'tgl_kerja' => '2023-08-18'],
            ['id_tamu' => 5, 'pict' => '1.jpeg', 'nama_user' => 'Name 378', 'nip_user' => '51034', 'jabatan_user' => 'HR', 'tgl_kerja' => '2023-03-14'],
            ['id_tamu' => 6, 'pict' => '2.jpeg', 'nama_user' => 'Name 207', 'nip_user' => '84213', 'jabatan_user' => 'IT', 'tgl_kerja' => '2023-05-17'],
            ['id_tamu' => 7, 'pict' => '3.jpeg', 'nama_user' => 'Name 621', 'nip_user' => '14824', 'jabatan_user' => 'HR', 'tgl_kerja' => '2023-06-29'],
            ['id_tamu' => 8, 'pict' => '4.jpeg', 'nama_user' => 'Name 393', 'nip_user' => '98788', 'jabatan_user' => 'Finance', 'tgl_kerja' => '2023-08-07'],
            ['id_tamu' => 9, 'pict' => '5.jpeg', 'nama_user' => 'Name 638', 'nip_user' => '15195', 'jabatan_user' => 'Marketing', 'tgl_kerja' => '2023-03-11'],
            ['id_tamu' => 10, 'pict' => '6.jpeg', 'nama_user' => 'Name 280', 'nip_user' => '17239', 'jabatan_user' => 'HR', 'tgl_kerja' => '2023-06-16'],
            ['id_tamu' => 11, 'pict' => '7.jpeg', 'nama_user' => 'Name 259', 'nip_user' => '34331', 'jabatan_user' => 'Finance', 'tgl_kerja' => '2023-08-18'],
            ['id_tamu' => 12, 'pict' => '8.jpeg', 'nama_user' => 'Name 143', 'nip_user' => '17490', 'jabatan_user' => 'Sales', 'tgl_kerja' => '2023-03-03'],
            ['id_tamu' => 13, 'pict' => '9.jpeg', 'nama_user' => 'Name 985', 'nip_user' => '70417', 'jabatan_user' => 'Marketing', 'tgl_kerja' => '2023-08-15'],
            ['id_tamu' => 14, 'pict' => '10.jpeg', 'nama_user' => 'Name 216', 'nip_user' => '19981', 'jabatan_user' => 'Sales', 'tgl_kerja' => '2023-01-03'],
            ['id_tamu' => 15, 'pict' => '11.jpeg', 'nama_user' => 'Name 652', 'nip_user' => '40344', 'jabatan_user' => 'Marketing', 'tgl_kerja' => '2023-04-25'],
            ['id_tamu' => 16, 'pict' => '12.jpeg', 'nama_user' => 'Name 761', 'nip_user' => '96186', 'jabatan_user' => 'Sales', 'tgl_kerja' => '2023-08-04'],
            ['id_tamu' => 17, 'pict' => '13.jpeg', 'nama_user' => 'Name 100', 'nip_user' => '39557', 'jabatan_user' => 'Finance', 'tgl_kerja' => '2023-02-22'],
            ['id_tamu' => 18, 'pict' => '14.jpeg', 'nama_user' => 'Name 154', 'nip_user' => '93649', 'jabatan_user' => 'Marketing', 'tgl_kerja' => '2023-07-31'],
            ['id_tamu' => 19, 'pict' => '15.jpeg', 'nama_user' => 'Name 674', 'nip_user' => '22050', 'jabatan_user' => 'HR', 'tgl_kerja' => '2023-04-09'],
            ['id_tamu' => 20, 'pict' => '16.jpeg', 'nama_user' => 'Name 557', 'nip_user' => '73949', 'jabatan_user' => 'IT', 'tgl_kerja' => '2023-05-28'],
            ['id_tamu' => 21, 'pict' => '17.jpeg', 'nama_user' => 'Name 114', 'nip_user' => '26185', 'jabatan_user' => 'Finance', 'tgl_kerja' => '2023-06-08'],
            ['id_tamu' => 22, 'pict' => '18.jpeg', 'nama_user' => 'Name 574', 'nip_user' => '38570', 'jabatan_user' => 'Sales', 'tgl_kerja' => '2023-06-20'],
            ['id_tamu' => 23, 'pict' => '19.jpeg', 'nama_user' => 'Name 695', 'nip_user' => '18796', 'jabatan_user' => 'HR', 'tgl_kerja' => '2023-02-02'],
            ['id_tamu' => 24, 'pict' => '20.jpeg', 'nama_user' => 'Name 335', 'nip_user' => '29471', 'jabatan_user' => 'Sales', 'tgl_kerja' => '2023-03-28']
        ];
        $this->db->table('user')->insertBatch($userData);

        $this->db->query("ALTER TABLE `login` ADD KEY `login` (`id_user`)");
        $this->db->query("ALTER TABLE `tamu` ADD PRIMARY KEY (`id_tamu`)");
        $this->db->query("ALTER TABLE `user` ADD PRIMARY KEY (`id_user`)");
        $this->db->query("ALTER TABLE `tamu` MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5");
        $this->db->query("ALTER TABLE `user` MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25");
        $this->db->query("ALTER TABLE `login` ADD CONSTRAINT `login` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)");
    }

    public function down()
    {
        // Drop foreign key
        $this->db->query("ALTER TABLE `login` DROP FOREIGN KEY `login`");

        // Remove primary keys and auto-increment settings
        $this->db->query("ALTER TABLE `user` DROP PRIMARY KEY");
        $this->db->query("ALTER TABLE `tamu` DROP PRIMARY KEY");
        $this->db->query("ALTER TABLE `tamu` MODIFY `id_tamu` int(5) NOT NULL");
        $this->db->query("ALTER TABLE `user` MODIFY `id_user` int(5) NOT NULL");

        // Drop tables
        $this->db->query("DROP TABLE IF EXISTS `login`");
        $this->db->query("DROP TABLE IF EXISTS `tamu`");
        $this->db->query("DROP TABLE IF EXISTS `user`");

        // Switch back to the 'default' database
        $this->db->query("USE `default`");

        // Drop the 'ats' database
        $this->db->query("DROP DATABASE IF EXISTS `ats`");
    }
}